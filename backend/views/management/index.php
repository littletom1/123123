<?php

use common\grid\EnumColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use rmrevin\yii\fontawesome\FAS;
use backend\models\Management;


/**
 * @var $this         yii\web\View
 * @var $dataProvider yii\data\ActiveDataProvider
 * @var $management   models\Management

 */


$this->title = Yii::t('backend', 'Management');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'post',
]) ?>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-check"></i>Saved!</h4>
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-check"></i>Not Saved!</h4>
        <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>
<div class="row" >
    <div class="col-4 form-inline">
        <?php
        echo $form->field($management, 'vendor')
            ->dropDownList(['LOSER BOIZ' => 'LOSER BOIZ', 'WINNER BOIZ' => 'WINNER BOIZ', 'Victory Aircraft' => 'Victory Aircraft'])
            ->label('Vendor:  ');
        ?>
    </div>
    <div class="col-4 form-inline">
        <?php
        echo $form->field($management, 'measurement')
            ->dropDownList(['UK Imperial' => 'UK Imperial', 'VN Imperial' => 'VN Imperial', 'US Imperial' => 'US Imperial'])
            ->label('Measurement System:  ');
        ?>
    </div>
    <div class="col-4 form-inline">
        <?= $form->field($management, "date")
            ->input('datetime-local')->label('Date') ?>
    </div>

</div>

    <?= $form->field($management, "container")
        ->input('text', ['placeholder'=> 'Container'])->label('Container :') ?>

    <?= $form->field($management, "receiving")
        ->input('text', ['placeholder'=> 'Receiving'])->label('Receiving# :') ?>

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
            <tr class="tr_name" id="123">
                <td><?= $form->field($management, "styleno")
                        ->textInput(['id'=>'styleno_1'])->label(false) ?></td>

                <td><?= $form->field($management, "uom")
                        ->textInput(['id'=>'uom_1'])->label(false) ?></td>

                <td><?= $form->field($management, "prefix")
                        ->textInput(['id'=>'prefix_1'])->label(false) ?></td>

                <td><?= $form->field($management, "sufix")
                        ->textInput(['id'=>'sufix_1'])->label(false) ?></td>

                <td><?= $form->field($management, "height")
                        ->textInput(['id'=>'height_1'])->label(false) ?></td>

                <td><?= $form->field($management, "width")
                        ->textInput(['id'=>'width_1'])->label(false) ?></td>

                <td><?= $form->field($management, "length")
                        ->textInput(['id'=>'length_1'])->label(false) ?></td>
                <td><?= $form->field($management, "weight")
                        ->textInput(['id'=>'weight_1'])->label(false) ?></td>

                <td><?= $form->field($management, "upc")
                        ->textInput(['id'=>'upc_1'])->label(false) ?></td>

                <td><?= $form->field($management, "size1")
                        ->textInput(['id'=>'size1_1'])->label(false) ?></td>

                <td><?= $form->field($management, "color1")
                        ->textInput(['id'=>'color1_1'])->label(false) ?></td>
                <td><?= $form->field($management, "size2")
                        ->textInput(['id'=>'size2_1'])->label(false) ?></td>

                <td><?= $form->field($management, "color2")
                        ->textInput(['id'=>'color2_1'])->label(false) ?></td>

                <td><?= $form->field($management, "size3")
                        ->textInput(['id'=>'size3_1'])->label(false) ?></td>

                <td><?= $form->field($management, "color3")
                        ->textInput(['id'=>'color3_1'])->label(false) ?></td>

                <td><?= $form->field($management, "carton")
                        ->textInput(['id'=>'carton_1'])->label(false) ?></td>
            </tr>

            </tbody>
        </table>
    </div>

    <span>
        <span type="button" id="btn-add" onclick="getValue()">ADD</span>
        <input type="number" id="get">

    </span>

    <div>
        <?php
        echo Html::submitButton('Submit', [ 'class'=>"btn btn-primary"]);
        ActiveForm::end();
        ?>
    </div>
    <div>
        <a href="/management/show">Main Menu</a>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // $("#btn-add").click(function() {
    //     var table = $("#mytable");
    //     var rowNum = parseInt($("#table-row-num").val(), 10);
    //     var resultHtml = '';
    //     for(var i = 0 ; i < rowNum ; i++) {
    //         resultHtml += ["<tr id='123'>",
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '<td><input type="name" placeholder="text goes here..."></td>',
    //             '</tr>'].join("\n");
    //     }
    //     table.html(resultHtml);
    //     return false;
    // });


    const someThing = [
        'styleno',
        'uom',
        'prefix',
        'sufix',
        'height',
        'width',
        'length',
        'weight',
        'upc',
        'size1',
        'color1',
        'size2',
        'color2',
        'size3',
        'color3',
        'carton',
    ]

    function getValue()
    {
        let input = document.getElementById("get");
        let amountRow = input.value
        //console.log(amountRow)
        const buttonAdd = document.getElementById('btn-add');
        buttonAdd.onclick = () => {
            let tableRef = document.getElementById("mytable");
            for (let i = 0; i < amountRow; i++) {
                const tr = document.createElement('tr');
                for (let index = 0; index < 16; index++) {
                    const td = document.createElement('td');
                    const input = document.createElement('input')
                    input.setAttribute('name', someThing[index]);
                    input.style.width = "100%"
                    // input.setAttribute('id', someThing[index] + [i]);
                    td.appendChild(input)
                    tr.appendChild(td)
                }
                tableRef.appendChild(tr)
                tableRef.insertRow(-1)
            }
        }
    }
</script>




