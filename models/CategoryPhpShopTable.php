<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord2;

class CategoryPhpShopTable extends ActiveRecord2
{
    public static function tableName()
    {
        return 'category';
    }

    public static function getAll()
    {
        $data = self::find()->all();

        return $data;
    }
}