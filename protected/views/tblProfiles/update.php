<?php
/* @var $this TblProfilesController */
/* @var $model TblProfiles */

$this->breadcrumbs=array(
	'Tbl Profiles'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblProfiles', 'url'=>array('index')),
	array('label'=>'Create TblProfiles', 'url'=>array('create')),
	array('label'=>'View TblProfiles', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage TblProfiles', 'url'=>array('admin')),
);
?>

<h1>Update TblProfiles <?php echo $model->user_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>