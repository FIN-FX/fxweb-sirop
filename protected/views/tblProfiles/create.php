<?php
/* @var $this TblProfilesController */
/* @var $model TblProfiles */

$this->breadcrumbs=array(
	'Tbl Profiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblProfiles', 'url'=>array('index')),
	array('label'=>'Manage TblProfiles', 'url'=>array('admin')),
);
?>

<h1>Create TblProfiles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>