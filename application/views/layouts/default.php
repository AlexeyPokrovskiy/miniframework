<!DOCTYPE html>
<html>
    <head>
        <title><?=$title; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="/public/css/main.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="/public/scripts/form.js"></script>
        <script src="/public/scripts/main.js"></script>
    </head>
    <body>
    <header class="container">
        <div class="row">
            <div class="col-md-6">BeeJee</div>
            <div class="col-md-6">
                <nav>
                    <?if(!empty($_SESSION['log'])):?>
                        <a href="admin/">Привет, <?=$_SESSION['log'];?></a>
                        <a href="account/logout">Выход</a>
                    <?else:?>
                        <a href="account/login">Вход</a>
                    <?endif;?>
                </nav>
            </div>
        </div>
    </header>
    <section>
        <?=$content;?>
    </section>
    </body>
</html>






