<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2>Редактировать Задачу</h2>
        </div>
        <div class="col-xs-12">
            <div class="messageInForm alert alert-warning hidden"></div>

            <form action="/update" method="post" class="form-gorizontal">
                <input type="hidden" value="<?=$task['id']?>" name="id" >
                <label for="">Название задачи</label>
                <input type="text" class="form-control" name="title" placeholder="Название задачи" value="<?=$task['title']?>" >
                <label for="">Описание задачи</label>
                <input type="text" class="form-control" name="description" placeholder="Описание задачи" value="<?=$task['description']?>" >
                <label for="">Имя постановщика</label>
                <input type="tel" class="form-control" name="name" placeholder="Имя постановщика" value="<?=$task['name']?>" >
                <label for="">Эл.почта</label>
                <input type="email" class="form-control" name="email" placeholder="Эл.почта" value="<?=$task['email']?>">
                <label for="">Выполнено</label><br>
                <input type="checkbox" name="checked" <? if ($task['checked']==1):?>checked<?endif?> >
                <br>
                <input type="submit" value="Отправить" class="btn btn-success">
                <input class="btn btn-default" type='reset' value='Очистить' name='reset'>
            </form>
        </div>
    </div>
</div>