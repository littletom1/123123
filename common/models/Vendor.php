<?php
namespace common\models;

use common\models\query\ArticleCategoryQuery;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "vendor".
 *
 * @property integer         $id
 * @property string          $vendor

 *
 * @property vendor[]       $Vendor
 * @property Vendor         $parent
 */

class Vendor extends ActiveRecord{
    public static function tableName()
    {
        return '{{%vendor}}';
    }
}
?>