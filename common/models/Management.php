<?php
namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "management".
 *
    * @property integer             $id
    * @property integer              $vendor_id
    * @property integer              $measure_id
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
    * @property integer             $upc
    * @property integer             $size1
     * @property integer             $color1
     * @property integer             $size2
     * @property integer             $color2
     * @property integer             $size3
     * @property integer             $color3
     * @property integer             $carton


 *

 * @property ArticleCategory     $category
 * @property ArticleAttachment[] $articleAttachments
 */

class Management extends ActiveRecord{

    public static function tableName()
    {
        return '{{%management}}';
    }

    public function rules()
    {
        return [
          [['container','receiving'],'required']
        ];
    }

}


?>