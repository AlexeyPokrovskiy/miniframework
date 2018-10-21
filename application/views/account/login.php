<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="messageInForm alert alert-warning hidden"></div>
            <form action="/account/auth" method="post" class="form-gorizontal">
                <label for="">Логин</label>
                <input type="text" class="form-control" name="name" placeholder="Логин" value="" >
                <label for="">Пароль</label>
                <input type="password" class="form-control" name="password" placeholder="Пароль" value="" >
                <br>
                <input type="submit" value="Отправить" class="btn btn-success">

            </form>
        </div>
    </div>
</div>