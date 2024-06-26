// For radio amount selection START
    $(document).ready(function() {
        $('.paymentsmethod').click(function(event) {
            event.stopPropagation(); // Stop event propagation
            $('.paymentsmethod').removeClass('active');
            $(this).addClass('active');
            $(this).find('input[type=radio]').prop('checked', true);
            var radioValue = $(this).find('input[name="triptype"]').val();
            // alert("Selected value: " + radioValue);
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
// For radio amount selection START
// For Currency change Fun START
function currencyselectorFun(currencyValue) {
    var selected = $(".currency-selector option:selected");
    $(".currency-symbol").text(selected.data("symbol"));
    $(".Final_currencySymbol").val(selected.data("symbol"));
    $('.Final_currency').val(currencyValue);
    $('.Final_currency').text(currencyValue);
    $(".stripe-button")
        .attr({
            "data-currency": currencyValue,
            "src": "https://checkout.stripe.com/checkout.js?xx="+Math.random()
        });
}
// For Currency change Fun END

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


