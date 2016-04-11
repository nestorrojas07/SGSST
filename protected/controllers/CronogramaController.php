<?php

class CronogramaController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','enabled','update2'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Cronograma;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cronograma']))
		{
			$model->attributes=$_POST['Cronograma'];
			if($model->save())
			{
				Yii::app()->user->setFlash("success","El cronograma se creó exitosamente");
				$this->redirect(array('view','id'=>$model->id));
			}
			else
			{
				Yii::app()->user->setFlash("error","El cronograma no se creó exitosamente");
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

		if(isset($_POST['Cronograma']))
		{
			$model->attributes=$_POST['Cronograma'];
			if($model->save())
			{
				Yii::app()->user->setFlash("success","El cronograma se actualizó exitosamente");
				$this->redirect(array('view','id'=>$model->id));
			}
			else
			{
				Yii::app()->user->setFlash("error","El cronograma no se actualizó exitosamente");
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
			Yii::app()->user->setFlash("success","El cronograma se eliminó exitosamente");
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
		{
			Yii::app()->user->setFlash("success","El cronograma no se eliminó exitosamente");
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Cronograma');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cronograma('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cronograma']))
			$model->attributes=$_GET['Cronograma'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cronograma the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Cronograma::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cronograma $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cronograma-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionEnabled($id)
	{
		$model=Cronograma::model()->findByPk($id);
		
		if($model->estado==0)
		{
			$model->estado=1;
		}
		else
		{
			$model->estado=0;
		}
		$model->save();
		$this->redirect(array("index"));
	}


	public function actionUpdate2($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cronograma']))
		{
			$model->attributes=$_POST['Cronograma'];

			if($model->estado==1)
			{
				if($model->PersonasProgramadas>=$model->PersonasAsistieron && $model->PersonasAsistieron>=0)
				{
					if($model->save())
					{
						Yii::app()->user->setFlash("success","Las personas que asisitieron se registraron exitosamente");
						$this->redirect(array('view','id'=>$model->id));
					}
					else
					{
						Yii::app()->user->setFlash("error","Las personas que asisitieron no se registraron exitosamente");
					}
				}
				else
				{
					Yii::app()->user->setFlash("error","El número de asistentes no es valido o es mayor al número de personas citadas");
				}
			}
			else
			{
				Yii::app()->user->setFlash("error","El cronograma debe estar realizado para poder registrar las personas que asistieron");
			}
		}

		$this->render('update2',array(
			'model'=>$model,
		));
	}
}
