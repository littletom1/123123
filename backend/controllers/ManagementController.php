<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 8/2/14
 * Time: 11:20 AM
 */

namespace backend\controllers;

use backend\models\Management;
use backend\models\search\ManagementSearch;
use yii\web\Controller;
use backend\models\RedisManagement;
use yii\data\ActiveDataProvider;


use Yii;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

class ManagementController extends Controller
{
    public function actionIndex()
    {
        $management = new Management();
        if ($management->load(Yii::$app->request->post()) ) {
            if($management->save()){
                $redis_management = Yii::$app->redis;
                $redis_management = new RedisManagement();
                $redis_management->id = $management->id;
                $redis_management->vendor = $management->vendor;
                $redis_management->measurement = $management->measurement;
                $redis_management->date = $management->date;
                $redis_management->container = $management->container;
                $redis_management->receiving = $management->receiving;
                $redis_management->styleno = $management->styleno;
                $redis_management->uom = $management->uom;
                $redis_management->prefix = $management->prefix;
                $redis_management->sufix = $management->sufix;
                $redis_management->height = $management->height;
                $redis_management->width = $management->width;
                $redis_management->length = $management->length;
                $redis_management->weight = $management->weight;
                $redis_management->upc = $management->upc;
                $redis_management->size1 = $management->size1;
                $redis_management->color1 = $management->color1;
                $redis_management->size2 =$management->size2;
                $redis_management->color2 = $management->color2;
                $redis_management->size3 = $management->size3;
                $redis_management->color3 = $management->color3;
                $redis_management->carton = $management->carton;
                $redis_management->save();

                Yii::$app->session->setFlash('success', 'Inserted Successfully!');
            }else{
                Yii::$app->session->setFlash('error', "ERROR!!!.");

            }
            return $this->redirect(['index']);

            //var_dump($management);
        }

        return $this->render('index',['management'=>$management]);

    }


    public function actionShow()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => RedisManagement::find(),
            'pagination' => array('pageSize' => 10),
        ]);

        return $this->render('show', [
            'dataProvider' => $dataProvider,
        ]);
   }

   public function actionView($id)
   {
       $model = RedisManagement::findOne($id);
//       var_dump($model);
//       exit();
       //echo $id;
       return $this->render('view',[
           'model' => $model,
       ]);
   }

   public function actionDelete($id){
       $management = new Management();
       $model = RedisManagement::findOne($id)->delete();
       if($model){
           $management = Management::findOne($id)->delete();
           Yii::$app->session->setFlash('success', 'Delete Successfully!');

       }
       $dataProvider = new ActiveDataProvider([
           'query' => RedisManagement::find(),
           'pagination' => array('pageSize' => 10),
       ]);

       return $this->render('show', [
           'dataProvider' => $dataProvider,
       ]);

   }

   public function actionUpdate(){
       $request = Yii::$app->request;
       $id = $request->get('id');
       //$management = new Management();
       $management = RedisManagement::find()->where(['id' => $request->get('id')])->one();
       if (Yii::$app->request->post() )  {

           $redis_management = Yii::$app->request->post();
//           var_dump($redis_management['RedisManagement']['vendor']);
//           exit();

           $management->vendor = $redis_management['RedisManagement']['vendor'];
           $management->measurement = $redis_management['RedisManagement']['measurement'];
           $management->date = $redis_management['RedisManagement']['date'];
           $management->container = $redis_management['RedisManagement']['container'];
           $management->receiving = $redis_management['RedisManagement']['receiving'];
           $management->styleno = $redis_management['RedisManagement']['styleno'];
           $management->uom = $redis_management['RedisManagement']['uom'];
           $management->prefix = $redis_management['RedisManagement']['prefix'];
           $management->sufix = $redis_management['RedisManagement']['sufix'];
           $management->height = $redis_management['RedisManagement']['height'];
           $management->width = $redis_management['RedisManagement']['width'];
           $management->length = $redis_management['RedisManagement']['length'];
           $management->weight = $redis_management['RedisManagement']['weight'];
           $management->upc = $redis_management['RedisManagement']['upc'];
           $management->size1 = $redis_management['RedisManagement']['size1'];
           $management->color1 = $redis_management['RedisManagement']['color1'];
           $management->size2 = $redis_management['RedisManagement']['size2'];
           $management->color2 = $redis_management['RedisManagement']['color2'];
           $management->size3 = $redis_management['RedisManagement']['size3'];
           $management->color3 = $redis_management['RedisManagement']['color3'];
           $management->carton = $redis_management['RedisManagement']['carton'];
           $management->save();
           Yii::$app->session->setFlash('success', 'Update Successfully!');
           return $this->redirect(['show','id' => $management->id]);

       }else{
           return $this->render('update',['management'=>$management]);

       }
//       if($model){
//           $management = Management::findOne($id)->update();
//           Yii::$app->session->setFlash('success', 'Update Successfully!');
//
//       }

   }

}