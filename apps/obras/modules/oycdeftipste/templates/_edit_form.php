<?php
// auto-generated by sfPropelAdmin
// date: 2007/04/05 12:10:02
?>
<?php echo form_tag('oycdeftipste/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($octipste, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('octipste[codste]', __($labels['octipste{codste}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('octipste{codste}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('octipste{codste}')): ?>
    <?php echo form_error('octipste{codste}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($octipste, 'getCodste', array (
  'size' => 4,
  'maxlength' => 4,  
  'control_name' => 'octipste[codste]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('octipste[desste]', __($labels['octipste{desste}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('octipste{desste}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('octipste{desste}')): ?>
    <?php echo form_error('octipste{desste}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($octipste, 'getDesste', array (
  'size' => 80,
  'control_name' => 'octipste[desste]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<fieldset id="sf_fieldset_none" class=""><legend> <? echo $labels['octipste{tipste}']; ?></legend>
<?  if ($octipste->getTipste()=='P'){
	echo radiobutton_tag('checkbox1','P', true) .'  '. "Personal"."<br>";
	echo radiobutton_tag('checkbox1','J', false) .'  '. "Jurídico"."<br>";

}elseif ($octipste->getTipste()=='J'){
	echo radiobutton_tag('checkbox1','P', false) .'  '. "Personal"."<br>";
	echo radiobutton_tag('checkbox1','J', true) .'  '. "Jurídico"."<br>";

}else{
	echo radiobutton_tag('checkbox1','P', false) .'  '. "Personal"."<br>";
	echo radiobutton_tag('checkbox1','J', false) .'  '. "Jurídico"."<br>";

}
?></fieldset>
</div>

</fieldset>

<?php include_partial('edit_actions', array('octipste' => $octipste)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($octipste->getId()): ?>
<?php echo button_to(__('delete'), 'oycdeftipste/delete?id='.$octipste->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
