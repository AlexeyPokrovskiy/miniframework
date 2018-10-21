<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

    public function createTask($data){

        foreach ($data as &$item){
            if(empty($item)){
                return "Заполните все поля!";
            }else{
                $item="'".addslashes($item)."'";
            }
        }
        $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/public/task-image/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        $data['image']="'".addslashes(basename($_FILES['image']['name']))."'";

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {

            $this->db->query('INSERT INTO `task` (title, description, name, email, image)
            VALUES ('.$data["title"].','.$data["description"].','.$data["name"].','.$data["email"].','.$data["image"].')');

            return "Задача создана";

        } else {

            return "Загрузите картинку";
        }

    }

}