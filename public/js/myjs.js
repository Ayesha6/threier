

$( document ).ready(function() {
    console.log( "ready!" );
    console.log( $( document ). height() );
    
    $("#alltenders-down-animation").slideUp(0);
    $("#payments-down-animation").slideUp(0);
    $("#companyprofile-down-animation").slideUp(0);


    var docheight = $( document ). height() + 300;
    docheight = docheight + "px";
    $(".sidebar").css("height", docheight);



    $("#add-user, .request-payment-btn").click(function(){
    	$(".popup-bg").css("display", "block");
    	$(".if-newuser").css("display", "block");
    	$(".if-edituser").css("display", "none");
    });
    $(".edit-user").click(function(){
    	$(".popup-bg").css("display", "block");
    	$(".if-newuser").css("display", "none");
    	$(".if-edituser").css("display", "block");
    });
    $(".close-cross").click(function(){
    	$(".popup-bg").css("display", "none");
    });
    



    $(".suspend-btn").click(function(){
    	$(".suspend-checkbox").css("display", "block");
    	$("#suspend-btn-event").css("display", "block");
    	$("#suspend-btn-animation").css("display", "none");
    });
    $("#cancle-suspend").click(function(){
    	$(".suspend-checkbox").css("display", "none");
    	$("#suspend-btn-event").css("display", "none");
    	$("#suspend-btn-animation").css("display", "block");
    });

 

    $("#alltenders-down-icon").click(function(){
    	if($(".alltenders-i").hasClass("rotated")){
    		$(".alltenders-i").removeClass("rotated")
	    	$(".alltenders-i").css("transform", "rotate(0deg)");
	    	$("#alltenders-down-animation").slideUp();
	    }
	    else{
	    	$(".alltenders-i").addClass("rotated")
	    	$(".alltenders-i").css("transform", "rotate(90deg)");
	    	$("#alltenders-down-animation").slideDown();
	    }
    });

    $("#payments-down-icon").click(function(){
    	if($(".payments-i").hasClass("rotated")){
    		$(".payments-i").removeClass("rotated")
	    	$(".payments-i").css("transform", "rotate(0deg)");
	    	$("#payments-down-animation").slideUp();
	    }
	    else{
	    	$(".payments-i").addClass("rotated")
	    	$(".payments-i").css("transform", "rotate(90deg)");
	    	$("#payments-down-animation").slideDown();
	    }
    });

    $("#companyprofile-down-icon").click(function(){
    	if($(".companyprofile-i").hasClass("rotated")){
    		$(".companyprofile-i").removeClass("rotated")
	    	$(".companyprofile-i").css("transform", "rotate(0deg)");
	    	$("#companyprofile-down-animation").slideUp();
	    }
	    else{
	    	$(".companyprofile-i").addClass("rotated")
	    	$(".companyprofile-i").css("transform", "rotate(90deg)");
	    	$("#companyprofile-down-animation").slideDown();
	    }
    });



	$("#bars").click(function(){
		var width = $(".sidebar").width();
		if(width == "300"){
			$(".sidebar").animate({width: '80px'}).promise()
            .done(function(){
            	$(".rightside").css("width","calc(100% - 80px)");
            });
			$(".white-logo-animate").css("display","none");
			$(".side-heading").css("display","none");
            $(".li-line").css("text-align", "center");
            $(".li-line a").css("padding-left", 0);
	        $(".down-animation").css("display", "none");
	        $(".down-icon").css("display", "none");
		    $("#alltenders-down-animation").slideUp(0);
		    $("#payments-down-animation").slideUp(0);
		    $("#companyprofile-down-animation").slideUp(0);
            
		}
		else if(width == "80"){
			$(".sidebar").animate({width: '300px'}).promise()
            .done(function(){
            	$(".white-logo-animate").css("display","initial");
            	$(".side-heading").css("display","initial");
	            $(".li-line").css("text-align", "left");
	            $(".li-line a").css("padding-left", "50px");
	            $(".down-animation").css("display", "initial");
	            $(".down-icon").css("display", "initial");
			    $("#alltenders-down-animation").slideUp(0);
			    $("#payments-down-animation").slideUp(0);
			    $("#companyprofile-down-animation").slideUp(0);
            });
            $(".rightside").css("width","calc(100% - 300px)");
		}	    
	});


	$("#activation-cross").click(function(){
		$(".account-activate").hide();
	});

	$(".li-line a").click(function(){
		$(".list-box-active").removeClass('list-box-active');
		$(this).parent().addClass('list-box-active');
	});


	if($('.dashboard').length == 1 ){
		$(".list-box-active").removeClass('list-box-active');
		$(".dashboard-li").addClass('list-box-active');
	}
	else if($('.alltenders').length == 1){
		$(".list-box-active").removeClass('list-box-active');
		$(".alltenders-li").addClass('list-box-active');
	}
	else if($('.mypayments').length == 1 ){
		$(".list-box-active").removeClass('list-box-active');
		$(".mypayments-li").addClass('list-box-active');
	}
	else if($('.manageusers').length == 1 ){
		$(".list-box-active").removeClass('list-box-active');
		$(".manageusers-li").addClass('list-box-active');
	}
	else if($('.payments').length == 1){
		$(".list-box-active").removeClass('list-box-active');
		$(".payments-li").addClass('list-box-active');
	}
	else if($('.companyprofile').length == 1 ){
		$(".list-box-active").removeClass('list-box-active');
		$(".companyprofile-li").addClass('list-box-active');
	}
	else if($('.bankaccount').length == 1 ){
		$(".list-box-active").removeClass('list-box-active');
		$(".bankaccount-li").addClass('list-box-active');
	}
	else if($('.signout').length == 1 ){
		$(".list-box-active").removeClass('list-box-active');
		$(".signout-li").addClass('list-box-active');
	}


});