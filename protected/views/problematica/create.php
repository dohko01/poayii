<?php
/* @var $this ProblematicaController */
/* @var $model Problematica */

$this->breadcrumbs=array(
	$this->title_sin=>array('index'),
	'Crear',
);
/*
$this->menu=array(
	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
	array('label'=>'Administrar '.$this->title_plu, 'url'=>array('admin')),
);*/
?>

<script type="text/javascript" languaje="javascript">
    $(window).load(function(){
        $("#addCausa").click(function(){
            $("#tblCausas").append('<tr><td><input id="causas" type="text" name="causas[]" value="" size="50"></td></tr>');
        });
        
        $("#addEfecto").click(function(){
            $("#tblEfectos").append('<tr><td><input id="efectos" type="text" name="efectos[]" value="" size="50"></td></tr>');
        });
    });
</script>

<h1>Crear nuevo <?php echo $this->title_sin; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'arbolProblema'=>$arbolProblema)); ?>