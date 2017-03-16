<?php
/**
 * Created by PhpStorm.
 * User: duke
 * Date: 2017/3/14
 * Time: 下午10:57
 */
namespace app\models;
use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
    public static function tableName()
    {
        return "{{%test}}";
    }
}