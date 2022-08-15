<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;


/**
 * This is the model class for table "management".
 *
    * @property integer             $id
    * @property integer              $vendor
    * @property integer              $measurement
    * @property string              $date
    * @property string              $container
    * @property string              $receiving
    * @property integer              $styleno
    * @property integer               $uom
    * @property integer             $prefix
    * @property integer             $sufix
    * @property integer             $height
    * @property integer             $width
    * @property integer             $length
 * @property integer             $weight
 * @property integer             $upc
    * @property integer             $size1
     * @property integer             $color1
     * @property integer             $size2
     * @property integer             $color2
     * @property integer             $size3
     * @property integer             $color3
     * @property integer             $carton


 *

 *
 */

class Management extends ActiveRecord{

    public static function tableName()
    {
        return '{{%management}}';
    }

    public function array(){

    }

    public function getAll(){

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
            [['styleno','uom','prefix','sufix','height','width','length','weight','u    pc','size1','color1','carton'],'integer','min' => 0],
            [['styleno','uom','prefix','sufix','height','width','length','weight','upc','size1','color1','carton'],'required'],
            [['size2','color2','size3','color3'],'default', 'value' => null],

        ];
    }

    /**
     * @inheritdoc
     */
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
    public function attributes()
    {
        return[
            'id', 'vendor', 'measurement', 'date', 'container', 'receiving',
            'styleno', 'vendor', 'uom', 'prefix', 'sufix', 'height', 'width', 'length', 'weight', 'upc', 'size1', 'color1', 'size2',
            'color2', 'size3', 'color3', 'carton',
        ];
    }


}


?>