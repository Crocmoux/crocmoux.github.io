
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    var mail = ""
    var pass1 = ""
    var pass2 = ""

    function validate (input) {

        /*[ Check Mail ]*/
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                mail = $(input).val()
                console.log("mail =", mail)
                return false;
            }
        }

        /*[ Check pass ]*/
        else if ($(input).attr('name') == 'pass') {
                if ($(input).val() != "") {
                    pass1 = $(input).val()
                    console.log("Pass =", pass1);
                    return true;
                }
                else { 
                    console.log("Else Pass =", $(input).val()) 
                    return false;
                }
            }

       /*[ Check confirm pass ]*/
        else if ($(input).attr('name') == 'confirmpass') {
                if ($(input).val() != "") {
                    var pass2 = $(input).val();
                    console.log("ConfirmPass =", pass2);
                    if (pass1 == pass2) {
                        console.log("match");
                        return true;
                    }
                    else {
                        console.log("do not match", pass1, pass2);
                        return false;
                    }
                }
                else { 
                    console.log("Else ConfirmPass =", $(input).val()) ;
                    return false;
                }
            }

        else {
            if($(input).val().trim() == ''){
                var other = $(input).val()
                console.log("Other =", other);
                return false;
            }
        } 

    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).addClass('active');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).removeClass('active');
            showPass = 0;
        }
        
    });


})(jQuery);