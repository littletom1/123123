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

    public function rules()
    {
        return [
            [['vendor','measurement'],'string'],
            [['container','receiving'],'required'],
            [['container','receiving'],'integer','min'=>0],
            [['date'], 'default', 'value' => function () {
                return date(DATE_ISO8601);
            }],
            [['styleno','uom','prefix','sufix','height','width','length','weight','upc','size1','color1','carton'],'integer','min' => 0],
            [['styleno','uom','prefix','sufix','height','width','length','weight','upc','size1','color1','carton'],'required'],
            [['size2','color2','size3','color3'],'default', 'value' => null],

        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'vendor' => 'Vendor',
            'measurement' => 'Measurement',
            'date' => 'Date',
            'container' => 'Container',
            'receiving' => 'Receiving',
            'styleno' => 'Style No',
            'uom' => 'UOM',
            'prefix' => 'Prefix',
            'sufix' => 'Sufix',
            'height' => 'Height',
            'width' => 'Width',
            'length' => 'Length',
            'weight' => 'Weight',
            'upc' => 'UPC',
            'size1' => 'Size1',
            'color1' => 'Color1',
            'size2' => 'Size2',
            'color2' => 'Color2',
            'size3' => 'Size3',
            'color3' =>'color3',
            'carton' => 'Carton',

        ];
    }




    /**
     * @return ActiveQuery defines a relation to the Order record (can be in other database, e.g. elasticsearch or sql)
     */
}