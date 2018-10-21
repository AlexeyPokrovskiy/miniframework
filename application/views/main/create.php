<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2>Создать Задачу</h2>
        </div>
        <div class="col-xs-12">
            <div class="messageInForm alert alert-warning hidden"></div>


            <form enctype="multipart/form-data" action="/save" method="post" class="form-gorizontal">
                <label for="">Название задачи</label>
                <input type="text" class="form-control" name="title" placeholder="Название задачи" value="" >
                <label for="">Описание задачи</label>
                <input type="text" class="form-control" name="description" placeholder="Описание задачи" value="" >
                <label for="">Имя постановщика</label>
                <input type="tel" class="form-control" name="name" placeholder="Имя постановщика" value="" >
                <label for="">Эл.почта</label>
                <input type="email" class="form-control" name="email" placeholder="Эл.почта" value="">
                <label for="">Изображение</label>
                <input type="file" name="image" value="">
                <br>
                <input type="submit" value="Отправить" class="btn btn-success">
                <input class="btn btn-default" type='reset' value='Очистить' name='reset'>
            </form>
        </div>
    </div>
</div>