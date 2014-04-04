<?php
/* @var $this ProductsController */
/* @var $data Products */
?>

<div class="view">

	<!--b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->product_id), array('view', 'id'=>$data->product_id)); ?>
	<br /-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_name')); ?>:</b>
	<?php echo CHtml::encode($data->product_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_price')); ?>:</b>
	<?php echo CHtml::encode($data->product_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_description')); ?>:</b>
	<?php echo CHtml::encode($data->product_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_image')); ?>:</b>
	<?php echo CHtml::encode($data->product_image); ?>
	<br />


</div>