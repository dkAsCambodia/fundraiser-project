$(document).ready(function(){
	// $(".clickModel").click(function(){
	// 	$("#checkoutpopup").show();
	// 	$("body").addClass("open-model")
	// });
	
	// $(".close__popup, .closepopup").click(function(){
	// 	$("#checkoutpopup").hide();
	// 	$("body").removeClass("open-model")
	// });

$(".clickinput").click(function(){
	//alert("sdsds");
	$(".tooltipopen1").show();
	
});
// $(".inputbox").hide();
$(".clickcheck").click(function() {
    if($(this).is(":checked")) {
        $(".inputbox").show();
    } else {
        $(".inputbox").hide();
    }
});

$(".clicktab1").click(function(){
	$(".tab1Content").show();
	$(".tab2Content").hide();
});

$(".clicktab2").click(function(){
	$(".tab2Content").show();
	$(".tab1Content").hide();
});

$(".clickcheckdedicate").click(function() {
    if($(this).is(":checked")) {
        $(".fee-checkbox").addClass("fee-checkbox-checked");
    } else {
        $(".fee-checkbox").removeClass("fee-checkbox-checked");
    }
});

//
$(".continue1").click(function(){
	$(".step2").addClass("slidepopup");
});

$(".continue2").click(function(){
	$(".step5").addClass("slidepopup");
});

//$(".continue2").click(function(){
	//$(".step3").addClass("slidepopup");
//});

$(".continue3").click(function(){
	$(".step4").addClass("slidepopup");
});

$(".continue4").click(function(){
	$(".step6").addClass("slidepopup");
});

$(".continue5").click(function(){
	$(".step5").removeClass("slidepopup");
	$(".step3").addClass("slidepopup");
});

$(".continue6").click(function(){
	$(".step7").addClass("slidepopup");
});

$(".continue7").click(function(){
	$(".step8").addClass("slidepopup");
});

$(".continue8").click(function(){
	$(".step9").addClass("slidepopup");
});


$(".btn-paypal").click(function(){
	$(".steppaypal").addClass("slidepopup");
});



$(".other_payment").click(function(){
	$(".steppaypal").removeClass("slidepopup");
});

$(".backslide").click(function(){
	$(this).parent().parent().removeClass("slidepopup");
});

});





//
	
	$(document).ready(function(){
		$(".tooltipopen").hide();
		$(".toltipclick").click(function(){
			$(this).next().show();
		});
		
		
		$(document).on('click touch', function(event) {
        if (!$(event.target).parents().addBack().is('.toltipclick,.clickinput')) {
            $('.tooltipopen, .tooltipopen1').hide();
        }
    });
		 $('.tooltipopen, .tooltipopen1').on('click touch', function(event) {
        event.stopPropagation();
    });
		
	});