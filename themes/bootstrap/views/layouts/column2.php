<?php /* @var $this Controller */ ?>

<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <header class="jumbotron subhead">
        <h2><?php echo CHtml::encode(Yii::app()->name); ?></h2>
        <p class="lead">Overview of the project, its contents, and how to get started with a simple template.</p>
    </header>
    
    <div class="bs-docs-sidebar span3" id="sidebar">
        <?php
            // Se modifica el label para agregar el icono
            foreach ($this->menu as $keyMenu => $itemMenu) {
                //$tempMenu = $itemMenu;
                $itemMenu['label'] = '<i class="icon-chevron-right"></i> '.$itemMenu['label'];
                $this->menu[$keyMenu] = $itemMenu;
            }
        
            $this->widget('zii.widgets.CMenu', array(
                'items' => $this->menu,
                'encodeLabel' => false,
                'htmlOptions' => array('class'=>'nav nav-list bs-docs-sidenav nav-collapse collapse affix',
                                    'data-spy'=>'affix', 
                                    'data-offset-top'=>'100', 
                                    'data-offset-bottom'=>'200'),
            ));
        ?>
    </div><!-- sidebar -->
    
    <div class="span9" id="content">
        <div class="row-fluid">
            <div class="navbar-inner">
            <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                    'htmlOptions' => array('class'=>'breadcrumb'),
                    'tagName' => 'ul',
                    'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
                    'inactiveLinkTemplate' => '<li>{label}</li>',
                    'homeLink' => ' <i class="icon-chevron-left hide-sidebar"><a href="#" title="Ocultar menu lateral" rel="tooltip">&nbsp;</a></i>
                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href="#" title="Mostrar menu lateral" rel="tooltip">&nbsp;</a></i>
                                    <li><a href="'.Yii::app()->homeUrl.'">Inicio</a></li>',
                    'separator' => ' <span class="divider">/</span> '
                )); ?><!-- breadcrumbs -->
            <?php endif?>
            </div>
            
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"></div>
                </div>
                <div class="block-content collapse in">
                    <div class="span-12">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div><!-- content -->
    
</div>
<?php $this->endContent(); ?>