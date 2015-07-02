<?php

include "inc/EmployeeClass.php";

$employee = new EmployeeClass; //create new instance of the class Users
$employeeArray = $employee->getAllEmployees(); //register employee
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
      content="Get Glossy is Melbourne's leading Social Media Agency. We help brands get the best possible results out of Social Media Marketing."/>
<meta name="keywords"
      content="get glossy, facebook, twitter, social media optimisation, social media, social media marketing melbourne, social media agency melbourne, social media companies melbourne, facebook marketing melbourne, social media consultant melbourne, social media manager melbourne,"/>

<meta name="author" content="">

<link rel="icon" href="http://getglossy.com.au/favicon.ico">
<title>Get Glossy | Social Media Marketing Melbourne</title>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/offcanvas.js"></script>
<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.placeholder.js"></script>
<script>
    $(function () {
        $('input, textarea').placeholder();
    });
</script>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/offcanvas.css" rel="stylesheet">
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<script>
    jQuery(document).ready(function () {
        jQuery("#formID").validationEngine();
    });
</script>
<script>
$(document).ready(function () {

    $(".navigation1").on('click', 'li', function () {
        $(".navigation1 li.active").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        //return false;
    });

    $(".navigation2").on('click', 'li', function () {
        $(".navigation2 li.active").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        //return false;
    });

    $(".navigation3").on('click', 'li', function () {
        $(".navigation3 li.active").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        //return false;
    });

    $(".navigation4").on('click', 'li', function () {
        $(".navigation4 li.active").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        //return false;
    });

    $(".navigation5").on('click', 'li', function () {
        $(".navigation5 li.active").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        //return false;
    });
    // set up hover panels
    // although this can be done without JavaScript, we've attached these events
    // because it causes the hover to be triggered when the element is tapped on a touch device
    $('.hover').hover(function () {
        $(this).addClass('flip');
    }, function () {
        $(this).removeClass('flip');
    });
});

