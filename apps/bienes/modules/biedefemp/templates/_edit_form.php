<?php
// auto-generated by sfPropelAdmin
// date: 2007/04/02 13:52:10
?>
<?php echo form_tag('biedefemp/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>
<?php use_helper('Javascript') ?>
<?php use_helper('PopUp') ?>
<?php use_helper('Grid') ?>
<?php use_helper('Date') ?>
<?php echo javascript_include_tag('dFilter') ?>
<?php echo javascript_include_tag('ajax') ?>
<?php echo javascript_include_tag('tools','observe') ?>

<?php echo object_input_hidden_tag($bndefins, 'getId') ?>
<fieldset id="sf_fieldset_none" class="">
<div class="form-row">
<fieldset id="sf_fieldset_none" class="">
<legend><?echo __('Datos de la Institución') ?></legend>
<div class="form-row">
<table>
<tr>
<th>
 <?php echo label_for('bndefins[codins]', __($labels['bndefins{codins}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{codins}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{codins}')): ?>
    <?php echo form_error('bndefins{codins}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = input_tag('bndefins[codins]', '001', array (
  'size' => 10,
  'readonly' => true,
  'control_name' => 'bndefins[codins]',
)); echo $value ? $value : '&nbsp;' ?>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th><th>
 <?php echo label_for('bndefins[nomins]', __($labels['bndefins{nomins}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{nomins}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{nomins}')): ?>
    <?php echo form_error('bndefins{nomins}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

<?php $value = object_input_tag($bndefins, 'getNomins', array (
  'size' => 66,
  'maxlength'=>35,
  'control_name' => 'bndefins[nomins]',
)); echo $value ? $value : '&nbsp;' ?>
</div>
</th>
</tr>
</table>

<br>

  <?php echo label_for('bndefins[dirins]', __($labels['bndefins{dirins}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{dirins}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{dirins}')): ?>
    <?php echo form_error('bndefins{dirins}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefins, 'getDirins', array (
  'size' => 121,
  'maxlength'=> 100,
  'control_name' => 'bndefins[dirins]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>

<br>
<table>
<tr>
<th>
  <?php echo label_for('bndefins[telins]', __($labels['bndefins{telins}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{telins}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{telins}')): ?>
    <?php echo form_error('bndefins{telins}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefins, 'getTelins', array (
  'size' => 15,
  'maxlength'=>25,
  'control_name' => 'bndefins[telins]',
  'onkeypress' =>"javascript:return num(event)",
)); echo $value ? $value : '&nbsp;' ?>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<?php echo label_for('bndefins[faxins]', __($labels['bndefins{faxins}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{faxins}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{faxins}')): ?>
  <?php echo form_error('bndefins{faxins}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

<?php $value = object_input_tag($bndefins, 'getFaxins', array (
  'size' => 15,
  'maxlength'=>25,
  'control_name' => 'bndefins[faxins]',
  'onkeypress' =>"javascript:return num(event)",
)); echo $value ? $value : '&nbsp;' ?>

</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
  <?php echo label_for('bndefins[email]', __($labels['bndefins{email}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{email}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{email}')): ?>
    <?php echo form_error('bndefins{email}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefins, 'getEmail', array (
  'size' => 30,
  'control_name' => 'bndefins[email]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</th>
</tr>
</table>

<table>
<tr>
<th>
<br>
  <?php echo label_for('bndefins[edoins]', __($labels['bndefins{edoins}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{edoins}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{edoins}')): ?>
    <?php echo form_error('bndefins{edoins}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefins, 'getEdoins', array (
  'size' => 15,
  'maxlength'=>30,
  'control_name' => 'bndefins[edoins]',
)); echo $value ? $value : '&nbsp;' ?>

</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
 <?php echo label_for('bndefins[munins]', __($labels['bndefins{munins}']), 'class="required"') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{munins}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{munins}')): ?>
  <?php echo form_error('bndefins{munins}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

<?php $value = object_input_tag($bndefins, 'getMunins', array (
  'size' => 15,
  'maxlength'=>30,
  'control_name' => 'bndefins[munins]',
)); echo $value ? $value : '&nbsp;' ?>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<br>
  <?php echo label_for('bndefins[paqins]', __($labels['bndefins{paqins}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{paqins}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{paqins}')): ?>
    <?php echo form_error('bndefins{paqins}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefins, 'getPaqins', array (
  'size' => 15,
  'maxlength'=>30,
  'control_name' => 'bndefins[paqins]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</th>
</tr>
</table>
</div>

</fieldset>
<table>
<tr>
<table>
<tr>
<th><fieldset id="sf_fieldset_none" class="">
<legend><?echo __('Código de Activo') ?></legend>
<div class="form-row">
  <?php echo label_for('bndefins[foract]', __($labels['bndefins{foract}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{foract}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{foract}')): ?>
    <?php echo form_error('bndefins{foract}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefins, 'getForact', array (
  'size' => 30,
  'maxlength'=>25,
  'control_name' => 'bndefins[foract]',
)); echo $value ? $value : '&nbsp;' ?>
</div>
<br>
<?php echo label_for('bndefins[desact]', __($labels['bndefins{desact}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{desact}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{desact}')): ?>
    <?php echo form_error('bndefins{desact}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

 <?php $value = object_input_tag($bndefins, 'getDesact', array (
  'size' => 30,
  'maxlength'=>30,
  'control_name' => 'bndefins[desact]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<fieldset id="sf_fieldset_none" class="">
<legend><?echo __('Código de  Ubicación') ?></legend>

<div class="form-row">
  <?php echo label_for('bndefins[forubi]', __($labels['bndefins{forubi}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{forubi}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{forubi}')): ?>
    <?php echo form_error('bndefins{forubi}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefins, 'getForubi', array (
  'size' => 35,
  'maxlength'=>25,
  'control_name' => 'bndefins[forubi]',
)); echo $value ? $value : '&nbsp;' ?>
  </div>
<br>
<?php echo label_for('bndefins[desubi]', __($labels['bndefins{desubi}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{desubi}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{desubi}')): ?>
    <?php echo form_error('bndefins{desubi}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

<?php $value = object_input_tag($bndefins, 'getDesubi', array (
  'size' => 35,
  'maxlength'=>25,
  'control_name' => 'bndefins[desubi]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>
</th>
</tr>
</table>
<table>
<tr>
<th>
<fieldset id="sf_fieldset_none" class="">
<legend><?echo __('Fechas') ?></legend>

<div class="form-row">
  <?php echo label_for('bndefins[fecper]', __($labels['bndefins{fecper}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{fecper}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{fecper}')): ?>
    <?php echo form_error('bndefins{fecper}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_date_tag($bndefins, 'getFecper', array (
  'rich' => true,
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'bndefins[fecper]',
  'onkeyup' => "javascript: mascara(this,'/',patron,true)",
)); echo $value ? $value : '&nbsp;' ?>
    </div>
<br>
  <?php echo label_for('bndefins[feceje]', __($labels['bndefins{feceje}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{feceje}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{feceje}')): ?>
    <?php echo form_error('bndefins{feceje}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_date_tag($bndefins, 'getFeceje', array (
  'rich' => true,
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'bndefins[feceje]',
   'onkeyup' => "javascript: mascara(this,'/',patron,true)",
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
</fieldset>
<fieldset id="sf_fieldset_none" class="">
<legend><?echo __('Desincorporación') ?></legend>
<br>
<div class="form-row">
  <?php echo label_for('bndefins[coddes]', __($labels['bndefins{coddes}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{coddes}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{coddes}')): ?>
    <?php echo form_error('bndefins{coddes}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefins, 'getCoddes', array (
  'size' => 5,
  'maxlength'=>2,
  'control_name' => 'bndefins[coddes]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
<br>
<br>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
</fieldset>
<fieldset id="sf_fieldset_none" class="">
<legend><?echo __('Porcentaje Revalor') ?></legend>
<br>
<div class="form-row">
  <?php echo label_for('bndefins[porrev]', __($labels['bndefins{porrev}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefins{porrev}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefins{porrev}')): ?>
    <?php echo form_error('bndefins{porrev}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefins,array('getPorrev',true), array (
  'size' => 10,
  'maxlength'=>5,
  'onBlur' => "javascript:event.keyCode=13;return entermontootro(event,this.id)",
  'control_name' => 'bndefins[porrev]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
<br><br>

</div>
</th>
</tr>
</table>
</fieldset>

</fieldset>
<?php include_partial('edit_actions', array('bndefins' => $bndefins, 'new' => $new)) ?>
</form>

<ul class="sf_admin_actions">
<? if (!$new) { ?>
      <li class="float-left">
<?php if ($bndefins->getId()): ?>
<?php echo button_to(__('delete'), 'biedefemp/delete?id='.$bndefins->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
<? } ?>
  </ul>

<script language="JavaScript" type="text/javascript" >

  function num(e) {
    evt = e ? e : event;
    tcl = (window.Event) ? evt.which : evt.keyCode;
    if ((tcl < 48 || tcl > 57))
    {
        return false;
    }
    return true;
}


</script>

