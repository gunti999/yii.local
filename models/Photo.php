<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.12.2017
 * Time: 17:18
 */

namespace app\models;


use yii\db\ActiveRecord;


class Photo extends ActiveRecord
{

    public function getImage(){

        return $this->file;

    }
}
