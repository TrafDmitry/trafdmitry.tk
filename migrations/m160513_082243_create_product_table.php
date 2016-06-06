<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Handles the creation for table `product_table`.
 */
class m160513_082243_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('product_table', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING.'(100) NOT NULL',
            'category_id' => Schema::TYPE_INTEGER.' NOT NULL',
            'code' => Schema::TYPE_INTEGER.' NOT NULL',
            'price' => Schema::TYPE_FLOAT.'(6,2) NOT NULL',
            'availability' => Schema::TYPE_SMALLINT,
            'brand' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'is_new' => Schema::TYPE_SMALLINT,
            'is_recomended' => Schema::TYPE_SMALLINT,
            'status' => Schema::TYPE_SMALLINT
        ]);
        $this->addForeignKey('category_product_id','product_table','category_id','category_table','id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('product_table');
    }
}
