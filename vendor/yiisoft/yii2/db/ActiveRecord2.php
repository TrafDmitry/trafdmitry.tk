<?php

/**
 * This is connection from phpshop DB MySql
 */

namespace yii\db;


class ActiveRecord2 extends ActiveRecord
{
    public static function getDb()
    {
        return \Yii::$app->db2;
    }
}