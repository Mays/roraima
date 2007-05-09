<?php
// auto-generated by sfPropelAdmin
// date: 2007/05/08 20:12:47
?>
<?php echo form_tag('facdefactcom/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($fcactcom, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('fcactcom[anoact]', __($labels['fcactcom{anoact}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcactcom{anoact}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcactcom{anoact}')): ?>
    <?php echo form_error('fcactcom{anoact}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcactcom, 'getAnoact', array (
  'size' => 4,
  'control_name' => 'fcactcom[anoact]',
  'maxlength' => 4,
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('fcactcom[codact]', __($labels['fcactcom{codact}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcactcom{codact}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcactcom{codact}')): ?>
    <?php echo form_error('fcactcom{codact}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcactcom, 'getCodact', array (
  'size' => 20,
  'control_name' => 'fcactcom[codact]',
  'maxlength' => 16,
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('fcactcom[desact]', __($labels['fcactcom{desact}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcactcom{desact}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcactcom{desact}')): ?>
    <?php echo form_error('fcactcom{desact}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcactcom, 'getDesact', array (
  'size' => 80,
  'control_name' => 'fcactcom[desact]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>


<div class="form-row">

<?  if ($fcactcom->getMinofac()=='F'){
	echo radiobutton_tag('fcactcom[minofac]','F', true) .'  '. "Bs. por Unidad"."<br>";
	echo radiobutton_tag('fcactcom[minofac]','M', false) .'  '. "Porcentaje"."<br>";

}else{
	echo radiobutton_tag('fcactcom[minofac]','F', false) .'  '. "Bs. por Unidad"."<br>";
	echo radiobutton_tag('fcactcom[minofac]','M', true) .'  '. "Porcentaje"."<br>";

}
?>
</div>


<div class="form-row">
  <?php echo label_for('fcactcom[afoact]', __($labels['fcactcom{afoact}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcactcom{afoact}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcactcom{afoact}')): ?>
    <?php echo form_error('fcactcom{afoact}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcactcom, 'getAfoact', array (
  'size' => 7,
  'control_name' => 'fcactcom[afoact]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('fcactcom[mintri]', __($labels['fcactcom{mintri}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcactcom{mintri}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcactcom{mintri}')): ?>
    <?php echo form_error('fcactcom{mintri}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcactcom, 'getMintri', array (
  'size' => 7,
  'control_name' => 'fcactcom[mintri]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('fcactcom[exoner]', __($labels['fcactcom{exoner}']), 'class="required" ') ?>
<?  if ($fcactcom->getExoner()=='S'){
	echo radiobutton_tag('fcactcom[exoner]','S', true) .'  '. "Si"."<br>";
	echo radiobutton_tag('fcactcom[exoner]','N', false) .'  '. "No"."<br>";

}else{
	echo radiobutton_tag('fcactcom[exoner]','S', false) .'  '. "Si"."<br>";
	echo radiobutton_tag('fcactcom[exoner]','N', true) .'  '. "No"."<br>";

}
?>
</div>

<div class="form-row">
<?php echo label_for('fcactcom[exento]', __($labels['fcactcom{exento}']), 'class="required" ') ?>
<?  if ($fcactcom->getExoner()=='S'){
	echo radiobutton_tag('fcactcom[exento]','S', true) .'  '. "Si"."<br>";
	echo radiobutton_tag('fcactcom[exento]','N', false) .'  '. "No"."<br>";

}else{
	echo radiobutton_tag('fcactcom[exento]','S', false) .'  '. "Si"."<br>";
	echo radiobutton_tag('fcactcom[exento]','N', true) .'  '. "No"."<br>";

}
?>
</div>


<div class="form-row">
<?php echo label_for('fcactcom[rebaja]', __($labels['fcactcom{rebaja}']), 'class="required" ') ?>
<?  if ($fcactcom->getExoner()=='S'){
	echo radiobutton_tag('fcactcom[rebaja]','S', true) .'  '. "Si"."<br>";
	echo radiobutton_tag('fcactcom[rebaja]','N', false) .'  '. "No"."<br>";

}else{
	echo radiobutton_tag('fcactcom[rebaja]','S', false) .'  '. "Si"."<br>";
	echo radiobutton_tag('fcactcom[rebaja]','N', true) .'  '. "No"."<br>";

}
?>
</div>


<div class="form-row">
  <?php echo label_for('fcactcom[porreb]', __($labels['fcactcom{porreb}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcactcom{porreb}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcactcom{porreb}')): ?>
    <?php echo form_error('fcactcom{porreb}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcactcom, 'getPorreb', array (
  'size' => 7,
  'control_name' => 'fcactcom[porreb]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('fcactcom' => $fcactcom)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($fcactcom->getId()): ?>
<?php echo button_to(__('delete'), 'facdefactcom/delete?id='.$fcactcom->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
