<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 8/2/14
 * Time: 11:20 AM
 */

namespace backend\modules\content\controllers;

use common\models\Management;
use yii\web\Controller;

class ManagementController extends Controller
{
    public function actionIndex()
    {
        $management = Management::find()->all();
//        var_dump($management);
//        exit();
        return $this->render('index');
    }
}