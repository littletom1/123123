<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
class RedisManagement extends \yii\redis\ActiveRecord
{
    /**
     * @return array the list of attributes for this record
     */
    public function attributes()
    {
        return ['id', 'vendor', 'measurement', 'date','container','receiving','styleno',
            'uom','prefix','sufix','height','width','length','weight','upc',
            'size1','color1','size2','color2','size3','color3','carton'];
    }




    /**
     * @return ActiveQuery defines a relation to the Order record (can be in other database, e.g. elasticsearch or sql)
     */
}