<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
class Crms extends ActiveRecord 
{

     /**
    * @return string 返回该AR类关联的数据表名
    */
    public static function tableName() {
      return 't_list';
    }

}