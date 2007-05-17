<?php
// auto-generated by sfPropelAdmin
// date: 2007/05/15 12:08:22
?>
<?php echo form_tag('doctab/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($dftabtip, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('dftabtip[tipdoc]', __($labels['dftabtip{tipdoc}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('dftabtip{tipdoc}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('dftabtip{tipdoc}')): ?>
    <?php echo form_error('dftabtip{tipdoc}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($dftabtip, 'getTipdoc', array (
  'size' => 5,
  'control_name' => 'dftabtip[tipdoc]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('dftabtip[vidutil]', __($labels['dftabtip{vidutil}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('dftabtip{vidutil}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('dftabtip{vidutil}')): ?>
    <?php echo form_error('dftabtip{vidutil}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php echo select_tag('dftabtip[vidutil]', options_for_select(array('1','2','3','4','5','6'),$dftabtip->getVidutil())) ?>
  <?php echo __('Años') ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('dftabtip[nomtab]', __($labels['dftabtip{nomtab}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('dftabtip{nomtab}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('dftabtip{nomtab}')): ?>
    <?php echo form_error('dftabtip{nomtab}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php echo select_tag('dftabtip[nomtab]', options_for_select($tablas,$dftabtip->getNomtab(),'include_custom=Seleccione...'), array('onChange' => remote_function(array(
        'update'   => 'divCombos',//Div a Actualizar
		'url'      => 'doctab/ajax?par=1',//Variable para el control de la accion(1)
		'with' => "'campo='+this.value"//Valor de la variale de la caja de texto
	    ))) ) ?>
    </div>
</div>

<?php include_partial('combos', array('dftabtip' => $dftabtip, 'labels' => $labels, 'campos' => $campos)) ?>

</fieldset>

<?php include_partial('edit_actions', array('dftabtip' => $dftabtip)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($dftabtip->getId()): ?>
<?php echo button_to(__('delete'), 'doctab/delete?id='.$dftabtip->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
