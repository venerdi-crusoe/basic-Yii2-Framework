<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;


	class CountryController extends Controller{

		public function actionIndex(){
			//andiamo ad utilizzare ActiveRecord
			$query = Country::find();
			//Select

			//Paginazione
			$pagination = new Pagination([
			'defaultPageSize' => 5,
			'totalCount' => $query->count(),
			]);

			$countries = $query->orderBy('name')
							->offset($pagination->offset)
							->limit($pagination->limit)
							->all();

			return $this->render('index',[
				'countries' => $countries,
				'pagination' => $pagination,
			]);

		}

		public function actionView($code){

       if(isset($code) && is_string($code)){
         $code=addslashes($code);
         $model = $this->findModel($code);

         //Country::find()->where(['code' => $code])->one();
         //la Select
         return $this->render('view',['model' => $model]);

     } else{
         return $this->redirect('index.php?r=country');
      }

     }

		 public function findModel($code){

			$arrQuery = Country::find()->where(['code' => $code])->one();

			//print_r($arrQuery);die();
			return $arrQuery;

		}

		public function actionDelete($code){
			$model = $this->findModel($code);
			$model->delete();
			return $this->redirect('index.php?r=country');

		}

		public function actionCreate(){

		 //creo un nuovo model
			$model = new Country();
			if ($model->load(Yii::$app->request->post()) && $model->validate()) {
				 //print_r($model); die();
				 $model->save();
				 return $this->redirect(['view', 'code' => $model->code]);
			}else{
				 return $this->render('create', [
							'model' => $model,
						 ]);
			 }

		}

		public function actionUpdate($code){
			$model = new Country();
			$model = $this->findModel($code);

			if($model->load(Yii::$app->request->post()) && $model->validate()){
				$model->save();
				return $this->redirect(['view', 'code'=> $model->code]);
			}else {
				return $this->render ('update', ['model'=> $model]);
			}
		}

	}

?>
