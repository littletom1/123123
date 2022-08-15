<?php
use common\grid\EnumColumn;
use models\Management;
use common\models\Article;
use common\models\ArticleCategory;
use kartik\date\DatePicker;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use rmrevin\yii\fontawesome\FAS;
/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = Yii::t('backend', 'Show Management');
$this->params['breadcrumbs'][] = $this->title;


?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-check"></i>Successfully!</h4>
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<div>
    <div class="card-header">
        <?php echo Html::a(FAS::icon('user-plus').' '.Yii::t('backend', 'Back to Create'
            ), ['index'], ['class' => 'btn btn-success']) ?>
    </div>
    <div class="card-body p-0">
        <?php echo GridView::widget([
            'dataProvider' => $dataProvider,
            'layout' => "{items}\n{pager}",
            'options' => [
                'class' => ['gridview', 'table-responsive'],
            ],
            'tableOptions' => [
                'class' => ['table', 'text-nowrap', 'table-striped', 'table-bordered', 'mb-0', 'table-sm'],
            ],
            'columns' => [
                [
                    'attribute' => 'id',
                    'format' => 'integer'
                ],
                [
                    'attribute' => 'vendor',
                    'format' => 'text'
                ],
                [
                    'attribute' => 'measurement',
                    'format' => 'text'
                ],
                [
                    'attribute' => 'date',
                    'format' => ['date', 'php:Y-m-d']
                ],
                [
                    'attribute' => 'container',
                    'format' => 'integer'
                ],
                [
                    'attribute' => 'receiving',
                    'format' => 'integer'
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    // you may configure additional properties here
                ],
            ]

        ]); ?>
    </div>

    <div class="card-footer">
        <?php echo getDataProviderSummary($dataProvider) ?>
    </div>
</div>
