<?php

class AfiliacionesController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),*/
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','index','view'),
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
		$role= new AfiliacionTrabajadorForm;
		if(isset($_POST["AfiliacionTrabajadorForm"]))
		{
			$role->attributes=$POST["AfiliacionTrabajadorForm"];
			if($role->validate())
			{
				$role->trabajador;
				$role->descripcion;
				Yii::app()->authManager->createAfiliacionTrabajador($role->trabajador,$role->afiliacion);
				$this->redirect(array("view","id"=>$id));
			}
		}
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			"role"=>$role,
		));
	}

	

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Afiliaciones;

		// Uncomment the following line if AJAX validation is needed		

		if(isset($_POST['Afiliaciones']))
		{
			$model->attributes=$_POST['Afiliaciones'];
			if($model->save())
			{
				Yii::app()->user->setFlash("success","La afiliación se creó exitosamente");
				$this->redirect(array('view','id'=>$model->Id));
			}
			else
			{
				Yii::app()->user->setFlash("error","La afiliación no se creó exitosamente");
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

		if(isset($_POST['Afiliaciones']))
		{
			$model->attributes=$_POST['Afiliaciones'];
			if($model->save())
			{
				Yii::app()->user->setFlash("success","La afiliación se Actualizó exitosamente");
				$this->redirect(array('view','id'=>$model->Id));
			}
			else
			{
				Yii::app()->user->setFlash("error","La afiliación no se Actualizó exitosamente");
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
			Yii::app()->user->setFlash("success","La afiliación se eliminó exitosamente");
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
		{
			Yii::app()->user->setFlash("success","La afiliación no se eliminó exitosamente");
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Afiliaciones');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Afiliaciones('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Afiliaciones']))
		{
			$model->attributes=$_GET['Afiliaciones'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Afiliaciones the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Afiliaciones::model()->findByPk($id);
		if($model===null)
		{
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Afiliaciones $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='afiliaciones-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	
}
