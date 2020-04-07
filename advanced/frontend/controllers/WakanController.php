<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 09.05.2016
 * Time: 10:50
 */

namespace frontend\controllers;

use frontend\models\Adr;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\pozel;

class WakanController extends AppController{

   
 
public function actionDob(){
     
				$model = new Adr();
 
		
                $name2 = Yii::$app->request->post('name2');
				
		$posts = Yii::$app->db->createCommand("Delete from adr")
           ->execute();
      $posts = Yii::$app->db->createCommand("INSERT INTO adr(http) values('{$name2}')")
           ->execute();
		$hits =Adr ::find()->limit(6)->all();
 
        return $this->render('dob',['name2'=>$name2,'hits'=>$hits]);
 
    
}
} 