$(document).ready(function(){	

    AOS.init();
    var isVisible = false;
    
    setTimeout(function(){
        $('.ship' ).fadeOut('slow');
        $('.ship-burnt' ).fadeIn('slow');
        $('.animated-text').removeAttr('data-aos');
        setTimeout(function(){
            $('.jumbotron' ).addClass('open');
            $('.h1-wrapper' ).fadeOut('slow');
            $('.active-cell' ).fadeIn('5000');
            isVisible = true;
            $('h2').fadeIn('slow');
        }, 2000);
    }, 4000);

    setTimeout(function(){
        $('.static-ship' ).hide();
        $('.burning-ship' ).show();
    }, 2000);


    $('.flip-container').on('click', function(){

        if($(this).attr('data-status') == "front-facing"){
            $(this).children().children('.back').css('transform','rotateY(0deg)');
            $(this).children().children('.front').css('transform','rotateY(180deg)');
            $(this).attr('data-status', 'rear-facing');
        }
        else{
            $(this).children().children('.back').css('transform','rotateY(180deg)');
            $(this).children().children('.front').css('transform','rotateY(0deg)');
            $(this).attr('data-status', 'front-facing');
        }

    });




    $(".cell.active-cell").mouseover(function(){
        if(isVisible){
            $(this).children('.content').show();
            $(this).children('h2').hide();
        }
        
    }).mouseout(function(){
        if(isVisible){
            $(this).children('.content').hide();
            $(this).children('h2').show();
        }
        
    }); 

    
var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    $('#connect-button').click(function(event){
        event.preventDefault();

        $('.form-control').removeClass('hasError');

        var submit = true;

        var custName  = $('#custName').val();
        var custEmail = $('#custEmail').val();
        var custPhone = $('#custPhone').val();

        if(custName == ""){
            $('#custName').addClass('hasError');
            submit = false;
        }
        if((custEmail == "") || (regexEmail.test(custEmail) == false)){
            $('#custEmail').addClass('hasError');
            submit = false;
        }
        if(custPhone == ""){
            $('#custPhone').addClass('hasError');
            submit = false;
        }

        if(submit){
            var postData = {
				'custName' 		: custName,
                'custEmail'     : custEmail,
				'custPhone'     : custPhone,
				'custPref'      : $('input[name=contactPref]:checked').val(),
				'action'        : "ConnectForm" // Send Email with this one.
			};
			
            var url = "/scripts/include/service.php";
            
			$.ajax({
				crossDomain: false,
				type: 'POST',
				cache: false,
				url: url,
				data: postData,
				success: function(data){
                    $('.form-request').hide();
                    $('.form-response').show();
				},
				error: function (/*jqXHR, err, errorText*/) {

				}
			});	
        }



    });
        
}); 


