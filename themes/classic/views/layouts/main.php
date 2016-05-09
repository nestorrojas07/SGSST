<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content=""> 

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl?>/css/responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl?>/ico/favicon.png">
  </head>
  <body>

    <div class="navbar navbar-static-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/yii/SGSST/index.php?r=site/index">S.G.S.S.T</a>


          <div class="nav-collapse collapse pull-right">
          
          
          <?php $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=> array("class"=>"nav"),
          'items'=>array(
            array('label'=>'Trabajadores', 'url'=>array('/trabajador/index')),
            array('label'=>'Afiliaciones', 'url'=>array('/afiliaciones/index')),
            array('label'=>'Insumos', 'url'=>array('/vencimientos/index')),
            array('label'=>'Brigadas', 'url'=>array('/brigada/index')),
            array('label'=>'Cronogramas', 'url'=>array('/cronograma/index')),
             array('label'=>'MIPECR', 'url'=>array('/trabajo/index')),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
          ),
        )); ?>


      
          </div><!--/.nav-collapse -->

        </div>
      </div>
    </div>

     
       
    <?php if(isset($this->breadcrumbs) and $this->breadcrumbs!==array()):?>
      <div class="container">
       <div class="row-fluid">
          <div class="span12">
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
              'htmlOptions'=>array("style" =>"margin: 10px 0;" ),
              'links'=>$this->breadcrumbs,
              )); ?>
           </div>
        </div>
      </div>
    <?php endif ?><!-- breadcrumbs -->


    <?php if(($msgs=Yii::app()->user->getFlashes())!==null): ?>
      <div class="container">
        <div class="row-fluid">
          <div class="span12">
            <?php foreach ($msgs as $type => $message):?>
              <div class="alert alert-<?php echo $type?>">
                <h4><?php echo ucfirst($type) ?>!</h4>
                <?php echo $message ?>

              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>  
    <?php endif; ?><!--Manejo de errores -->
      
    <?php echo $content;?>  


    <section class="footer-credits">
        <div class="container">
            <ul class="clearfix">
                <li>© 2016 <a href="http://www.uniquindio.edu.co">Universidad del Quindío.</a> Todos los derechos reservados.</li>
                <li><a href="/yii/SGSST/index.php?r=site/page&view=about">Acerca de</a></li>
                <li>ISIII</li>
                <li>Santiago Salazar Osorno - Mauricio Ramirez</li>
                
            </ul>
        </div>
        <!--close footer-credits container-->
    </section>

      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
