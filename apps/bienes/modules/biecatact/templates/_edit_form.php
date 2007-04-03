<?php
// auto-generated by sfPropelAdmin
// date: 2007/04/02 16:03:24
?>
<?php echo form_tag('biecatact/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($bndefact, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('bndefact[codact]', __($labels['bndefact{codact}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('bndefact{codact}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefact{codact}')): ?>
    <?php echo form_error('bndefact{codact}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefact, 'getCodact', array (
  'size' => 30,
  'control_name' => 'bndefact[codact]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp;&nbsp;<?php echo button_to('...','#') ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('bndefact[desact]', __($labels['bndefact{desact}']), 'class="required"') ?>
  <div class="content<?php if ($sf_request->hasError('bndefact{desact}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefact{desact}')): ?>
    <?php echo form_error('bndefact{desact}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefact, 'getDesact', array (
  'size' => 80,
  'control_name' => 'bndefact[desact]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('bndefact[viduti]', __($labels['bndefact{viduti}']), 'class="required"') ?>
  <div class="content<?php if ($sf_request->hasError('bndefact{viduti}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefact{viduti}')): ?>
    <?php echo form_error('bndefact{viduti}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefact, 'getViduti', array (
  'size' => 7,
  'control_name' => 'bndefact[viduti]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('bndefact[canact]', __($labels['bndefact{canact}']), 'class="required"') ?>
  <div class="content<?php if ($sf_request->hasError('bndefact{canact}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('bndefact{canact}')): ?>
    <?php echo form_error('bndefact{canact}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($bndefact, 'getCanact', array (
  'size' => 7,
  'control_name' => 'bndefact[canact]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('bndefact' => $bndefact)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($bndefact->getId()): ?>
<?php echo button_to(__('delete'), 'biecatact/delete?id='.$bndefact->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
