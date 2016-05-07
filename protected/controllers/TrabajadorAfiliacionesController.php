<?php 
class TrabajadorAfiliacionesController extends Controller
{
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

	public function accessRules()
	{
		return array(
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','view2'),
				'users'=>array('*'),
			),*/
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete','index','admin','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Historiaclinica the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id,$cedula)
	{
		$model=$this->existe($id,$cedula);
		if($model===null)
		{
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TrabajadorAfiliaciones');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}



	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TrabajadorAfiliaciones;

		// Uncomment the following line if AJAX validation is needed

		if(isset($_POST['TrabajadorAfiliaciones']))
		{	
			$model->attributes=$_POST['TrabajadorAfiliaciones'];
			if($this->existe($model->IdAfiliaciones,$model->Cedula) !== null)
			{
				Yii::app()->user->setFlash("error","Esta afiliacion ya fue realizada");
			}
			else
			{
				if($model->save())
				{
					$afiliacion=$model->IdAfiliaciones;
					Yii::app()->user->setFlash("success","La afiliacion se realizo exitosamente");
					$this->redirect(array('trabajadorAfiliaciones/index'));
				}
				else
				{
					Yii::app()->user->setFlash("error","La afiliacion no pudo ser realizada");
				}
			}			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	

	public function actionDelete($id,$cedula)
	{
		$afiliacion=$this->loadModel($id,$cedula)->IdAfiliaciones;
		$this->loadModel($id,$cedula)->delete();


		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
		{
			Yii::app()->user->setFlash("success","La afiliación se removio exitosamente");
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('trabajadorAfiliaciones/index'));
		}
		else
		{
			Yii::app()->user->setFlash("error","La afiliación no pudo ser removida");
		}
	}


	public function existe($idAfiliacion,$cedula)
	{
		$afiliaciones=TrabajadorAfiliaciones::model()->findAll();

		foreach ($afiliaciones as $afiliacion) 
		{
			if($afiliacion->Cedula == $cedula && $afiliacion->IdAfiliaciones == $idAfiliacion)
			{
				return $afiliacion;
			}
		}
		return null;
	}
	
}

 ?>