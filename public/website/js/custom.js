
// For radio amount selection START
    $(document).ready(function() {
        $('.paymentsmethod').click(function(event) {
            //alert("clicked");
            event.stopPropagation(); // Stop event propagation
            $('.paymentsmethod').removeClass('active');
            //alert($('input[type=radio]').val());
            $(this).addClass('active');
            $(this).find('input[type=radio]').prop('checked', true);
            var radioValue = $(this).find('input[name="triptype"]').val();
            //New changes
            //var rate=$('#currSelCurRate').val();
            //alert(rate);
           // radioValue = Math.floor(radioValue * rate);
            //New changes end
            $('.Final_amount').val(radioValue);
            $(".Final_amount").text(radioValue);
            $('.StripeFinal_amount').val(radioValue+'00');
            $(".stripe-button")
            .attr({
                "data-amount": radioValue+'00',
            });
        });
    });

    $(document).ready(function() {
        $('.cardRadioAmount').on('click', function() {
            var radioValue = $(this).find('input[name="plan"]').val();
            // alert(radioValue);
            $('.Final_amount').val(radioValue);
            $(".Final_amount").text(radioValue);
            $('.StripeFinal_amount').val(radioValue+'00');
            $(".stripe-button")
            .attr({
                "data-amount": radioValue+'00',
            });
        });
    });

    $('.Final_amount').keyup(function(){
        var value = $(this).val();
        $('.Final_amount').val(value);
        $('.paymentsmethod').removeClass('active');
        $(".Final_amount").text(value);
        $(".stripe-button")
        .attr({
            "data-amount": value+'00',
            "src": "https://checkout.stripe.com/checkout.js?xx="+Math.random()
        });
    });
// For radio amount selection END

// For Currency change Fun START
function currencyselectorFun(currencyValue) {
    var selected = $(".currency-selector option:selected");
    $(".currency-symbol").text(selected.data("symbol"));
    $(".Final_currencySymbol").val(selected.data("symbol"));
    //$('.Final_currency').val(currencyValue);
    $('.Final_currency').text(currencyValue);
    $(".stripe-button")
        .attr({
            "data-currency": currencyValue,
            "src": "https://checkout.stripe.com/checkout.js?xx="+Math.random()
        });
    // new changes START
    if(currencyValue!=''){
        //alert("if");
        currConversionNow(0,100,currencyValue);
    }
    else
    {
        //alert("else");
        rate=currConversionNow(0,1,'USD'); 
    }
    //new changes END

    // Locate the active paymentsmethod container
   // var activeContainer = $('.paymentsmethod.active');
    // Find the checked radio button within the active container
   // var selectedRadio = activeContainer.find('input[name="triptype"]:checked');
    // Get the value of the checked radio button
    //var selectedValue = selectedRadio.val();
    
    //New changes
    var selectedValue = $(".paymentsmethod.active .currency-val-Go").text();
    if(selectedValue=='' || selectedValue==0){
        var selectedValue = $(".currency-val-Go-hidden0").text();
    }
    //alert("selected value"+selectedValue);
    var rate=$('#currSelCurRate').val();
    // alert(rate);
    radioValue = Math.floor(selectedValue * rate);
    //$('.Final_amount').val(radioValue);
    //$(".Final_amount").text(radioValue);
    $('.StripeFinal_amount').val(radioValue+'00');
    $(".stripe-button").attr({"data-amount": radioValue+'00', });
    //New changes end
    }
    // For Currency change Fun END

function currConversionNow(index,spanValue,currencyValue)
{
    var csrfToken = $('meta[name="csrf-token"]').attr('content'); 
    $.ajax({
        type: "POST",
        url:"/stripe/checkout2",
        data: {
            currencyValue: currencyValue,
            amount: spanValue
        },
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) 
        {
            // Assuming response is already a JSON object
            console.log(response);
            // Access the specific value using the key
            var rate = response[currencyValue];
            $('#currSelCurRate').val(rate);
            // Iterate over each span element with class "currency-val-Go"
                
            $('.currency-val-Go').each(function(index, element) {
                // Get the current value displayed in currency-val-Go
                var currentAmount = parseFloat($(element).text());
                var originalAmount = parseFloat($('.currency-val-Go-hidden.currency-val-Go-hidden'+index).text().trim());
                var preAmt=$('.currency-val-Go-hidden'+index).text();
                if (!isNaN(originalAmount) && !isNaN(currentAmount)) {
                // var updatedAmount = Math.floor(currentAmount * rate);
                var updatedAmount = Math.floor(originalAmount * rate);
                
                    // Update the text content of the current element with the updated amount
                    $(element).text(updatedAmount);
                } else {
                    console.error("Invalid original or current amount:", originalAmount, currentAmount);
                }
            });
        }
    });
    
}


 // On keyUp validate Expiry Moth and Year START
 $(document).ready(function(){
    $('.expirationInput').on('keyup', function(){
        var val = $(this).val();
        // Remove any non-numeric characters
        val = val.replace(/\D/g,'');
        if(val.length > 2){
            // If more than 2 characters, trim it
            val = val.slice(0,2) + '/' + val.slice(2);
        }
        else if (val.length === 2){
            // If exactly 2 characters, add "/"
            val = val + '/';
        }
        $(this).val(val);

        // Check if the entered date is in the future
        var today = new Date();
        var currentYear = today.getFullYear().toString().substr(-2);
        var currentMonth = today.getMonth() + 1;
        var enteredYear = parseInt(val.substr(3));
        var enteredMonth = parseInt(val.substr(0, 2));

        if (enteredYear < currentYear || (enteredYear == currentYear && enteredMonth < currentMonth)) {
            // Entered date is not in the future, clear the input
            $('.expirationInput-warning').css("display", "block");
            $('.expirationInput').addClass("inputerror");
            $('button.card-btn').prop('disabled', true);
            // alert("Please enter a future expiry date.");
        }else{
            $('.expirationInput-warning').css("display", "none");
            $('.expirationInput').removeClass("inputerror");
            $('button.card-btn').prop('disabled', false);
        }
    });
});
// On keyUp validate Expiry Moth and Year END


