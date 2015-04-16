<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsive.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">

        <form class="form-login" id="login-admin">
            <h2 class="form-login-heading">Login Admin</h2>
            <div class="login-wrap" >
                <input type="text" class="form-control login" placeholder="User ID" autofocus id="username">
                <br>
                <input type="password" class="form-control login" placeholder="Password" id="password">
                <div id="loading" style="display: none">
                    <center>
                        <img src="<?php echo base_url('assets/img/loading.gif'); ?>" alt=""/>
                    </center>
                </div>
                <br>
                <button class="btn btn-theme btn-block login" type="submit"><i class="fa fa-lock"></i> Login</button>
                <div id="fail" align="center" style="display: none;">
                    <span class="help-block" style="color: #990000;"><i class="fa fa-warning"></i> Pasword atau Username Salah</span>
                </div>
                <hr>
                <center>
                    <h3>Ganesha Optical</h3>
                </center>
            </div>


        </form>

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.backstretch.min.js'); ?>"></script>
<script>
    //$.backstretch("assets/img/login-bg.jpg", {speed: 500});
    $(document).ready(function(){
        $("#username").focus();
        $("#login-admin").submit(function(){
            user = $("#username").val();
            pass = $("#password").val();
            login(user,pass);
            return false;
        });
    });
    function login(user,pass)
    {
        $.ajax({
            type	: "POST",
            url 	: "<?php echo base_url('ajax/login'); ?>",
            data	: {
                username : user,
                password : pass
            },
            success	: function(html){
                if (html == 'true'){
                    window.location = "<?php echo base_url(); ?>";
                }else{
                    $(".login").show();
                    $("#fail").show();
                    $("#loading").hide();
                    $("#username").focus();
                }
            },
            beforeSend : function(){
                $(".login").hide();
                $("#loading").show();
            }
        });
    }
</script>


</body>
</html>