$(document).ready(function () {
    $(".cardOne").mouseenter(function () {
        $(".cardOneHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardOneHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardTwo").mouseenter(function () {
        $(".cardTwoHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardTwoHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardThree").mouseenter(function () {
        $(".cardThreeHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardThreeHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardFour").mouseenter(function () {
        $(".cardFourHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardFourHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardFive").mouseenter(function () {
        $(".cardFiveHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardFiveHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardSix").mouseenter(function () {
        $(".cardSixHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardSixHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardSeven").mouseenter(function () {
        $(".cardSevenHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardSevenHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardEight").mouseenter(function () {
        $(".cardEightHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardEightHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardNine").mouseenter(function () {
        $(".cardNineHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardNineHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardTen").mouseenter(function () {
        $(".cardTenHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardTenHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardEleven").mouseenter(function () {
        $(".cardElevenHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardElevenHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardTwelve").mouseenter(function () {
        $(".cardTwelveHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardTwelveHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardThir").mouseenter(function () {
        $(".cardThirHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardThirHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

$(document).ready(function () {
    $(".cardFourt").mouseenter(function () {
        $(".cardFourtHov").show();
        $(this).css({'z-index': '1600'});
    }).mouseleave(function () {
            $(".cardFourtHov").hide();
            $(this).css({'z-index': '1500'});
        });
});

jQuery(document).ready(function ($) {
	
	$('.buttonSubmit').click(function () {
            var formName = $('#fname').val();
            var formEmail = $('#email').val();
            var formNumber = $('#number').val();
            var formQuery = $('#question').val();
			var formSubject = $('#subject').val();

            var dataToSend = { formNameVar: formName, formEmailVar: formEmail, formNumberVar: formNumber, formQueryVar: formQuery , formSubjectVar : formSubject};

            var url = "emailSubmit.php"; // the script where you handle the form input.

            $.ajax({
                type: "POST",
                url: url,
                data: dataToSend,
                success: function (data) {
                    alert(data); // show response from the php script.
                }
            });
        });
		
		$('.buttonSubmitContact').click(function () {
            var formName = $('#fnameContact').val();
            var formEmail = $('#emailContact').val();
            var formNumber = $('#numberContact').val();
            var formQuery = $('#questionContact').val();
			var formSubject = $('#subjectContact').val();

            var dataToSend = { formNameVar: formName, formEmailVar: formEmail, formNumberVar: formNumber, formQueryVar: formQuery , formSubjectVar : formSubject};

            var url = "emailSubmit.php"; // the script where you handle the form input.

            $.ajax({
                type: "POST",
                url: url,
                data: dataToSend,
                success: function (data) {
                    alert(data); // show response from the php script.
                }
            });
        });
		
		
    $("#teamCards").hide();


    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 500);
    });

    $("#feat-div-one").click(function () {
        $("#feat-content-two").hide();
        $("#feat-content-three").hide();
        $("#feat-content-four").hide();
        $("#feat-content-five").hide();
        $("#feat-content-one").fadeIn(500);
    });


    $("#feat-div-two").click(function () {
        $("#feat-content-one").hide();
        $("#feat-content-three").hide();
        $("#feat-content-four").hide();
        $("#feat-content-five").hide();
        $("#feat-content-two").fadeIn(500);
    });

    $("#feat-div-three").click(function () {
        $("#feat-content-one").hide();
        $("#feat-content-two").hide();
        $("#feat-content-four").hide();
        $("#feat-content-five").hide();
        $("#feat-content-three").fadeIn(500);
    });

    $("#feat-div-four").click(function () {
        $("#feat-content-one").hide();
        $("#feat-content-two").hide();
        $("#feat-content-three").hide();
        $("#feat-content-five").hide();
        $("#feat-content-four").fadeIn(500);
    });

    $("#feat-div-five").click(function () {
        $("#feat-content-one").hide();
        $("#feat-content-two").hide();
        $("#feat-content-three").hide();
        $("#feat-content-four").hide();
        $("#feat-content-five").fadeIn(500);
    });

    $("#mob-feat-div-one").click(function () {
        $("#feat-content-two").hide();
        $("#feat-content-three").hide();
        $("#feat-content-four").hide();
        $("#feat-content-five").hide();
        $("#feat-content-one").fadeIn(500);
    });


    $("#mob-feat-div-two").click(function () {
        $("#feat-content-one").hide();
        $("#feat-content-three").hide();
        $("#feat-content-four").hide();
        $("#feat-content-five").hide();
        $("#feat-content-two").fadeIn(500);
    });

    $("#mob-feat-div-three").click(function () {
        $("#feat-content-one").hide();
        $("#feat-content-two").hide();
        $("#feat-content-four").hide();
        $("#feat-content-five").hide();
        $("#feat-content-three").fadeIn(500);
    });

    $("#mob-feat-div-four").click(function () {
        $("#feat-content-one").hide();
        $("#feat-content-two").hide();
        $("#feat-content-three").hide();
        $("#feat-content-five").hide();
        $("#feat-content-four").fadeIn(500);
    });

    $("#mob-feat-div-five").click(function () {
        $("#feat-content-one").hide();
        $("#feat-content-two").hide();
        $("#feat-content-three").hide();
        $("#feat-content-five").fadeIn(500);
        $("#feat-content-four").hide();
    });


    $("#about-div-one").click(function () {
        $("#about-content-two").hide();
        $("#about-content-three").hide();
        $("#about-content-four").hide();
        $("#about-content-one").fadeIn(500);
    });


    $("#about-div-two").click(function () {
        $("#about-content-one").hide();
        $("#about-content-three").hide();
        $("#about-content-four").hide();
        $("#about-content-two").fadeIn(500);
    });

    $("#about-div-three").click(function () {
        $("#about-content-one").hide();
        $("#about-content-two").hide();
        $("#about-content-four").hide();
        $("#about-content-three").fadeIn(500);
    });

    $("#about-div-four").click(function () {
        $("#about-content-one").hide();
        $("#about-content-two").hide();
        $("#about-content-three").hide();
        $("#about-content-four").fadeIn(500);
    });


    $("#mob-about-div-one").click(function () {
        $("#about-content-two").hide();
        $("#about-content-three").hide();
        $("#about-content-four").hide();
        $("#about-content-one").fadeIn(500);
    });


    $("#mob-about-div-two").click(function () {
        $("#about-content-one").hide();
        $("#about-content-three").hide();
        $("#about-content-four").hide();
        $("#about-content-two").fadeIn(500);
    });

    $("#mob-about-div-three").click(function () {
        $("#about-content-one").hide();
        $("#about-content-two").hide();
        $("#about-content-four").hide();
        $("#about-content-three").fadeIn(500);
    });

    $("#mob-about-div-four").click(function () {
        $("#about-content-one").hide();
        $("#about-content-two").hide();
        $("#about-content-three").hide();
        $("#about-content-four").fadeIn(500);
    });

    $("#what-div-one").click(function () {
        $("#what-content-two").hide();
        $("#what-content-three").hide();
        $("#what-content-four").hide();
        $("#what-content-one").fadeIn(500);
    });


    $("#what-div-two").click(function () {
        $("#what-content-one").hide();
        $("#what-content-three").hide();
        $("#what-content-four").hide();
        $("#what-content-two").fadeIn(500);
    });

    $("#what-div-three").click(function () {
        $("#what-content-one").hide();
        $("#what-content-two").hide();
        $("#what-content-four").hide();
        $("#what-content-three").fadeIn(500);
    });

    $("#what-div-four").click(function () {
        $("#what-content-one").hide();
        $("#what-content-two").hide();
        $("#what-content-three").hide();
        $("#what-content-four").fadeIn(500);
    });

    $("#mob-what-div-one").click(function () {
        $("#what-content-two").hide();
        $("#what-content-three").hide();
        $("#what-content-four").hide();
        $("#what-content-one").fadeIn(500);
    });


    $("#mob-what-div-two").click(function () {
        $("#what-content-one").hide();
        $("#what-content-three").hide();
        $("#what-content-four").hide();
        $("#what-content-two").fadeIn(500);
    });

    $("#mob-what-div-three").click(function () {
        $("#what-content-one").hide();
        $("#what-content-two").hide();
        $("#what-content-four").hide();
        $("#what-content-three").fadeIn(500);
    });

    $("#mob-what-div-four").click(function () {
        $("#what-content-one").hide();
        $("#what-content-two").hide();
        $("#what-content-three").hide();
        $("#what-content-four").fadeIn(500);
    });

    $("#edge-div-one").click(function () {
        $("#edge-content-two").hide();
        $("#edge-content-one").fadeIn(500);
    });


    $("#edge-div-two").click(function () {
        $("#edge-content-one").hide();
        $("#edge-content-two").fadeIn(500);
    });

    $("#mob-edge-div-one").click(function () {
        $("#edge-content-two").hide();
        $("#edge-content-one").fadeIn(500);
    });


    $("#mob-edge-div-two").click(function () {
        $("#edge-content-one").hide();
        $("#edge-content-two").fadeIn(500);
    });


    $("#contact-div-one").click(function () {
        $("#contact-content-two").hide();
        $("#contact-content-one").fadeIn(500);
    });


    $("#contact-div-two").click(function () {
        $("#contact-content-one").hide();
        $("#contact-content-three").hide();
        $("#contact-content-four").hide();
        $("#contact-content-two").fadeIn(500);
    });

    $("#mob-contact-div-one").click(function () {
        $("#contact-content-two").hide();
        $("#contact-content-one").fadeIn(500);
    });


    $("#mob-contact-div-two").click(function () {
        $("#contact-content-one").hide();
        $("#contact-content-two").fadeIn(500);
    });


});

function showTeamCard(id) {
    var currentWidth = $(window).width();
    var URL = "inc/EmployeeClass.php";
    var TargetURL = "employeePictures/";

    switch (true) {
        case (currentWidth > 0 && currentWidth < 480): //Large Level 1
            switch (id) {
                case 'Peter':
                    $("#teamCards").insertAfter("#Kedda");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};
                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Maria':
                    $("#teamCards").insertAfter("#Kedda");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Kedda':
                    $("#teamCards").insertAfter("#Kedda");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Lauren':
                    $("#teamCards").insertAfter("#Kat");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Elaine':
                    $("#teamCards").insertAfter("#Kat");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Kat':
                    $("#teamCards").insertAfter("#Kat");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'David':
                    $("#teamCards").insertAfter("#Andrea");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Chalsie':
                    $("#teamCards").insertAfter("#Andrea");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Andrea':
                    $("#teamCards").insertAfter("#Andrea");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Aly':
                    $("#teamCards").insertAfter("#Lily");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Hazel':
                    $("#teamCards").insertAfter("#Lily");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Lily':
                    $("#teamCards").insertAfter("#Lily");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Cherrie':
                    $("#teamCards").insertAfter("#Rory");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Rory' :
                    $("#teamCards").insertAfter("#Rory");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Maddie' :
                    $("#teamCards").insertAfter("#Maddie");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Alex' :
                    $("#teamCards").insertAfter("#Rory");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL +  '/mobile/card/' + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
            }
            break;
        case (currentWidth > 480 && currentWidth < 768): //Large Level 1
            switch (id) {
                case 'Peter':
                    $("#teamCards").insertAfter("#Lauren");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                     $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Maria':
                    $("#teamCards").insertAfter("#Lauren");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Kedda':
                    $("#teamCards").insertAfter("#Lauren");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Lauren':
                    $("#teamCards").insertAfter("#Lauren");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Elaine':
                    $("#teamCards").insertAfter("#Chalsie");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Kat':
                    $("#teamCards").insertAfter("#Chalsie");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'David':
                    $("#teamCards").insertAfter("#Chalsie");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Chalsie':
                    $("#teamCards").insertAfter("#Chalsie");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Andrea':
                    $("#teamCards").insertAfter("#Lily");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Aly':
                    $("#teamCards").insertAfter("#Lily");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Hazel':
                    $("#teamCards").insertAfter("#Lily");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Lily':
                    $("#teamCards").insertAfter("#Lily");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Cherrie':
                    $("#teamCards").insertAfter("#Rory");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Rory' :
                    $("#teamCards").insertAfter("#Rory");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
                case 'Maddie' :
                    $("#teamCards").insertAfter("#Maddie");
                    $("#teamCards").fadeIn(500);
                    $("#person").attr("src", "employeePictures/blank.jpg");
                    $("#loading").show();
                    var dataToSend = {employeeProfileGet: id};

                    $.ajax({
                        url: URL,
                        data: dataToSend
                    })
                        .success(function (response) {
                            $("#loading").hide();
                            $("#person").attr("src", TargetURL + response);

                        })
                        .error(function () {
                            alert("Error");
                        })
                        .complete(function () {
                            //alert("complete");
                        })
                    break;
            }
            break;
        case (currentWidth > 768): //Extra Extra Small Level 5
            $("#teamCards").insertAfter("#Maddie");
            $("#teamCards").fadeIn(500);
            $("#person").attr("src", "employeePictures/blank.jpg");
            $("#loading").show();
            var dataToSend = {employeeProfileGet: id};

            $.ajax({
                url: URL,
                data: dataToSend
            })
                .success(function (response) {
                    $("#loading").hide();
                    $("#person").attr("src", TargetURL + response);

                })
                .error(function () {
                    alert("Error");
                })
                .complete(function () {
                    //alert("complete");
                })
            break;
    }
}


// when the DOM is ready:
$(document).ready(function () {
    // find the div.fade elements and hook the hover event
    $('div.fade').hover(function () {
        // on hovering over, find the element we want to fade *up*
        var fade = $('> div', this);

        // if the element is currently being animated (to a fadeOut)...
        if (fade.is(':animated')) {
            // ...take it's current opacity back up to 1
            fade.stop().fadeTo(250, 1);
        } else {
            // fade in quickly
            fade.fadeIn(250);
        }
    }, function () {
        // on hovering out, fade the element out
        var fade = $('> div', this);
        if (fade.is(':animated')) {
            fade.stop().fadeTo(3000, 0);
        } else {
            // fade away slowly
            fade.fadeOut(3000);
        }
    });
});

</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-41051670-1', 'getglossy.com.au');
    ga('require', 'displayfeatures');
    ga('require', 'linkid', 'linkid.js');
    ga('send', 'pageview');

</script>

</head>

<body>
<div class="navbar navbar-fixed-top navbar-inverse navbar-home" role="navigation" id="homerrrr">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".home-collapse"><span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <span class="navbar-brand">HOME</span></div>
        <div class="collapse navbar-collapse home-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="#featured" class="scroll">FEATURED WORK</a></li>
                <li><a href="#team" class="scroll">MEET THE TEAM</a></li>
                <li><a href="#what" class="scroll">WHAT WE DO </a></li>
                <li><a href="#edge" class="scroll">EDGE</a></li>
                <li><a href="#contact" class="scroll">CONTACT</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</div>
<!-- /.navbar -->

<div class="container" id="equalizeTop">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas sidebar" role="navigation">
            <div class="well sidebar-nav">
                <div class="collapse navbar-collapse collapse-top">
                    <ul class="nav">
                        <li class="active"><a href="#">HOME</a></li>
                        <li><a href="#featured" class="scroll">FEATURED WORK</a></li>
                        <li><a href="#team" class="scroll">MEET THE TEAM</a></li>
                        <li><a href="#what" class="scroll">WHAT WE DO </a></li>
                        <li><a href="#contact" class="scroll">CONTACT</a></li>
                        <li><a href="#edge" class="scroll"><img src="images/icon-edge.jpg"
                                                                alt="Get Glossy Edge Social Media Marketing Melbourne"/></a>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>

            <!--/.well -->
        </div>
        <!--/span-->
        <div class="col-xs-12 col-sm-9" id="home">
            <div class="jumbotron"><img src="images/banner.jpg" alt="Get Glossy Social Media Marketing Melbourne"/>
            </div>
        </div>
    </div>
</div>

<!-- ##################### FEATURED WORK STARTS HERE ############################## -->

<!-- ########## MOBILE NAV BAR START ############ -->
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation" id="featured">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".featured-collapse"><span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <span class="navbar-brand">FEATURED WORK</span></div>
        <div class="collapse navbar-collapse featured-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a id="mob-feat-div-one">FEATURED</a></li>
                <li><a id="mob-feat-div-two">STRATEGY</a></li>
                <li><a id="mob-feat-div-three">CONSUMER PROMOTIONS</a></li>
                <li><a id="mob-feat-div-four">APPS/WEBSITES</a></li>
                <li><a id="mob-feat-div-five">ALL</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</div>
<!-- ########## MOBILE NAV BAR END ############# -->

<!-- ########## CONTENT AREA START ############ -->
<div class="container equalize">
<div class="row row-offcanvas row-offcanvas-right">
<div class="col-xs-6 col-sm-3 sidebar-offcanvas sidebar" role="navigation">
    <div class="well sidebar-nav">
        <div class="collapse navbar-collapse">
            <ul class="nav nav-pills nav-stacked navigation1">
                <li class="active"><a id="feat-div-one">FEATURED</a></li>
                <li><a id="feat-div-two">STRATEGY</a></li>
                <li><a id="feat-div-three">CONSUMER PROMOTIONS</a></li>
                <li><a id="feat-div-four">APPS/WEBSITES</a></li>
                <li><a id="feat-div-five">ALL</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <div class="pageScroll">
        <ul>
            <li><a href="#" class="back-to-top">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a></li>
            <li><a href="#team" class="scroll">Next <img src="images/nav-arrow-dwn.png" alt="up"/></a></li>
        </ul>
    </div>
    <!--/.well -->
</div>
<!--/span-->

<div class="col-xs-12 col-sm-9">
<div class="aboutWrap">
<div id="feat-content-one">
    <div class="col-6 col-sm-6 cardTwo"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardTwoHov">
            <h5>Project: VIP Glamazon Forum Group</h5>

            <p><span class="bold">Client:</span> <span class="italic">Glam by Manicare</span><br/>
                <span class="bold">Timing:</span> <span class="italic"> June 2013 - ongoing</span><br/>
                <span class="bold">Platform:</span> <span class="italic"> Facebook</span></p>

            <p>Description - We invited 50 avid glam fans to a closed forum group and made them VIPs! This group is
                envisioned as a reward for avid brand advocates and fans on the high-interaction end
                of the fan process.</p>

            <p> Key Results - Extremely high levels of interaction in posting pictures wearing glam products, supporting
                other glam initiatives and extending glam's viral reach on the platform.</p>
        </div>
    </div>

    <!--/span-->
    <div class="col-6 col-sm-6 cardThree"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardThreeHov">
            <h5>Project: 'One For The Girls - Pads For Pads' Initiative</h5>

            <p><span class="bold">Client:</span> <span class="italic">Moxie</span><br/>
                <span class="bold">Timing:</span> <span class="italic"> August 2013 - December 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic"> Worldwide</span></p>

            <p>Description: Shocked by the fact that Ugandan girls are absent 20% of the school year due to lack of
                sanitary hygiene, Moxie's founder Mia Klitsas created One For The Girls. The initiative aims to provide
                6,000 young Ugandan women a reusable menstrual pack made by AFRIpads, a local African business. For
                every Moxie product sold, the Moxie team has personally delivered an AFRIpad kit to a very worthy
                recipient. Yes, you read right... Mia is currently in Uganda visiting schools and has so far donated
                over 2,700 AFRIpads!
                We've felt blessed to have joined Moxie on this incredible journey, proving that a small business can
                still make a very BIG difference
                in the world.</p>
        </div>

    </div>
    <!--/span-->
    <div class="col-6 col-sm-6 cardOne"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardOneHov">
            <h5>Project: Good Life Receipe App</h5>

            <p><span class="bold">Client:</span> <span class="italic">Always Fresh</span><br/>
                <span class="bold">Timing:</span> <span class="italic">July 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">iOS & Android, mobile & tablet devices</span>
            </p>

            <p>A Mediterranean video recipe app to inspire something new in the kitchen! Featuring recipes from Grekk, Italian and Spanish cui-sine, this interactive app allows the user to view recipe videos, add ingredients to their editable shopping list, view simple step-by-step instructions, add to favourites, and search for a recipe to match your requirements. Available on Google Play and the App Store.</p>
        </div>

    </div>
    <!--/span-->
    <div class="col-6 col-sm-6 cardFour"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardFourHov">
            <h5>Project: Message On A Mug competition</h5>

            <p><span class="bold">Client:</span> <span class="italic">Tetley Tea</span><br/>
                <span class="bold">Timing:</span> <span class="italic">Father's Day 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Facebook</span></p>

            <p>The competition gave fans the chance to show their sense of humour and love for the Tetley brand through an interactive 'Message On A Mug' competition. Fans created their own humourous mug slogan for their chance to win, with all entries being published publicly via a Facebook photo album. The Tetley fans loved the initiative, and were keen to 'share' their own entries with Facebook friends.</p>
        </div>

    </div>
    <!--/span-->
    <div class="col-6 col-sm-6 cardFive"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardFiveHov">
            <h5>Project: Fed Uni Social Media Strategy</h5>

            <p><span class="bold">Client:</span> <span class="italic">Federation University Australia</span><br/>
                <span class="bold">Timing:</span> <span class="italic">October 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Facebook, Twitter, Instagram, Pintrest, Google+ and LinkedIn</span>


            <p>Get Glossy has recently partnered up with The University of Ballarat and Monash University's Gippsland campus, to create a united, technically savvy university – Federation University Australia. Get Glossy have created a revolutionary social media strategy that will set the standard for universities across the country.</p>
        </div>

    </div>
    <!--/span-->
    <div class="col-6 col-sm-6 cardEleven"><img class="transImage" src="images/transparent-block.png"
                                                alt="transparent"/>

        <div class="col-6 col-sm-6 cardElevenHov">
            <h5>Project: Pimp My Pizza</h5>

            <p><span class="bold">Client:</span> <span class="italic">Lucky Coq & Bimbo Deluxe</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Facebook</span>


            <p>Now in it's 3rd year, Pimp My Pizza is a socially-driven activity that leverages two of the things that
                are great about Lucky Coq and Bimbo Deluxe: $4 pizzas and creative fans and followers!</p>

            <p>We have challenged fans of the venues to design their own pizza and put some amazing creations on the
                menus for 6 weeks, with one winner each year staying on the menu for a further 3 months.</p>

            <p>Creators of pizzas, and a charity of their choice share a dollar from the sale of each and one of their
                pizzas, and we have given away over $5,000 to some very worth causes and just as much to fixie-bike,
                tight jeans and iPhone 5s funds!</p>
        </div>
    </div>
    <!--/span-->
    <!--/span-->
</div>


<div id="feat-content-two">
    <div class="col-6 col-sm-6 cardTwo"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardTwoHov">
            <h5>Project: VIP Glamazon Forum Group</h5>

            <p><span class="bold">Client:</span> <span class="italic">Glam by Manicare</span><br/>
                <span class="bold">Timing:</span> <span class="italic"> June 2013 - ongoing</span><br/>
                <span class="bold">Platform:</span> <span class="italic"> Facebook</span></p>

            <p>Description - We invited 50 avid glam fans to a closed forum group and made them VIPs! This group is
                envisioned as a reward for avid brand advocates and fans on the high-interaction end
                of the fan process.</p>

            <p> Key Results - Extremely high levels of interaction in posting pictures wearing glam products, supporting
                other glam initiatives and extending glam's viral reach on the platform.</p>
        </div>
    </div>

    <!--/span-->
    <div class="col-6 col-sm-6 cardThree"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardThreeHov">
            <h5>Project: 'One For The Girls - Pads For Pads' Initiative</h5>

            <p><span class="bold">Client:</span> <span class="italic">Moxie</span><br/>
                <span class="bold">Timing:</span> <span class="italic"> August 2013 - December 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic"> Worldwide</span></p>

            <p>Description: Shocked by the fact that Ugandan girls are absent 20% of the school year due to lack of
                sanitary hygiene, Moxie's founder Mia Klitsas created One For The Girls. The initiative aims to provide
                6,000 young Ugandan women a reusable menstrual pack made by AFRIpads, a local African business. For
                every Moxie product sold, the Moxie team has personally delivered an AFRIpad kit to a very worthy
                recipient. Yes, you read right... Mia is currently in Uganda visiting schools and has so far donated
                over 2,700 AFRIpads!
                We've felt blessed to have joined Moxie on this incredible journey, proving that a small business can
                still make a very BIG difference
                in the world.</p>
        </div>

    </div>
    <!--/span-->
    <div class="col-6 col-sm-6 cardFive"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardFiveHov">
            <h5>Project: Fed Uni Social Media Strategy</h5>

            <p><span class="bold">Client:</span> <span class="italic">Federation University Australia</span><br/>
                <span class="bold">Timing:</span> <span class="italic">October 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Facebook, Twitter, Instagram, Pintrest, Google+ and LinkedIn</span>


            <p>Get Glossy has recently partnered up with The
                University of Ballarat and Monash University's Gippsland campus, to create a united, technically savvy
                university – Federation University Australia. Get Glossy have created a revolutionary social media
                strategy that will set the standard for universities across the country.</p>
        </div>

    </div>
    <!--/span-->

</div>
<div id="feat-content-three">
    <div class="col-6 col-sm-6 cardTen"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardTenHov">
            <h5>Project: Taste Of Asia competition</h5>

            <p><span class="bold">Client:</span> <span class="italic">Slendier</span><br/>
                <span class="bold">Timing:</span> <span class="italic">July 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Facebook</span>


            <p>We approached three food and fitness bloggers to partner with Slendier on this competition. Each week was
                themed around a region of Asia and the bloggers came up with their own recipes for that region. The fans
                had the opportunity to win a weekly prize which consisted of a wok, Slendier variety pack and a recipe
                card from the bloggers. We increased the reach of the competition by having it featured via the
                blogger's social media channels, a website banner we designed for the Slendier site, Facebook
                advertising and posting on the Slendier page. </p>
        </div>
    </div>
    <!--/span-->
    <div class="col-6 col-sm-6 cardThree"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardThreeHov">
            <h5>Project: 'One For The Girls - Pads For Pads' Initiative</h5>

            <p><span class="bold">Client:</span> <span class="italic">Moxie</span><br/>
                <span class="bold">Timing:</span> <span class="italic"> August 2013 - December 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic"> Worldwide</span></p>

            <p>Description: Shocked by the fact that Ugandan girls are absent 20% of the school year due to lack of
                sanitary hygiene, Moxie's founder Mia Klitsas created One For The Girls. The initiative aims to provide
                6,000 young Ugandan women a reusable menstrual pack made by AFRIpads, a local African business. For
                every Moxie product sold, the Moxie team has personally delivered an AFRIpad kit to a very worthy
                recipient. Yes, you read right... Mia is currently in Uganda visiting schools and has so far donated
                over 2,700 AFRIpads!
                We've felt blessed to have joined Moxie on this incredible journey, proving that a small business can
                still make a very BIG difference
                in the world.</p>
        </div>

    </div>
    <!--/span-->
    <div class="col-6 col-sm-6 cardEight"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardEightHov">
            <h5>Project: Message on a Mirror competition</h5>

            <p><span class="bold">Client:</span> <span class="italic">Liptember</span><br/>
                <span class="bold">Timing:</span> <span class="italic">10 days</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Facebook</span></p>

            <p>Liptember's 'Message on a Mirror' competition was extremely engaging for users and really spoke to the
                target audience of the charity initiative. Fans, or Lipettes as they're more affectionately known, were
                asked to upload their positive message onto our mirror for their chance to win. The messages the
                Lipettes came up with were inspiring, uplifting and empowering to all, and really helped to extend the
                message of
                Liptember to a wider audience. </p>

            <p> Key Results: This competition engaged the audience and tied them directly to the message of the
                Liptember charity initiative, which is mental health and positivity. </p>
        </div>
    </div>
    <!--/span-->
    <div class="col-6 col-sm-6 cardSix"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardSixHov">
            <h5>Project: Formula 10.0.6 Pledge</h5>

            <p><span class="bold">Client:</span> <span class="italic">Formula 10.0.6</span><br/>
                <span class="bold">Timing:</span> <span class="italic">July 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Facebook</span></p>

            <p>Description: Entrants clicked through a series of skincare questions, selecting their skincare concerns
                and also answering market research questions in a fun and interactive way.</p>

            <p>Key Results: Thorough market research data from fans, fun and
                interactive competition.</p>
        </div>

    </div>
    <!--/span-->
    <div class="col-6 col-sm-6 cardSeven"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardSevenHov">
            <h5>Project: Ice cream-inspired Cream Eyeshadow Duos</h5>

            <p><span class="bold">Client:</span> <span class="italic">Australis Cosmetics</span><br/>
                <span class="bold">Timing:</span> <span class="italic">October 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Facebook</span></p>

            <p>To promote the new ice cream-inspired Cream Eyeshadow Duos, Get Glossy created an interactive competition
                for fans with fantastic prizes from Molly & Polly Swimswear and Cold Rock Ice Creamery. Fans chose from
                their favourite of three pre-designed ice cream-theme messages (e.g. 'You're so sweet you gave me a
                toothache!') to create a custom message for a friend. Entries were uploaded daily, with fans tagging
                their Facebook friends on their messages
            </p>
        </div>
    </div>
    <!--/span-->
    <div class="col-6 col-sm-6 cardFour"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardFourHov">
            <h5>Project: Message On A Mug competition</h5>

            <p><span class="bold">Client:</span> <span class="italic">Tetley Tea</span><br/>
                <span class="bold">Timing:</span> <span class="italic">Father's Day 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Facebook</span></p>

            <p>The competition gave fans the chance to show their sense of humour and love for the Tetley brand through
                an interactive 'Message On A Mug' competition. Fans created their own humorous mug slogan for their
                chance to win, with all entries being published publicly via a Facebook photo album. The Tetley fans
                loved the initiative, and were keen to 'share' their own entries with Facebook friends.</p>
        </div>

    </div>
    <!--/span-->
</div>
<div id="feat-content-four">
    <div class="col-6 col-sm-6 cardOne"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardOneHov">
            <h5>Project: Good Life Receipe App</h5>

            <p><span class="bold">Client:</span> <span class="italic">Always Fresh</span><br/>
                <span class="bold">Timing:</span> <span class="italic">July 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">iOS & Android, mobile & tablet devices</span>
            </p>

            <p>Now in it's 3rd year, Pimp My Pizza is a socially-driven activity that leverages two of the things that
                are great about Lucky Coq and Bimbo Deluxe: $4 pizzas and creative fans and followers!<br/>
                We have challenged fans of the venues to design their own pizza and put some amazing creations on the
                menus for 6 weeks, with one winner each year staying on the menu for a further 3 months.<br/>
                Creators of pizzas, and a charity of their choice share a dollar from the sale of each and one of their
                pizzas, and we have given away over $5,000 to some very worth causes and just as much to fixie-bike,
                tight jeans and iPhone 5s funds!</p>
        </div>

    </div>
    <!--/span-->

    <div class="col-6 col-sm-6 cardTwelve"><img class="transImage" src="images/transparent-block.png"
                                                alt="transparent"/>

        <div class="col-6 col-sm-6 cardTwelveHov">
            <h5>Project: Always Fresh Consumer Promo Website</h5>

            <p><span class="bold">Client:</span> <span class="italic">Always Fresh</span><br/>
                <span class="bold">Timing:</span> <span class="italic">July - September 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Website / <a
                        href="http://www.alwaysfreshgoodlife.com.au/" target="_blank">www.alwaysfreshgoodlife.com.au</a></span>
            </p>

            <p>Challenged with a way to bring the Mediterranean to life, we created the Always Fresh Good Life site. A
                place where people can explore the regions of Greece, Italy and Spain, viewing video recipes and
                learning about the culture to help them choose their chosen destination!</p>

            <p>This competition saw a high level of involvement in just 2 months, with over 24,000 entries and unique
                users.</p>

            <p>The lucky winner was sent to their region of the choice, including flights, accommodation and experiences
                to enjoy a taste of the Good Life! Following the competition, the website now houses over 60
                Mediterranean video recipes, downloadable recipe books and information on how to get the Good Life
                Recipe App.</p>
        </div>

    </div>
    <!--/span-->

    <div class="col-6 col-sm-6 cardThir"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardThirHov">
            <h5>Project: Atomic Cheerleading</h5>

            <p><span class="bold">Client:</span> <span class="italic">Website and brand design</span><br/>
                <span class="bold">Timing:</span> <span class="italic">mid 2013</span><br/>
            </p>

            <p>Get Glossy was engaged to create a brand identity and first ever website for Australia's newest and
                biggest Cheerleading gym, well who else would you go to?! </p>

            <p>While the subject matter was very different to our usual work, the principles were familiar: create an
                industry-leading presence that communicated key information and attributes to an audience that was not
                short of options.</p>

            <p>The branding had to balance between traditional cheerleading-branding and a tasteful, modern clean
                design, and has now been stretched across items from T Shirts to crop tops to 10m banners.</p>

            <p>The website set the club up to show everyone how serious they really are and bring in students to fill
                many new squads for 2013 and 2014.</p>
        </div>

    </div>
    <!--/span-->

    <div class="col-6 col-sm-6 cardFourt"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

        <div class="col-6 col-sm-6 cardFourtHov">
            <h5>Project: Riviana Website</h5>

            <p><span class="bold">Client:</span> <span class="italic">Riviana Foods</span><br/>
                <span class="bold">Timing:</span> <span class="italic">October 2013</span><br/>
                <span class="bold">Platform:</span> <span class="italic">Website / <a href="http://rivianafoods.com.au/"
                                                                                      target="_blank">www.rivianafoods.com.au/</a></span>
            </p>

            <p>A top performer in the retail brands and food service industry, Riviana Foods undertook a corporate
                website refresh! This website provides users with key information on brands, corporate responsibility
                and product ranges. </p>

            <p>Designed to operate responsively based on the user's device, this website is a great example of a dynamic
                and engaging corporate platform for brands.

            </p>
        </div>

    </div>
    <!--/span-->

</div>
<div id="feat-content-five">


<div class="col-6 col-sm-6 cardOne"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardOneHov">
        <h5>Project: Good Life Receipe App</h5>

        <p><span class="bold">Client:</span> <span class="italic">Always Fresh</span><br/>
            <span class="bold">Timing:</span> <span class="italic">July 2013</span><br/>
            <span class="bold">Platform:</span> <span class="italic">iOS & Android, mobile & tablet devices</span></p>

        <p>A Mediterranean video recipe app to inspire something new in the kitchen! Featuring recipes from Grekk,
            Italian and Spanish cuisine, this interactive app allows the user to view recipe videos, add ingredients to
            their editable shopping list, view simple step-by-step instructions, add to favourites, and search for a
            recipe to match your requirements. Available on Google Play and the App Store.</p>
    </div>

</div>
<!--/span-->


<div class="col-6 col-sm-6 cardTwo"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardTwoHov">
        <h5>Project: VIP Glamazon Forum Group</h5>

        <p><span class="bold">Client:</span> <span class="italic">Glam by Manicare</span><br/>
            <span class="bold">Timing:</span> <span class="italic"> June 2013 - ongoing</span><br/>
            <span class="bold">Platform:</span> <span class="italic"> Facebook</span></p>

        <p>Description - We invited 50 avid glam fans to a closed forum group and made them VIPs! This group is
            envisioned as a reward for avid brand advocates and fans on the high-interaction end
            of the fan process.</p>

        <p> Key Results - Extremely high levels of interaction in posting pictures wearing glam products, supporting
            other glam initiatives and extending glam's viral reach on the platform.</p>
    </div>
</div>

<!--/span-->


<div class="col-6 col-sm-6 cardThree"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardThreeHov">
        <h5>Project: 'One For The Girls - Pads For Pads' Initiative</h5>

        <p><span class="bold">Client:</span> <span class="italic">Moxie</span><br/>
            <span class="bold">Timing:</span> <span class="italic"> August 2013 - December 2013</span><br/>
            <span class="bold">Platform:</span> <span class="italic"> Worldwide</span></p>

        <p>Description: Shocked by the fact that Ugandan girls are absent 20% of the school year due to lack of sanitary
            hygiene, Moxie's founder Mia Klitsas created One For The Girls. The initiative aims to provide 6,000 young
            Ugandan women a reusable menstrual pack made by AFRIpads, a local African business. For every Moxie product
            sold, the Moxie team has personally delivered an AFRIpad kit to a very worthy recipient. Yes, you read
            right... Mia is currently in Uganda visiting schools and has so far donated over 2,700 AFRIpads!
            We've felt blessed to have joined Moxie on this incredible journey, proving that a small business can still
            make a very BIG difference
            in the world.</p>
    </div>

</div>
<!--/span-->


<div class="col-6 col-sm-6 cardFour"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardFourHov">
        <h5>Project: Message On A Mug competition</h5>

        <p><span class="bold">Client:</span> <span class="italic">Tetley Tea</span><br/>
            <span class="bold">Timing:</span> <span class="italic">Father's Day 2013</span><br/>
            <span class="bold">Platform:</span> <span class="italic">Facebook</span></p>

        <p>The competition gave fans the chance to show their sense of humour and love for the Tetley brand through an
            interactive 'Message On A Mug' competition. Fans created their own humourous mug slogan for their chance to
            win, with all entries being published publicly via a Facebook photo album. The Tetley fans loved the
            initiative, and were keen to 'share' their own entries with Facebook friends.</p>
    </div>

</div>
<!--/span-->


<div class="col-6 col-sm-6 cardFive"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardFiveHov">
        <h5>Project: Fed Uni Social Media Strategy</h5>

        <p><span class="bold">Client:</span> <span class="italic">Federation University Australia</span><br/>
            <span class="bold">Timing:</span> <span class="italic">October 2013</span><br/>
            <span class="bold">Platform:</span> <span class="italic">Facebook, Twitter, Instagram, Pintrest, Google+ and LinkedIn</span>


        <p>Get Glossy has recently partnered up with The
            University of Ballarat and Monash University's Gippsland campus, to create a united, technically savvy
            university – Federation University Australia. Get Glossy have created a revolutionary social media strategy
            that will set the standard for universities across the country.</p>
    </div>

</div>
<!--/span-->

<div class="col-6 col-sm-6 cardSix"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardSixHov">
        <h5>Project: Formula 10.0.6 Pledge</h5>

        <p><span class="bold">Client:</span> <span class="italic">Formula 10.0.6</span><br/>
            <span class="bold">Timing:</span> <span class="italic">July 2013</span><br/>
            <span class="bold">Platform:</span> <span class="italic">Facebook</span></p>

        <p>Description: Entrants clicked through a series of skincare questions, selecting their skincare concerns and
            also answering market research questions in a fun and interactive way.</p>

        <p>Key Results: Thorough market research data from fans, fun and
            interactive competition.</p>
    </div>

</div>
<!--/span-->
<div class="col-6 col-sm-6 cardSeven"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardSevenHov">
        <h5>Project: Ice cream-inspired Cream Eyeshadow Duos</h5>

        <p><span class="bold">Client:</span> <span class="italic">Australis Cosmetics</span><br/>
            <span class="bold">Timing:</span> <span class="italic">October 2013</span><br/>
            <span class="bold">Platform:</span> <span class="italic">Facebook</span></p>

        <p>To promote the new ice cream-inspired Cream Eyeshadow Duos, Get Glossy created an interactive competition for
            fans with fantastic prizes from Molly & Polly Swimswear and Cold Rock Ice Creamery. Fans chose from their
            favourite of three pre-designed ice cream-theme messages (e.g. 'You're so sweet you gave me a toothache!')
            to create a custom message for a friend. Entries were uploaded daily, with fans tagging their Facebook
            friends on their messages
        </p>
    </div>
</div>
<!--/span-->
<div class="col-6 col-sm-6 cardEight"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardEightHov">
        <h5>Project: Message on a Mirror competition</h5>

        <p><span class="bold">Client:</span> <span class="italic">Liptember</span><br/>
            <span class="bold">Timing:</span> <span class="italic">10 days</span><br/>
            <span class="bold">Platform:</span> <span class="italic">Facebook</span></p>

        <p>Liptember's 'Message on a Mirror' competition was extremely engaging for users and really spoke to the target
            audience of the charity initiative. Fans, or Lipettes as they're more affectionately known, were asked to
            upload their positive message onto our mirror for their chance to win. The messages the Lipettes came up
            with were inspiring, uplifting and empowering to all, and really helped to extend the message of
            Liptember to a wider audience. </p>

        <p> Key Results: This competition engaged the audience and tied them directly to the message of the Liptember
            charity initiative, which is mental health and positivity. </p>
    </div>
</div>
<!--/span-->

<div class="col-6 col-sm-6 cardNine"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardNineHov">
        <h5>Project: Lost Duck Hunt</h5>

        <p><span class="bold">Client:</span> <span class="italic">Casa Bottega</span><br/>
        </p>

        <p>A brand new café tucked away in Sutton Street, North Melbourne needed a way to reveal itself to people in the local area, so we obviously thought about rubber ducks!</p>

        <p>We released 100 ducks into the surrounding neighbourhoods, each with a tag around its neck saying 'Help! I'm
            lost, return me to 64 Sutton Street for a reward' with social media links.</p>

        <p>Coffee and one of Casa Bottega's homemade cakes were given as rewards, but we even had members of the public
            negotiate for the return of the ducks that become reward in their own right!</p>

        <p>To build awareness, we also placed 'Missing Cat'-style posters around the area. Through twitter, Instagram
            and Facebook we released clues about the whereabouts of some of the ducks, which when found were 'strung up'
            in the café for all to see. </p>

        <p>To build further excitement, we created backstories around the last 5 ducks, why there was a reward out for
            their capture, and presented increased rewards. </p>

        <p>The aim was to grab the attention of the local public and create a fun point of interest in the café. The
            activity ran so well that we ran it again six months later!</p>

        <p> Key Results: This competition engaged the audience and tied them directly to the message of the Liptember
            charity initiative, which is mental health and positivity. </p>
    </div>
</div>
<!--/span-->

<div class="col-6 col-sm-6 cardTen"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardTenHov">
        <h5>Project: Taste Of Asia competition</h5>

        <p><span class="bold">Client:</span> <span class="italic">Slendier</span><br/>
            <span class="bold">Timing:</span> <span class="italic">July 2013</span><br/>
            <span class="bold">Platform:</span> <span class="italic">Facebook</span>


        <p>We approached three food and fitness bloggers to partner with Slendier on this competition. Each week was
            themed around a region of Asia and the bloggers came up with their own recipes for that region. The fans had
            the opportunity to win a weekly prize which consisted of a wok, Slendier variety pack and a recipe card from
            the bloggers. We increased the reach of the competition by having it featured via the blogger's social media
            channels, a website banner we designed for the Slendier site, Facebook advertising and posting on the
            Slendier page. </p>
    </div>
</div>
<!--/span-->

<div class="col-6 col-sm-6 cardEleven"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardElevenHov">
        <h5>Project: Pimp My Pizza</h5>

        <p><span class="bold">Client:</span> <span class="italic">Lucky Coq & Bimbo Deluxe</span><br/>
            <span class="bold">Platform:</span> <span class="italic">Facebook</span>


        <p>Now in it's 3rd year, Pimp My Pizza is a socially-driven activity that leverages two of the things that are
            great about Lucky Coq and Bimbo Deluxe: $4 pizzas and creative fans and followers!</p>

        <p>We have challenged fans of the venues to design their own pizza and put some amazing creations on the menus
            for 6 weeks, with one winner each year staying on the menu for a further 3 months.</p>

        <p>Creators of pizzas, and a charity of their choice share a dollar from the sale of each and one of their
            pizzas, and we have given away over $5,000 to some very worth causes and just as much to fixie-bike, tight
            jeans and iPhone 5s funds!</p>
    </div>
</div>
<!--/span-->

<div class="col-6 col-sm-6 cardOne"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardOneHov">
        <h5>Project: Good Life Receipe App</h5>

        <p><span class="bold">Client:</span> <span class="italic">Always Fresh</span><br/>
            <span class="bold">Timing:</span> <span class="italic">July 2013</span><br/>
            <span class="bold">Platform:</span> <span class="italic">iOS & Android, mobile & tablet devices</span></p>

        <p>Now in it's 3rd year, Pimp My Pizza is a socially-driven activity that leverages two of the things that are
            great about Lucky Coq and Bimbo Deluxe: $4 pizzas and creative fans and followers!<br/>
            We have challenged fans of the venues to design their own pizza and put some amazing creations on the menus
            for 6 weeks, with one winner each year staying on the menu for a further 3 months.<br/>
            Creators of pizzas, and a charity of their choice share a dollar from the sale of each and one of their
            pizzas, and we have given away over $5,000 to some very worth causes and just as much to fixie-bike, tight
            jeans and iPhone 5s funds!</p>
    </div>

</div>
<!--/span-->

<div class="col-6 col-sm-6 cardTwelve"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardTwelveHov">
        <h5>Project: Always Fresh Consumer Promo Website</h5>

        <p><span class="bold">Client:</span> <span class="italic">Always Fresh</span><br/>
            <span class="bold">Timing:</span> <span class="italic">July - September 2013</span><br/>
            <span class="bold">Platform:</span> <span class="italic">Website / <a
                    href="http://www.alwaysfreshgoodlife.com.au/"
                    target="_blank">www.alwaysfreshgoodlife.com.au</a></span></p>

        <p>Challenged with a way to bring the Mediterranean to life, we created the Always Fresh Good Life site. A place
            where people can explore the regions of Greece, Italy and Spain, viewing video recipes and learning about
            the culture to help them choose their chosen destination!</p>

        <p>This competition saw a high level of involvement in just 2 months, with over 24,000 entries and unique
            users.</p>

        <p>The lucky winner was sent to their region of the choice, including flights, accomodation and experiences to
            enjoy a taste of the Good Life! Following the competition, the website now houses over 60 Mediterranean
            video recipes, downloadable recipe books and information on how to get the Good Life Recipe App.</p>
    </div>

</div>
<!--/span-->

<div class="col-6 col-sm-6 cardThir"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardThirHov">
        <h5>Project: Atomic Cheerleading</h5>

        <p><span class="bold">Client:</span> <span class="italic">Website and brand design</span><br/>
            <span class="bold">Timing:</span> <span class="italic">mid 2013</span><br/>
        </p>

        <p>Get Glossy was engaged to create a brand identity and first ever website for Australia's newest and biggest
            Cheerleading gym, well who else would you go to?! </p>

        <p>While the subject matter was very different to our usual work, the principles were familiar: create an
            industry-leading presence that communicated key information and attributes to an audience that was not short
            of options.</p>

        <p>The branding had to balance between traditional cheerleading-branding and a tasteful, modern clean design,
            and has now been stretched across items from T Shirts to crop tops to 10m banners.</p>

        <p>The website set the club up to show everyone how serious they really are and bring in students to fill many
            new squads for 2013 and 2014.</p>
    </div>

</div>
<!--/span-->

<div class="col-6 col-sm-6 cardFourt"><img class="transImage" src="images/transparent-block.png" alt="transparent"/>

    <div class="col-6 col-sm-6 cardFourtHov">
        <h5>Project: Riviana Website</h5>

        <p><span class="bold">Client:</span> <span class="italic">Riviana Foods</span><br/>
            <span class="bold">Timing:</span> <span class="italic">October 2013</span><br/>
            <span class="bold">Platform:</span> <span class="italic">Website / <a href="http://rivianafoods.com.au/"
                                                                                  target="_blank">www.rivianafoods.com.au/</a></span>
        </p>

        <p>A top performer in the retail brands and foodservice industry, Riviana Foods undertook a corporate website
            refresh! This website provides users with key information on brands, corporate responsibility and product
            ranges. </p>

        <p>Designed to operate responsively based on the user's device, this website is a great example of a dynamic and
            engaging corporate platform for brands.

        </p>
    </div>

</div>
<!--/span-->


</div>
<!--/row-->

</div>
</div>
</div>
<!--/span-->

</div>
<!--/row-->
<!-- ########## CONTENT AREA END ############ -->

<!-- ##################### OUR TEAM STARST HERE ############################## -->
<!-- ########## MOBILE NAV BAR START ############ -->
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation" id="team">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".about-collapse"><span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <span class="navbar-brand">ABOUT US</span></div>
        <div class="collapse navbar-collapse about-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a id="mob-about-div-one">MEET THE TEAM</a></li>
                <li><a id="mob-about-div-two">MANIFESTO</a></li>
                <li><a id="mob-about-div-three">CLIENTS</a></li>
                <li><a id="mob-about-div-four">SOCIAL CHANNELS</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</div>
<!-- ########## MOBILE NAV BAR END ############# -->

<!-- ########## CONTENT AREA START ############ -->
<div class="container equalize">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas sidebar" role="navigation">
            <div class="well sidebar-nav">
                <div class="collapse navbar-collapse">
                    <ul class="nav nav-pills nav-stacked navigation2">
                        <li class="active"><a id="about-div-one">MEET THE TEAM</a></li>
                        <li><a id="about-div-two">MANIFESTO</a></li>
                        <li><a id="about-div-three">CLIENTS</a></li>
                        <li><a id="about-div-four">SOCIAL CHANNELS</a></li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
            <div class="pageScroll">
                <ul>
                    <li><a href="#" class="back-to-top">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a>
                    </li>
                    <li><a href="#what" class="scroll">Next <img src="images/nav-arrow-dwn.png" alt="up"/></a></li>
                </ul>
            </div>
            <!--/.well -->
        </div>
        <!--/span-->
        <div class="col-xs-12 col-sm-9">
            <div class="aboutWrap">
                <div id="about-content-one">
                    <div class="col-xs-12">
                        <!-- EMPLOYEE LIST -->

                        <?php
                        foreach ($employeeArray as $employeeThumbnails) {
                            echo '<div class="col-6 col-sm-7 col-lg-7" id="' . $employeeThumbnails['employeeName'] . '" onclick="showTeamCard(this.id)">
                           <img src="images/transparent-block.png" alt="transparent"/>
                        </div>';
                        }
                        ?>
                        <div id="teamCards">
                            <div id="card">
                                <div id="loading" style="position:relative; left:50%; height:0px;">
                                    <img src="images/loadingImage.gif" alt="loading" style="width: 50px;">
                                </div>
                                <img id="person" src="" alt="social media marketing melbourne"/>

                            </div>
                        </div>
                        <!--/span-->

                    </div>
                </div>
                <div id="about-content-two">
                    <div class="col-xs-12"><img class="maniHead" src="images/head-maifesto.jpg"
                                                alt="manifesto social media marketing melbourne"/></div>
                    <div class="col-xs-12 paddContent">
                        <div class="row featurette">
                            <p class="lead" style="padding:0 40px 0 40px; font-size:16px">In today's market, brands
                                increasingly feel pressure from private label, overseas brands, an evolving retail
                                landscape and a rapidly changing consumer relationship.</p>

                            <p class="lead" style="padding:0 40px 0 40px; font-size:16px">Choosing to work, and continue
                                to work, with an agency should be a decision based on more than a flashy address, a blue
                                chip client list or sixty-three hundred dollar suit... <a
                                    href="http://www.youtube.com/watch?v=81Nl7VYFEaI">come on!</a></p>

                            <div class="bottomBorder"></div>
                        </div>
                        <div class="row featurette">
                            <h2 class="featurette-heading" style="padding:0 40px 0 40px;">We're different, and we're not
                                a cut and paste agency experience, we base what we do on a few simple rules, rules that
                                make us who we are:</h2>

                            <div class="col-lg-4">
                                <ul>
                                    <li class="lead">We believe that social intelligence should flow through every thing
                                        a brand does
                                    </li>
                                    <li class="lead">We're always honest</li>
                                    <li class="lead">We never do average, and we believe in the power of creativity</li>
                                    <li class="lead">We understand consumers, and what they'll be willing to watch, do,
                                        say and share
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <ul>
                                    <li class="lead">We believe that the right ideas and approach will always beat the
                                        big budget
                                    </li>
                                    <li class="lead">We like getting up every day and working with our clients!</li>
                                    <li class="lead">We keep our clients ahead of the curve when it comes to the latest
                                        web technologies
                                    </li>
                                    <li class="lead">We never stop learning and experimenting</li>
                                </ul>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-lg-4-wide">
                                <ul>
                                    <li class="lead">We never want to dread a phone call from a client</li>
                                    <li class="lead">We're experts at giving brands a voice and personality that engages
                                        consumers
                                    </li>
                                    <li class="lead">When we say we will deliver, we mean it, and we will</li>
                                    <li class="lead">We don't use confusing jargon</li>
                                    <li class="lead">We believe that time is important: yours, ours and the customers
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-lg-4 -->
                        </div>
                        <!-- /.row -->

                    </div>
                </div>
                <div id="about-content-three">
                    <div class="col-xs-12 paddContent">
                        <div class="row featurette">
                            <h2 class="featurette-heading">We have the pleasure of working with an amazing roster of
                                clients. Our attitude and approach is to do one thing every day to make each one of our
                                clients love us. If your brand is below... hi!!! If your brand isn't - <a
                                    href="#contact">get in touch!</a></h2>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-md-11"><img src="images/clients/Australis.jpg"
                                                    alt="Australis social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Tetley.jpg"
                                                    alt="Tetley social media agency melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/AlwaysFresh.jpg"
                                                    alt="AlwaysFresh social media companies melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/LeTan.jpg"
                                                    alt="LeTan facebook marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Swisspers.jpg"
                                                    alt="Swisspers social media consultant melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/NaturesGift.jpg"
                                                    alt="Natures Gift social media manager melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Manicare.jpg"
                                                    alt="Manicare best social media campaign australia"/></div>
                        <div class="col-md-11"><img src="images/clients/Moxie.jpg"
                                                    alt="Moxie social media marketing agency"/></div>
                        <div class="col-md-11"><img src="images/clients/Biore.jpg" alt="Biore social media agency"/>
                        </div>
                        <div class="col-md-11"><img src="images/clients/BurtsBees.jpg"
                                                    alt="BurtsBees facebook brand marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Liptember.jpg"
                                                    alt="Liptember best facebook marketing campaigns"/></div>
                        <div class="col-md-11"><img src="images/clients/BiozetAttack.jpg"
                                                    alt="Biozet Instagram marketing campaign"/></div>
                        <div class="col-md-11"><img src="images/clients/Movenpick.jpg"
                                                    alt="Movenpick social media agency australia"/></div>
                        <div class="col-md-11"><img src="images/clients/RedEarth.jpg"
                                                    alt="Red Earth social media companies australia"/></div>
                        <div class="col-md-11"><img src="images/clients/Bobble.jpg" alt="Bobble facebook marketing"/>
                        </div>
                        <div class="col-md-11"><img src="images/clients/Salt&amp;Pepper.jpg"
                                                    alt="Salt&amp;Pepper social media consultant australia"/></div>
                        <div class="col-md-11"><img src="images/clients/JohnFrieda.jpg"
                                                    alt="John Frieda social media manager australi"/></div>
                        <div class="col-md-11"><img src="images/clients/BabyBunting.jpg"
                                                    alt="Baby Bunting facebook marketing"/></div>
                        <div class="col-md-11"><img src="images/clients/Nailene.jpg"
                                                    alt="Nailene social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/LadyJayne.jpg"
                                                    alt="Lady Jayne social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Innoxa.jpg"
                                                    alt="Innoxa social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Fingrs.jpg"
                                                    alt="Fingrs social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/10.0.6.jpg"
                                                    alt="10.0.6 social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Voost.jpg"
                                                    alt="Voost social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/FedUni.jpg"
                                                    alt="Fed Uni social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/MontagneJeunesse.jpg"
                                                    alt="Montagne Jeunesse social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Karton.jpg"
                                                    alt="Karton social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Wittner.jpg"
                                                    alt="Wittner social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Moosehead.jpg"
                                                    alt="Moosehead social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/SlendierSlim.jpg"
                                                    alt="SlendierSlim social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/NowickiCarbone.jpg"
                                                    alt="Nowicki Carbone social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Glam.jpg"
                                                    alt="Glam social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Cedel.jpg"
                                                    alt="Cedel social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/CreateHavoc.jpg"
                                                    alt="Create Havoc social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/LuckyCoq.jpg"
                                                    alt="Lucky Coq social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Bimbo.jpg"
                                                    alt="Bimbo social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/ElegantTouch.jpg"
                                                    alt="Elegant Touch social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/InEssence.jpg"
                                                    alt="In Essence social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/Eylure.jpg"
                                                    alt="Eylure social media marketing melbourne"/></div>
                        <div class="col-md-11"><img src="images/clients/OilGarden.jpg"
                                                    alt="Oil Garden social media marketing melbourne"/></div>
                    </div>
                </div>
                <div id="about-content-four">
                    <div class="col-xs-12 paddContent">
                        <div class="row featurette">
                            <h2 class="featurette-heading">Like what you see? Connect with us via our social media
                                channels! We'll keep you in the loop with all the latest social media news and exciting
                                projects direct from Get Glossy HQ. </h2>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 social"><a href="https://www.facebook.com/GetGlossy" target="_blank"><img
                                src="images/social-fb.jpg" alt="Get Glossy Facebook facebook marketing melbourne"/></a>
                    </div>
                    <!--/span-->
                    <div class="col-6 col-sm-6 social"><a href="http://www.youtube.com/user/GetGlossyHQ"
                                                          target="_blank"><img src="images/social-yt.jpg"
                                                                               alt="Get Glossy Youtube Social Media Marketing Melbourne"/></a>
                    </div>
                    <!--/span-->
                    <div class="col-6 col-sm-6 social"><a href="https://twitter.com/GetGlossyHQ" target="_blank"><img
                                src="images/social-twitter.jpg"
                                alt="Get Glossy Twitter Social Media Marketing Melbourne"/></a></div>
                    <!--/span-->
                    <div class="col-6 col-sm-6 social"><a href="http://instagram.com/getglossyhq#‎" target="_blank"><img
                                src="images/social-instagram.jpg" alt="Get Glossy Instagram marketing campaign"/></a>
                    </div>
                    <!--/span-->
                    <div class="col-6 col-sm-6 social"><a href="http://www.linkedin.com/company/get-glossy"
                                                          target="_blank"><img src="images/social-link.jpg"
                                                                               alt="Get Glossy LinkedIn Social Media Marketing Melbourne"/></a>
                    </div>
                    <!--/span-->
                    <div class="col-6 col-sm-6 social"><a
                            href="http://www.urbandictionary.com/define.php?term=Get%20Glossy" target="_blank"><img
                                alt="Get Glossy Urban Dictionary Social Media Marketing Melbourne"
                                src="images/social-urban.jpg"/></a></div>
                    <!--/span-->

                </div>
            </div>

            <!--/row-->
        </div>
        <!--/span-->

    </div>
</div>
<!-- ########## CONTENT AREA END ############ -->

<!-- ##################### WHAT WE DO STARST HERE ############################## -->
<!-- ########## MOBILE NAV BAR START ############ -->
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation" id="what">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".what-collapse"><span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <span class="navbar-brand">WHAT WE DO</span></div>
        <div class="collapse navbar-collapse what-collapse">
            <ul class="nav navbar-nav nav-pills nav-stacked navigation3">
                <li class="active"><a id="mob-what-div-one">WHAT WE DO</a></li>
                <li><a id="mob-what-div-two">CORE</a></li>
                <li><a id="mob-what-div-three">DAY-TO-DAY</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</div>
<!-- ########## MOBILE NAV BAR END ############# -->

<!-- ########## CONTENT AREA START ############ -->
<div class="container equalize">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas sidebar" role="navigation">
            <div class="well sidebar-nav">
                <div class="collapse navbar-collapse">
                    <ul class="nav nav-pills nav-stacked navigation3">
                        <li class="active"><a id="what-div-one">WHAT WE DO</a></li>
                        <li><a id="what-div-two">CORE</a></li>
                        <li><a id="what-div-three">DAY-TO-DAY</a></li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
            <div class="pageScroll">
                <ul>
                    <li><a href="#" class="back-to-top">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a>
                    </li>
                    <li><a href="#edge" class="scroll">Next <img src="images/nav-arrow-dwn.png" alt="up"/></a></li>
                </ul>
            </div>
            <!--/.well -->
        </div>
        <!--/span-->
        <div class="col-xs-12 col-sm-9">
            <div class="aboutWrap">
                <div id="what-content-one">
                    <div class="col-xs-12"><img alt="Social Media Marketing Melbourne"
                                                src="images/banner-what-we-do.jpg" class="maniHead"/></div>
                    <div class="col-xs-12 paddContent">
                        <div class="row featurette">
                            <h2 class="featurette-heading">At Get Glossy, it's about keeping ahead of the game.</h2>

                            <p class="lead">We make sure we're doing exactly what we should be doing every single day to
                                help our clients get better value out of their customers online.</p>

                            <p class="lead">While our intelligence is founded on us being a social media agency, our
                                team is structured to help our brands get the best possible results out of digital
                                platforms, so we've grown and developed and added to our team to ensure that we're best
                                positioned to get optimum results for you. We are writers, we are marketers, we are
                                developers, we are designers, we are thinkers.</p>

                            <p class="lead">We're based in Melbourne in an old clothing Factory in the north of the
                                city, but have clients all over Australia and even a few in New Zealand. The old factory
                                outlet is our boardroom, the cutting table is our meeting table, the bosses office is
                                now covered in astroturf and bean bags!</p>
                        </div>
                    </div>
                </div>
                <div id="what-content-two">
                    <div class="col-xs-12"><img src="images/head-maifesto.jpg" alt="Social Media Marketing Melbourne"
                                                class="maniHead"/></div>
                    <div class="col-xs-12 paddContent">
                        <div class="row featurette">
                            <h2 class="featurette-heading">The core of what we do revolves around taking your brand onto
                                social media platforms.</h2>

                            <p class="lead">We develop the tone of voice, write content and generally entertain and grow
                                your audience, while best positioning your brand to them.</p>

                            <p class="lead">To go a little deeper, we want to give your brand loyalists the opportunity
                                to share you with their friends, peers and social followers. What comes next? The
                                advocacy cycle. Potential customers go from hearing about your brand, liking your brand
                                and connecting with your brand socially, to forming a deeper affection for your brand,
                                purchasing from your brand and then advocating on behalf of your brand.</p>

                            <p class="lead">It's all about getting the best possible results out of Facebook marketing,
                                Instagram marketing, social media marketing and digital marketing.</p>
                        </div>
                    </div>
                </div>
                <div id="what-content-three">
                    <div class="col-xs-12 paddContent">
                        <div class="row featurette">
                            <h2 class="featurette-heading">The day-to-day management of social media platforms is based
                                on executing a strategy that outlines exactly what role your brand should play on social
                                media. The key is to find our way into the daily media consumption of our advocates,
                                customers and the wider public.</h2>

                            <div class="col-md-3"><img src="images/icon-initiatives.png" class="whatImg"
                                                       alt="Driving Initiatives"/>

                                <h2 class="what-heading">Driving Initiatives</h2>

                                <p class="lead">The icing on the cake, the way that we can truly bring a brand to life
                                    through social media, push fans to purchase and push fans to advocate. Ask us about
                                    the time we put fans' profile pics onto Moxie's tampon tins, ran a design-a-flavour
                                    pizza competition called Pimp My Pizza (3 times!), or executed a promotion for
                                    Always Fresh that received over 10,000 entries. We discover what assets a brand has
                                    that we can leverage and then devise initiatives that will truly excite the
                                    consumer.</p>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-md-3"><img src="images/icon-design.png" class="whatImg"
                                                       alt="Design &amp; Photography"/>

                                <h2 class="what-heading">Design &amp; Photography</h2>

                                <p class="lead">Having the best-looking pages and channels is crucial. We have two
                                    awesomely talented designers who work full time at Get Glossy that make sure that
                                    every cover photo, twitter background and app is beautifully constructed to say and
                                    do everything that it needs to. The establishment of Instagram and Pinterest as core
                                    social media channels has meant that photography has become a big part of what we
                                    do. Simple catalogue-style images no longer cut it in the world of photo-sharing.
                                    Sometimes it's even about putting a lot of work into making an image look like it
                                    hasn't been carefully selected, shot and edited.</p>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-md-3"><img src="images/icon-apps.png" class="whatImg" alt="Building Apps"/>

                                <h2 class="what-heading">Building Apps</h2>

                                <p class="lead">Consumer promotions, sampling drives, video content and other
                                    initiatives can be brought to life through social and digital channels. The way we
                                    design, build and present and deliver these can be the difference between a
                                    successful and unsuccessful campaign. We're constantly pushing the boundaries of
                                    what's possible and tailoring our apps to each campaign. Facebook, mobile friendly,
                                    iOS and Android apps are our specialty! We have a team of full-time developers who
                                    pulls together the coding on all of our apps and we've built over 500 to date!</p>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-md-3"><img src="images/icon-facebook.png" class="whatImg"
                                                       alt="Facebook Advertising"/>

                                <h2 class="what-heading">Facebook Advertising</h2>

                                <p class="lead">We create concepts, design, build, manage and report on Facebook
                                    Advertising campaigns. We've used it to reach hundreds of thousands of fans for our
                                    clients and always find ways to capture the imagination of our target markets, bring
                                    costs down and bring new people into our advocacy cycles!</p>
                            </div>
                            <!-- /.col-lg-4 -->
                        </div>
                        <div class="row featurette">
                            <div class="col-md-3"><img src="images/icon-consumer.png" class="whatImg"
                                                       alt="Running Consumer Promotions"/>

                                <h2 class="what-heading">Running Consumer Promotions</h2>

                                <p class="lead">We also manage any and every required area of the consumer promotion - T&amp;C's,
                                    permits, draws, fun and viral entry mechanics. We do it all, and we're very good at
                                    it!</p>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-md-3"><img src="images/icon-websites.png" class="whatImg" alt="Websites"/>

                                <h2 class="what-heading">Websites</h2>

                                <p class="lead">The role of digital brand custodian that we play for most of our clients
                                    extends beyond the social sphere and into their website. Whatever the platform,
                                    whatever the communications piece we believe that it is critical that tone of
                                    voice, style and brand feel is consistent and consistently awesome. We also have a
                                    herd of developers (is herd the right collective term?) who speak more languages
                                    that Siri!</p>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-md-3"><img src="images/icon-writing.png" class="whatImg" alt="Writing"/>

                                <h2 class="what-heading">Writing</h2>

                                <p class="lead">Our business relies on impeccable writing skills. We are wordsmiths who
                                    know how to entertain while delivering subtle brand messages, come across as
                                    authoritative without sounding authoritarian, and highlight content that fans and
                                    followers will want to share. Our account managers are primarily writers and they've
                                    got this covered.</p>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-md-3"><img src="images/icon-database.png" class="whatImg"
                                                       alt="eDMs and Database Management"/>

                                <h2 class="what-heading">eDMs and Database Management</h2>

                                <p class="lead">We know what consumers like and know the timings and touchpoints of when
                                    they are most willing to make a purchase or advocate on a brand's behalf. We've been
                                    busy building this side of the business, because any communication that a consumer
                                    receives from a brand should form a part of a rich, cohesive tapestry. We
                                    strategise, copy-write, design, develop and send out eDMs.</p>
                            </div>
                            <!-- /.col-lg-4 -->

                        </div>
                        <!-- /.row -->

                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/span-->
    </div>
</div>

<!-- ########## CONTENT AREA END ############ -->

<!-- ##################### EDGE STARST HERE ############################## -->
<!-- ########## MOBILE NAV BAR START ############ -->
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation" id="edge">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".edge-collapse"><span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <span class="navbar-brand">EDGE</span></div>
        <div class="collapse navbar-collapse edge-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a id="mob-edge-div-one">ABOUT</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</div>
<!-- ########## MOBILE NAV BAR END ############# -->

<!-- ########## CONTENT AREA START ############ -->
<div class="container equalize">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas sidebar" role="navigation">
            <div class="well sidebar-nav">
                <div class="collapse navbar-collapse">
                    <ul class="nav nav-pills nav-stacked navigation6">
                        <li class="active"><a id="edge-div-one">ABOUT</a></li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
            <div class="pageScroll">
                <ul>
                    <li><a href="#" class="back-to-top">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a>
                    </li>
                    <li><a href="#contact" class="scroll">Next <img src="images/nav-arrow-dwn.png" alt="up"/></a></li>
                </ul>
            </div>
            <!--/.well -->
        </div>
        <!--/span-->
        <div class="col-xs-12-edge col-sm-9">
            <div class="aboutWrap">
                <div id="edge-content-one">
                    <div id="edgeBox">
                        <div class="col-md-6">
                            <h4>Get Glossy has founded Edge as a wholly integrated offering to maximise our clients'
                                exposure and help them connect with their audiences in new, exciting and innovative
                                ways.</h4>
                            <h4> Online and digital mediums are the way forward and Get Glossy believes bloggers are at
                                the forefront of this new information movement.</h4>

                            <p class="pEdge">Get Glossy Edge has formed strong relationships with bloggers spanning
                                across a diverse range of genres. We can place your products with these bloggers, have
                                them promote competitions on your social media channels and even get you in a room with
                                these people to further deepen the relationships. Get Glossy Edge can work closely with
                                you to best utilise bloggers' ever increasing power of influence in today's consumer
                                market. </p>
                        </div> 
                        <div class="col-md-6">
                            <div id="edgeLogo"><img src="images/logo-edge.png" alt="Get Glossy Edge"/></div>
                            <div class="formPadd form">
                                <form class="double" class="formular" >
                                    <div class='fname'>
                                        <input type='text' name='fullName' value=''
                                               class='validate[required,custom[onlyLetterSp],maxSize[100], ajax[ajaxUserCallPhp]] text-input'
                                               id='fname' placeholder='FULL NAME*'>
                                    </div>
                                    <div class="double">
                                        <div class='email'>
                                            <input type='text' name='email' value=''
                                                   class='validate[required,custom[email], ajax[ajaxUserCallPhp]] text-input'
                                                   id='email' placeholder='EMAIL*'>
                                        </div>
                                        <div class='contact'>
                                            <input type='text' name='number' value='' class='' id='number'
                                                   placeholder='CONTACT NUMBER'>
                                        </div>
                                    </div>
                                    <div class="double">
                                        <div class="fname">
                                            <textarea name='creativeQuestion' class='validate[required] question'
                                                      id='question' cols="55" rows="4"
                                                      placeholder='YOUR ENQUIRY*'></textarea>

                                        </div>
                                    </div>
                                    <div id='submit'>
                                        <input type='hidden' name='subject' id='subject' value='GetGlossy webMail: Edge'/>
                                        
                                    </div>
                                </form>
                                <input type='submit' value='submit! >' name='submit' class="buttonSubmit" />           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/row-->
    </div>
    <!--/span-->
</div>
</div>

<!-- ########## CONTENT AREA END ############ -->

<!-- ##################### CONTACT US STARST HERE ############################## -->
<!-- ########## MOBILE NAV BAR START ############ -->
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation" id="contact">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".contact-collapse"><span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <span class="navbar-brand">CONTACT US</span></div>
        <div class="collapse navbar-collapse contact-collapse">
            <ul class="nav navbar-nav">
                <li><a id="mob-contact-div-one">FIND US</a></li>
                <li><a id="mob-contact-div-two">E SIGN UP</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</div>
<!-- ########## MOBILE NAV BAR END ############# -->

<!-- ########## CONTENT AREA START ############ -->
<div class="container equalize">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas sidebar" role="navigation">
            <div class="well sidebar-nav">
                <div class="collapse navbar-collapse">
                    <ul class="nav nav-pills nav-stacked navigation5">
                        <li class="active"><a id="contact-div-one">FIND US</a></li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
            <div class="pageScroll">
                <ul>
                    <li><a href="#" class="back-to-top">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a>
                    </li>
                </ul>
            </div>
            <!--/.well -->
        </div>
        <!--/span-->
        <div class="col-xs-12 col-sm-9 contactBG">
            <div class="aboutWrap">
                <div id="contact-content-one">
                    <div class="col-md-6">
                        <iframe width="100%" height="336" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://www.google.com.au/maps?t=m&amp;q=147+High+Street,+Preston,+Victoria&amp;ie=UTF8&amp;hq=&amp;hnear=147+High+St,+Preston+Victoria+3072&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="formPadd form">
                            <div id="contactLeft">
                                <p class="lead">147 High St,<br/>
                                    Preston, Melbourne<br/>
                                    VIC 3072</p>
                            </div>
                            <div id="contactRight">
                                <p class="lead"><img src="images/icon-phone.png" alt="Get Glossy Email Phone Number"/>03
                                    8899 7210<br/>
                                    <img src="images/icon-email.png" alt="Get Glossy Email Address"/><a
                                        href="mailto:team@getglossy.com.au">team@getglossy.com.au</a></p>
                            </div>
                                    <form class="double" class="formular" >
                                    <div class='fname'>
                                        <input type='text' name='fullName' value=''
                                               class='validate[required,custom[onlyLetterSp],maxSize[100], ajax[ajaxUserCallPhp]] text-input'
                                               id='fnameContact' placeholder='FULL NAME*'>
                                    </div>
                                    <div class="double">
                                        <div class='email'>
                                            <input type='text' name='email' value=''
                                                   class='validate[required,custom[email], ajax[ajaxUserCallPhp]] text-input'
                                                   id='emailContact' placeholder='EMAIL*'>
                                        </div>
                                        <div class='contact'>
                                            <input type='text' name='number' value='' class='' id='numberContact'
                                                   placeholder='CONTACT NUMBER'>
                                        </div>
                                    </div>
                                    <div class="double">
                                        <div class="fname">
                                            <textarea name='creativeQuestion' class='validate[required] question'
                                                      id='questionContact' cols="55" rows="4"
                                                      placeholder='YOUR ENQUIRY*'></textarea>

                                        </div>
                                    </div>
                                    <div id='submit'>
                                        <input type='hidden' name='subject' id='subjectContact' value='GetGlossy webMail: Contact Us'/>
                                        
                                    </div>
                                </form>
                                <input type='submit' value='submit! >' name='submit' class="buttonSubmitContact" /> 
                        </div>
                    </div>
                </div>
            </div>
            <div id="what-content-three">
                <div class="col-xs-12 col-sm-9"> thrid content for clients</div>
            </div>
        </div>
        <!--/row-->
    </div>
    <!--/span-->

</div>

<!-- ########## CONTENT AREA END ############ -->
<div id="equalizeBottom" class="container">
    <footer>
        <div class="col-xs-1212 col-sm-12 col-md-2 col-lg-2">
            <div class="pageScroll">
                <ul>
                    <li><a href="#" class="back-to-top">Return to Top <img src="images/nav-arrow-up.png" alt="up"/></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xs-1212 col-sm-12 col-md-5 col-lg-5">
            <h5>About Get Glossy</h5>

            <p class="fotterText">At Get Glossy it's about keeping ahead of the game. We make sure we're doing exactly
                what we should be doing every single day to help our clients get better value out of their customers
                online.</p>

            <p class="fotterText">Our team is structured to help our brands get the best possible results out of social
                media marketing, so we've grown and developed and added to our team to ensure that we're best positioned
                to get optimum results for you. We are writers, we are marketers, we are developers, we are designers,
                we are thinkers.</p>

            <p class="fotterText">Social media marketing melbourne, social media agency melbourne, Facebook Marketing
                Melbourne</p>

            <div id="footSocialLinks"><a target="_blank" href="https://www.facebook.com/GetGlossy"><img
                        src="images/icon-footer-fb.png" alt="Get Glossy Facebook"/></a><a target="_blank"
                                                                                          href="https://twitter.com/GetGlossyHQ"><img
                        src="images/icon-footer-twitter.png" alt="Get Glossy Twitter"/></a><a target="_blank"
                                                                                              href="http://www.linkedin.com/company/get-glossy"><img
                        src="images/icon-footer-link.png" alt="Get Glossy LinedIn"/></a><a target="_blank"
                                                                                           href="http://www.youtube.com/user/GetGlossyHQ"><img
                        src="images/icon-footer-youtube.png" alt="Get Glossy Youtube"/></a></div>
        </div>
        <div class="col-xs-1212 col-sm-12 col-md-5 col-lg-55">
            <h5>Staff Photos</h5>
            
            <iframe id="iframecode" onload="" scrolling="no" frameborder="0" width="100%" src="http://instaembedder.com/gallery.php?username=getglossyhq&amp;hashtag=&amp;width=100&amp;cols=3&amp;frame=1&amp;image_border=10&amp;rows=4&amp;cell_margin=10&amp;display_username=0&amp;likes=0&amp;comments=0&amp;date=0&amp;link=0&amp;caption=0&amp;color=gray" style="height: 254px"></iframe>
            
            



        </div>
    </footer>
</div>
</body>

<!--/.container-->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
    // Requires jQuery
    $('.back-to-top').click(function () {
        window.scrollTo(0, 0);


        // don't change the hash if not needed
        return false;
    });
</script>
</body>
</html>
