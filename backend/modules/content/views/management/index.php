<?php

use common\grid\EnumColumn;
use common\models\Management;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;


/**
 * @var $this         yii\web\View
 * @var $dataProvider yii\data\ActiveDataProvider
 * @var $model        common\models\Management
 * @var $vendor       common\models\Vendor[]

 */


$this->title = Yii::t('backend', 'Management');
$this->params['breadcrumbs'][] = $this->title;
?>
    <div>
        <?php $form = ActiveForm::begin([
            'enableClientValidation' => false,
            'enableAjaxValidation' => true,
        ]) ?>
        <form class="form-inline">

            <label for="vendor">Vendor:</label>
            <select class="form-control" id="vendor">

<!--                --><?//= $form->field($model, 'vendor')->dropdownList(
//                        ArrayHelper::map(\common\models\Vendor::find()->All(),'id','vendor'),
//                    ['promt'=>'']
//
//                ) ?>

            </select>

            <label for="measure">Measurement System:</label>
            <select class="form-control" id="measure">
                <option>US Imperal</option>
                <option>UK Imperal</option>
            </select>
            <div class="form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-completed">
                <label class="control-label" for="datepicker-disabled-days">Select Date and Time</label>
                <input type="datetime-local" class="form-control" id="datepicker-disabled-days">
            </div>
        </form>
    </div>

    <div class="form-group">
        <label for="container">Container #:</label>
        <input type="text" class="form-control" id="container">
    </div>

    <div class="form-group">
        <label for="receiving">Receiving #:</label>
        <input type="text" class="form-control" id="receiving">
    </div>

    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>STYLE NO</th>
                <th>UOM</th>
                <th>PREFIX</th>
                <th>SUFIX</th>
                <th>HEIGHT#</th>
                <th>WIDTH</th>
                <th>LENGTH</th>
                <th>WEIGHT</th>
                <th>UPC</th>
                <th>SIZE 1</th>
                <th>COLOR 1</th>
                <th>SIZE 2</th>
                <th>COLOR 2</th>
                <th>SIZE 3</th>
                <th>COLOR 3</th>
                <th># CARTON</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div>
        <button type="button" class="btn btn-default">ADD</button>
        <input type="text">
    </div>

    <div>
        <button type="button" class="btn btn-success">Submit</button>
        <button type="button" class="btn btn-warning">Cancel</button>
    </div>



