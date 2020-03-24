<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 CRUD Application</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
    @yield('content')
    
</div>
   
    <script src={{ asset("public/frontend/js/jquery.js") }} ></script>
    <script src={{ asset("public/frontend/js/popper.js") }} ></script>
    <script src={{ asset("public/frontend/js/bootstrap.min.js") }} ></script>
    <script src={{ asset("public/frontend/js/jquery-1.11.1.min.js") }} ></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

    <style>
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu> a:after {
            content: ">";
            float: right;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: 0px;
            margin-left: 0px;
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block;
        }
    </style>
    
    <script>
        $(".btn-group, .dropdown").hover(
            function () {
                $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).addClass('open');
            },
            function () {
                $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).removeClass('open');
            });
    </script>
        
</body>
</html>