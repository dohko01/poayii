<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="es" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php
            $themeBaseUrl = Yii::app()->theme->baseUrl;
            Yii::app()->clientScript->registerCoreScript('jquery');
            //Yii::app()->clientScript->registerCoreScript('jquery.ui');
        ?>
        <!-- Bootstrap -->
        <link href="<?php echo $themeBaseUrl; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo $themeBaseUrl; ?>/bootstrap/css/bootstrap-responsive.min.css" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo $themeBaseUrl; ?>/assets/styles.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo $themeBaseUrl; ?>/vendors/uniform.default.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo $themeBaseUrl; ?>/vendors/chosen.min.css" rel="stylesheet" type="text/css" media="screen">
        
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo $themeBaseUrl; ?>/vendors/modernizr-2.6.2-respond-1.1.0.min.js" type="text/javascript"></script>
        
        <script src="<?php echo $themeBaseUrl; ?>/vendors/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo $themeBaseUrl; ?>/vendors/chosen.jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $themeBaseUrl; ?>/bootstrap/js/bootstrap.min.js"> type="text/javascript"</script>
        <script src="<?php echo $themeBaseUrl; ?>/assets/scripts.js" type="text/javascript"></script>
        
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-user"></i> <?php echo Yii::app()->user->name; ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Perfil</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo Yii::app()->createUrl("/site/logout"); ?>">Cerrar Sesi&oacute;n</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <?php $this->widget('zii.widgets.CMenu',array(
                            'items'=>array(
                                array('label'=>'Home', 'url'=>array('/site/index')),
                                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                array('label'=>'Contact', 'url'=>array('/site/contact')),
                                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                            ),
                            'htmlOptions'=>array('class'=>'nav'),
                        )); ?>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            
            <?php echo $content; ?>
            
            <hr>
            
            <footer>
                <p>&copy; ISECH 2014</p>
            </footer>
            
        </div>
        <!--/.fluid-container-->
        
        <script type="text/javascript">
        $(function() {
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.tooltip').tooltip();
        });
        </script>
        
    </body>

</html>