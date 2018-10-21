<!DOCTYPE html>
<html>
    <head>
        <title><?=$title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <link rel="stylesheet" href="/public/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>



        <script src="/public/scripts/form.js"></script>
        <script src="/public/scripts/main.js"></script>
    </head>
    <body>

    <div class="container">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/">
                        BeeJee
                    </a>
                </div>

                <div class="collapse navbar-collapse " >
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav nav-menu">
                        <?if(!empty($_SESSION['log'])):?>
                        <li>
                            <a href="admin/">Привет, <?=$_SESSION['log'];?></a>
                        </li>
                        <li>
                            <a href="account/logout">Выход</a>
                        </li>
                        <?else:?>
                        <li>
                            <a href="account/login">Вход</a>
                        </li>
                        <?endif;?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <?=$content;?>

    </body>
</html>






