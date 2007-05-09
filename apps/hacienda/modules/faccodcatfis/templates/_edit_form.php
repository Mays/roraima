<?php
// auto-generated by sfPropelAdmin
// date: 2007/05/07 15:56:05
?>
<?php echo form_tag('faccodcatfis/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php use_helper('tabs') ?>
<?php echo object_input_hidden_tag($fcdefnca, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">
<div class="form-row">
<strong>Nombre de la institución</strong>
&nbsp;&nbsp;
<?php echo input_tag('Nombre', '', 'size=60 disabled=true') ?>
</div>

<div class="form-row">
<fieldset id="sf_fieldset_none" class="">
<legend>Numeración</legend>
<div class="form-row">
<fieldset id="sf_fieldset_none" class="">
<legend>Fija</legend>
<div class="form-row">
  <?php echo label_for('fcdefnca[codpar]', __($labels['fcdefnca{codpar}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{codpar}')): ?> form-error<?php endif; ?>"> </div>
  <?php if ($sf_request->hasError('fcdefnca{codpar}')): ?>
    <?php echo form_error('fcdefnca{codpar}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>
  
<?php echo select_tag('fcdefnca[codpar]', options_for_select($lista,$fcdefnca->getCodpar(), 'include_blank=true')) ?>
</div>

<div class="form-row">
<strong>Número de Períodos por Año</strong>
<?php echo select_tag('fcdefnca[numper]', options_for_select($listaperiodos,$fcdefnca->getNumper(), 'include_custom=Seleccione uno')) ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo select_tag('fcdefnca[denumper]', options_for_select($listadescripcion,$fcdefnca->getDenumper(), 'include_custom=Seleccione uno')) ?>  
</div>
</fieldset>
</div>

<div class="form-row">
<fieldset id="sf_fieldset_none" class="">
<legend>Variable</legend>
<div class="form-row">
 <strong>Número de Niveles</strong>
<?php echo select_tag('fcdefnca[numniv]', options_for_select($listanivelinmueble,$fcdefnca->getNumniv(), 'include_custom=Seleccione uno')) ?>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<strong>Nivel del Inmueble</strong>
<?php echo select_tag('fcdefnca[nivinm]', options_for_select($listanivelinmueble,$fcdefnca->getNivinm(), 'include_custom=Seleccione uno')) ?> 
</div>
</fieldset>
</div>
</fieldset>
</div>
</fieldset>
<?php tabMainJS("tp1","tabPane1", "tabPage1", 'Nivel 1');?>
<div class="form-row">
  <?php echo label_for('fcdefnca[nomext1]', __($labels['fcdefnca{nomext1}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomext1}')): ?> form-error<?php endif; ?>"></div>
  <?php if ($sf_request->hasError('fcdefnca{nomext1}')): ?>
    <?php echo form_error('fcdefnca{nomext1}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomext1', array (
  'size' => 60,
  'control_name' => 'fcdefnca[nomext1]',
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;&nbsp;&nbsp;&nbsp;
<strong>Tamaño</strong>
&nbsp;
<?php echo select_tag('fcdefnca[tamano1]', options_for_select($tamano,$fcdefnca->getTamano1())) ?>
</div>

<div class="form-row">
  <?php echo label_for('fcdefnca[nomabr1]', __($labels['fcdefnca{nomabr1}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomabr1}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcdefnca{nomabr1}')): ?>
    <?php echo form_error('fcdefnca{nomabr1}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomabr1', array (
  'size' => 20,
  'control_name' => 'fcdefnca[nomabr1]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>    
</div>

<?php tabPageOpenClose("tp1", "tabPage2", 'Nivel 2');?>
<div class="form-row">
  <?php echo label_for('fcdefnca[nomext2]', __($labels['fcdefnca{nomext2}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomext2}')): ?> form-error<?php endif; ?>"></div>
  <?php if ($sf_request->hasError('fcdefnca{nomext2}')): ?>
    <?php echo form_error('fcdefnca{nomext2}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomext2', array (
  'size' => 60,
  'control_name' => 'fcdefnca[nomext2]',
)); echo $value ? $value : '&nbsp;' ?> 
&nbsp;&nbsp;&nbsp;&nbsp;   
<strong>Tamaño</strong>
&nbsp;
<?php echo select_tag('fcdefnca[tamano2]', options_for_select($tamano,$fcdefnca->getTamano2())) ?>    
</div>

<div class="form-row">
  <?php echo label_for('fcdefnca[nomabr2]', __($labels['fcdefnca{nomabr2}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomabr2}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcdefnca{nomabr2}')): ?>
    <?php echo form_error('fcdefnca{nomabr2}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomabr2', array (
  'size' => 20,
  'control_name' => 'fcdefnca[nomabr2]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<?php tabPageOpenClose("tp1", "tabPage3", 'Nivel 3');?>
<div class="form-row">
  <?php echo label_for('fcdefnca[nomext3]', __($labels['fcdefnca{nomext3}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomext3}')): ?> form-error<?php endif; ?>"></div>
  <?php if ($sf_request->hasError('fcdefnca{nomext3}')): ?>
    <?php echo form_error('fcdefnca{nomext3}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomext3', array (
  'size' => 60,
  'control_name' => 'fcdefnca[nomext3]',
)); echo $value ? $value : '&nbsp;' ?> 
&nbsp;&nbsp;&nbsp;&nbsp;   
<strong>Tamaño</strong>
&nbsp;
<?php echo select_tag('fcdefnca[tamano3]', options_for_select($tamano,$fcdefnca->getTamano3())) ?>    
</div>

<div class="form-row">
  <?php echo label_for('fcdefnca[nomabr3]', __($labels['fcdefnca{nomabr3}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomabr3}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcdefnca{nomabr3}')): ?>
    <?php echo form_error('fcdefnca{nomabr3}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomabr3', array (
  'size' => 20,
  'control_name' => 'fcdefnca[nomabr3]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<?php tabPageOpenClose("tp1", "tabPage4", 'Nivel 4');?>
<div class="form-row">
  <?php echo label_for('fcdefnca[nomext4]', __($labels['fcdefnca{nomext4}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomext4}')): ?> form-error<?php endif; ?>"> </div>
  <?php if ($sf_request->hasError('fcdefnca{nomext4}')): ?>
    <?php echo form_error('fcdefnca{nomext4}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomext4', array (
  'size' => 60,
  'control_name' => 'fcdefnca[nomext4]',
)); echo $value ? $value : '&nbsp;' ?>   
&nbsp;&nbsp;&nbsp;&nbsp;   
<strong>Tamaño</strong>
&nbsp;
<?php echo select_tag('fcdefnca[tamano4]', options_for_select($tamano,$fcdefnca->getTamano4())) ?>    
</div>

<div class="form-row">
  <?php echo label_for('fcdefnca[nomabr4]', __($labels['fcdefnca{nomabr4}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomabr4}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcdefnca{nomabr4}')): ?>
    <?php echo form_error('fcdefnca{nomabr4}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomabr4', array (
  'size' => 20,
  'control_name' => 'fcdefnca[nomabr4]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<?php tabPageOpenClose("tp1", "tabPage5", 'Nivel 5');?>
<div class="form-row">
  <?php echo label_for('fcdefnca[nomext5]', __($labels['fcdefnca{nomext5}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomext5}')): ?> form-error<?php endif; ?>"></div>
  <?php if ($sf_request->hasError('fcdefnca{nomext5}')): ?>
    <?php echo form_error('fcdefnca{nomext5}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomext5', array (
  'size' => 60,
  'control_name' => 'fcdefnca[nomext5]',
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;&nbsp;&nbsp;&nbsp;   
<strong>Tamaño</strong>
&nbsp;
<?php echo select_tag('fcdefnca[tamano5]', options_for_select($tamano,$fcdefnca->getTamano5())) ?> 
    
</div>

<div class="form-row">
  <?php echo label_for('fcdefnca[nomabr5]', __($labels['fcdefnca{nomabr5}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomabr5}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcdefnca{nomabr5}')): ?>
    <?php echo form_error('fcdefnca{nomabr5}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomabr5', array (
  'size' => 20,
  'control_name' => 'fcdefnca[nomabr5]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<?php tabPageOpenClose("tp1", "tabPage6", 'Nivel 6');?>
<div class="form-row">
  <?php echo label_for('fcdefnca[nomext6]', __($labels['fcdefnca{nomext6}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomext6}')): ?> form-error<?php endif; ?>"> </div>
  <?php if ($sf_request->hasError('fcdefnca{nomext6}')): ?>
    <?php echo form_error('fcdefnca{nomext6}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomext6', array (
  'size' => 60,
  'control_name' => 'fcdefnca[nomext6]',
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;&nbsp;&nbsp;&nbsp;   
<strong>Tamaño</strong>
&nbsp;
<?php echo select_tag('fcdefnca[tamano6]', options_for_select($tamano,$fcdefnca->getTamano6())) ?>   
</div>

<div class="form-row">
  <?php echo label_for('fcdefnca[nomabr6]', __($labels['fcdefnca{nomabr6}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomabr6}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcdefnca{nomabr6}')): ?>
    <?php echo form_error('fcdefnca{nomabr6}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomabr6', array (
  'size' => 20,
  'control_name' => 'fcdefnca[nomabr6]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<?php tabPageOpenClose("tp1", "tabPage7", 'Nivel 7');?>
<div class="form-row">
  <?php echo label_for('fcdefnca[nomext7]', __($labels['fcdefnca{nomext7}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomext7}')): ?> form-error<?php endif; ?>">  </div>
  <?php if ($sf_request->hasError('fcdefnca{nomext7}')): ?>
    <?php echo form_error('fcdefnca{nomext7}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomext7', array (
  'size' => 60,
  'control_name' => 'fcdefnca[nomext7]',
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;&nbsp;&nbsp;&nbsp;   
<strong>Tamaño</strong>
&nbsp;
<?php echo select_tag('fcdefnca[tamano7]', options_for_select($tamano,$fcdefnca->getTamano7())) ?>  
</div>

<div class="form-row">
  <?php echo label_for('fcdefnca[nomabr7]', __($labels['fcdefnca{nomabr7}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomabr7}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcdefnca{nomabr7}')): ?>
    <?php echo form_error('fcdefnca{nomabr7}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomabr7', array (
  'size' => 20,
  'control_name' => 'fcdefnca[nomabr7]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<?php tabPageOpenClose("tp1", "tabPage8", 'Nivel 8');?>
<div class="form-row">
  <?php echo label_for('fcdefnca[nomext8]', __($labels['fcdefnca{nomext8}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomext8}')): ?> form-error<?php endif; ?>"></div>
  <?php if ($sf_request->hasError('fcdefnca{nomext8}')): ?>
    <?php echo form_error('fcdefnca{nomext8}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomext8', array (
  'size' => 60,
  'control_name' => 'fcdefnca[nomext8]',
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;&nbsp;&nbsp;&nbsp;   
<strong>Tamaño</strong>
&nbsp;
<?php echo select_tag('fcdefnca[tamano8]', options_for_select($tamano,$fcdefnca->getTamano8())) ?>    
</div>

<div class="form-row">
  <?php echo label_for('fcdefnca[nomabr8]', __($labels['fcdefnca{nomabr8}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomabr8}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcdefnca{nomabr8}')): ?>
    <?php echo form_error('fcdefnca{nomabr8}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomabr8', array (
  'size' => 20,
  'control_name' => 'fcdefnca[nomabr8]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<?php tabPageOpenClose("tp1", "tabPage9", 'Nivel 9');?>
<div class="form-row">
  <?php echo label_for('fcdefnca[nomext9]', __($labels['fcdefnca{nomext9}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomext9}')): ?> form-error<?php endif; ?>"></div>
  <?php if ($sf_request->hasError('fcdefnca{nomext9}')): ?>
    <?php echo form_error('fcdefnca{nomext9}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomext9', array (
  'size' => 60,
  'control_name' => 'fcdefnca[nomext9]',
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;&nbsp;&nbsp;&nbsp;   
<strong>Tamaño</strong>
&nbsp;
<?php echo select_tag('fcdefnca[tamano9]', options_for_select($tamano,$fcdefnca->getTamano9())) ?>
</div>

<div class="form-row">
  <?php echo label_for('fcdefnca[nomabr9]', __($labels['fcdefnca{nomabr9}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomabr9}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcdefnca{nomabr9}')): ?>
    <?php echo form_error('fcdefnca{nomabr9}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomabr9', array (
  'size' => 20,
  'control_name' => 'fcdefnca[nomabr9]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<?php tabPageOpenClose("tp1", "tabPage10", 'Nivel 10');?>
<div class="form-row">
  <?php echo label_for('fcdefnca[nomext10]', __($labels['fcdefnca{nomext10}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomext10}')): ?> form-error<?php endif; ?>"></div>
  <?php if ($sf_request->hasError('fcdefnca{nomext10}')): ?>
    <?php echo form_error('fcdefnca{nomext10}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomext10', array (
  'size' => 60,
  'control_name' => 'fcdefnca[nomext10]',
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;&nbsp;&nbsp;&nbsp;   
<strong>Tamaño</strong>
&nbsp;
<?php echo select_tag('fcdefnca[tamano10]', options_for_select($tamano,$fcdefnca->getTamano10())) ?>
</div>

<div class="form-row">
  <?php echo label_for('fcdefnca[nomabr10]', __($labels['fcdefnca{nomabr10}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fcdefnca{nomabr10}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fcdefnca{nomabr10}')): ?>
    <?php echo form_error('fcdefnca{nomabr10}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fcdefnca, 'getNomabr10', array (
  'size' => 20,
  'control_name' => 'fcdefnca[nomabr10]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<?php tabInit();?>


<?php include_partial('edit_actions', array('fcdefnca' => $fcdefnca)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($fcdefnca->getId()): ?>
<?php echo button_to(__('delete'), 'faccodcatfis/delete?id='.$fcdefnca->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
