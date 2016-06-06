<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "product_table".
 *
 * @property integer $id
 * @property string $name
 * @property integer $category_id
 * @property integer $code
 * @property double $price
 * @property integer $availability
 * @property string $brand
 * @property string $description
 * @property integer $is_new
 * @property integer $is_recomended
 * @property integer $status
 *
 * @property CategoryTable $category
 */
class ProductTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    const SHOW_DEFAULT = 8;


    public static function tableName()
    {
        return 'product_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'code', 'price'], 'required'],
            [['category_id', 'code', 'availability', 'is_new', 'is_recomended', 'status'], 'integer'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['file'],'file'],
            [['brand'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 200],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryTable::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя товара',
            'category_id' => 'Категория',
            'code' => 'Код-товара',
            'price' => 'Цена',
            'availability' => 'Доступность',
            'brand' => 'Производитель',
            'description' => 'Описание',
            'is_new' => 'Новинка 1-да,0-нет',
            'is_recomended' => 'Рекомендуемый 1-да,0-нет',
            'status' => 'Наличие 1-да,0-нет',
            'file' => 'Изображение',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(CategoryTable::className(), ['id' => 'category_id']);
    }

    public static function getAll()
    {
        $data = self::find()->all();

        return $data;
    }

    public static function getLatestProduct($count = self::SHOW_DEFAULT)
    {
        $data = (new Query())
            ->select(['id', 'name','image','code','price','is_new'])
            ->from('product_table')
            ->where(['status' => '1'])
            ->orderBy(['id' => SORT_DESC])
            ->limit($count)
            ->all();

        return $data;
    }
    
}
