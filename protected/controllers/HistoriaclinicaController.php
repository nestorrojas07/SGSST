<?php

class HistoriaclinicaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','view2'),
				'users'=>array('*'),
			),*/
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','index','view','view2'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionView2($id)
	{
		$this->render('view2',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Historiaclinica;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Historiaclinica']))
		{
			$model->attributes=$_POST['Historiaclinica'];
			if($model->save())
			{
				Yii::app()->user->setFlash("success","La historia clinica se creó exitosamente");
				$this->redirect(array('trabajador/view','id'=>$model->Cedula_trabajador));
			}
			else
			{
				Yii::app()->user->setFlash("error","La historia clinica no se creó exitosamente");
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Historiaclinica']))
		{
			$model->attributes=$_POST['Historiaclinica'];
			if($model->save())
			{
				Yii::app()->user->setFlash("success","La historia clinica se actualizó exitosamente");
				$this->redirect(array('trabajador/view','id'=>$model->Cedula_trabajador));
			}
			else
			{
				Yii::app()->user->setFlash("error","La historia clinica no se actualizó exitosamente");
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
		{
			Yii::app()->user->setFlash("success","La historia clinica se eliminó exitosamente");
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
		{
			Yii::app()->user->setFlash("error","La historia clinica no se eliminó exitosamente");
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Historiaclinica');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Historiaclinica('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Historiaclinica']))
			$model->attributes=$_GET['Historiaclinica'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Historiaclinica the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Historiaclinica::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Historiaclinica $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='historiaclinica-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function getExamenRealizacionGeneral()
	{
		$historiasClinicas=Historiaclinica::model()->findAll();
		foreach ($historiasClinicas as $historia)
		{
			if($historia->examenIngreso == null)
			{
				return true;
			}
			if($historia->examenPeriodico == true)
			{
				return true;
			}
		}
		return false;
	}

	public function getExamenRealizacionEspecifico($id)
	{
		$historia=$this->loadModel($id);		
		if($historia->examenPeriodico == true)
		{
			return true;
		}
		return false;
	}

	public function getExamenIngreso($id)
	{
		$historia=$this->loadModel($id);
	
		if($historia->examenIngreso == null)
		{
			return true;
		}
		return false;
	}
	
}
