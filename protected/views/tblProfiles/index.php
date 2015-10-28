<?php
/* @var $this TblProfilesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Profiles',
);

$this->menu=array(
	array('label'=>'Create TblProfiles', 'url'=>array('create')),
	array('label'=>'Manage TblProfiles', 'url'=>array('admin')),
);
?>

<h1>Tbl Profiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
