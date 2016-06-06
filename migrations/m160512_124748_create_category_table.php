<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Handles the creation for table `category_table`.
 */
class m160512_124748_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category_table', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING.'(50) NOT NULL',
            'sort_order' => Schema::TYPE_INTEGER.' NOT NULL',
            'status' => Schema::TYPE_SMALLINT.' NOT NULL'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category_table');
    }
}
