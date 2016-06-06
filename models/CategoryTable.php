<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category_table".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort_order
 * @property integer $status
 */
class CategoryTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'sort_order', 'status'], 'required'],
            [['sort_order', 'status'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Категория',
            'sort_order' => 'Порядок сортировки',
            'status' => 'Статус 1-вкл. 0-выкл',
        ];
    }

    public static function getAll()
    {
        $data = self::find()->all();

        return $data;
    }

    
   
}
