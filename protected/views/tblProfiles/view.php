<?php
/* @var $this TblProfilesController */
/* @var $model TblProfiles */

$this->breadcrumbs=array(
	'Tbl Profiles'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List TblProfiles', 'url'=>array('index')),
	array('label'=>'Create TblProfiles', 'url'=>array('create')),
	array('label'=>'Update TblProfiles', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete TblProfiles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblProfiles', 'url'=>array('admin')),
);
?>

<h1>View TblProfiles #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'lastname',
		'firstname',
	),
)); ?>
