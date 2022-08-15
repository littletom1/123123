<?php
use common\grid\EnumColumn;
use models\RedisManagement;
use common\models\Article;
use common\models\ArticleCategory;
use kartik\date\DatePicker;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use rmrevin\yii\fontawesome\FAS;
use yii\bootstrap4\Modal;


/**
 * @var yii\web\View $this
 * @var backend\controllers\ManagementController $model
 */


?>
<div>
    <div class="card-header">
        <?php echo Html::a(FAS::icon('user-plus').' '.Yii::t('backend', 'Back to Main menu'
            ), ['show'], ['class' => 'btn btn-success']) ?>
    </div>
    <div>
        <table class="table table-bordered" id="mytable">
            <thead>
            <tr>
                <th style="color: red">STYLE NO</th>
                <th style="color: red">UOM</th>
                <th style="color: red">PREFIX</th>
                <th style="color: red">SUFIX</th>
                <th style="color: red">HEIGHT#</th>
                <th style="color: red">WIDTH</th>
                <th style="color: red">LENGTH</th>
                <th style="color: red">WEIGHT</th>
                <th style="color: red">UPC</th>
                <th style="color: red">SIZE 1</th>
                <th style="color: red">COLOR 1</th>
                <th>SIZE 2</th>
                <th>COLOR 2</th>
                <th>SIZE 3</th>
                <th>COLOR 3</th>
                <th style="color: red"># CARTON</th>
            </tr>
            </thead>
            <tbody>
            <tr class="tr_name">
                <td><?php echo $model->styleno;?></td>
                <td><?php echo $model->uom;?></td>
                <td><?php echo $model->prefix;?></td>
                <td><?php echo $model->sufix;?></td>
                <td><?php echo $model->height;?></td>
                <td><?php echo $model->width;?></td>
                <td><?php echo $model->length;?></td>
                <td><?php echo $model->weight;?></td>
                <td><?php echo $model->upc;?></td>
                <td><?php echo $model->size1;?></td>
                <td><?php echo $model->color1;?></td>
                <td><?php echo $model->size2;?></td>
                <td><?php echo $model->color2;?></td>
                <td><?php echo $model->size3;?></td>
                <td><?php echo $model->color3;?></td>
                <td><?php echo $model->carton;?></td>

            </tr>

            </tbody>
        </table>
    </div>


</div>
