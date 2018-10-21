<div class="container">
    <div class="row">
        <?foreach ($tasks as $task):?>
        <div class="card col-md-3" >
            <img class="card-img-top" width="100%" src="/public/task-image/<?=$task['image']?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Название: <?=$task['title']?></h5>
                <p class="card-text">Описание: <?=$task['description']?></p>
                <p class="card-text">Автор: <?=$task['name']?></p>
                <p class="card-text">E-mail: <?=$task['email']?></p>
                <a href="/show/<?=$task['id']?>" class="btn btn-primary">Подробнее</a>
            </div>
            <?if($task['checked']==1):?>
            <div class="check">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Yes_Check_Circle.svg/1024px-Yes_Check_Circle.svg.png" alt="">
            </div>
            <?else:?>
                <div class="check">
                    <img src="https://vignette.wikia.nocookie.net/avatar/images/6/63/No_check.png/revision/latest?cb=20090804190232" alt="">
                </div>
            <?endif;?>
        </div>
        <?endforeach;?>
    </div>
</div>