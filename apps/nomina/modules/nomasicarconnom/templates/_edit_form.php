<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/29 17:49:48
?>
<?php echo form_tag('nomasicarconnom/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($npasicaremp, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row"><?php echo label_for('npasicaremp[codemp]', __($labels['npasicaremp{codemp}']), 'class="required" ') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{codemp}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{codemp}')): ?> <?php echo form_error('npasicaremp{codemp}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($npasicaremp, 'getCodemp', array (
  'size' => 20,
  'control_name' => 'npasicaremp[codemp]',
  )); echo $value ? $value : '&nbsp;' ?> 
  &nbsp; <?php echo button_to('...','#')?></div>
<br>
<?php echo label_for('npasicaremp[nomemp]', __($labels['npasicaremp{nomemp}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{nomemp}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{nomemp}')): ?> <?php echo form_error('npasicaremp{nomemp}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($npasicaremp, 'getNomemp', array (
  'size' => 80,
  'control_name' => 'npasicaremp[nomemp]',
)); echo $value ? $value : '&nbsp;' ?></div>
</div>

<div class="form-row"><?php echo label_for('npasicaremp[codnom]', __($labels['npasicaremp{codnom}']), 'class="required" ') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{codnom}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{codnom}')): ?> <?php echo form_error('npasicaremp{codnom}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($npasicaremp, 'getCodnom', array (
  'size' => 20,
  'control_name' => 'npasicaremp[codnom]',
  'maxlength' => 3,
  )); echo $value ? $value : '&nbsp;' ?> 
  &nbsp; <?php echo button_to('...','#')?>
	</div>
<br>
	<?php echo label_for('npasicaremp[nomnom]', __($labels['npasicaremp{nomnom}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{nomnom}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{nomnom}')): ?> <?php echo form_error('npasicaremp{nomnom}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($npasicaremp, 'getNomnom', array (
  'size' => 80,
  'control_name' => 'npasicaremp[nomnom]',
)); echo $value ? $value : '&nbsp;' ?></div>
</div>

<div class="form-row"><?php echo label_for('npasicaremp[codcar]', __($labels['npasicaremp{codcar}']), 'class="required" ') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{codcar}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{codcar}')): ?> <?php echo form_error('npasicaremp{codcar}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($npasicaremp, 'getCodcar', array (
  'size' => 20,
  'control_name' => 'npasicaremp[codcar]',
  )); echo $value ? $value : '&nbsp;' ?> 
  &nbsp; <?php echo button_to('...','#')?>
</div>
<br>
<?php echo label_for('npasicaremp[nomcar]', __($labels['npasicaremp{nomcar}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{nomcar}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{nomcar}')): ?> <?php echo form_error('npasicaremp{nomcar}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($npasicaremp, 'getNomcar', array (
  'size' => 80,
  'control_name' => 'npasicaremp[nomcar]',
)); echo $value ? $value : '&nbsp;' ?></div>
</div>

<div class="form-row"><?php echo label_for('npasicaremp[paso]', __($labels['npasicaremp{paso}']),  'class="required" ') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{paso}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{paso}')): ?> <?php echo form_error('npasicaremp{paso}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($npasicaremp, 'getPaso', array (
  'size' => 20,
  'control_name' => 'npasicaremp[paso]',
  'maxlength' => 3,
  )); echo $value ? $value : '&nbsp;' ?> 
  &nbsp; <?php echo button_to('...','#')?>
	</div>
<br>
<?php echo label_for('npasicaremp[despaso]', __($labels['npasicaremp{despaso}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{despaso}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{despaso}')): ?> <?php echo form_error('npasicaremp{despaso}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($npasicaremp, 'getDespaso', array (
  'disabled' => true,
  'control_name' => 'npasicaremp[despaso]',
)); echo $value ? $value : '&nbsp;' ?></div>
</div>

<div class="form-row"><?php echo label_for('npasicaremp[fecasi]', __($labels['npasicaremp{fecasi}']), 'class="required" ') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{fecasi}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{fecasi}')): ?> <?php echo form_error('npasicaremp{fecasi}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_date_tag($npasicaremp, 'getFecasi', array (
  'rich' => true,
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'npasicaremp[fecasi]',
  'date_format' => 'dd/MM/yyyy',
)); echo $value ? $value : '&nbsp;' ?></div>
</div>

<div class="form-row"><?php echo label_for('npasicaremp[codtipgas]', __($labels['npasicaremp{codtipgas}']),  'class="required" ') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{codtipgas}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{codtipgas}')): ?> <?php echo form_error('npasicaremp{codtipgas}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($npasicaremp, 'getCodtipgas', array (
  'size' => 20,
  'control_name' => 'npasicaremp[codtipgas]',
  'maxlength' => 3,
  )); echo $value ? $value : '&nbsp;' ?> 
  &nbsp; <?php echo button_to('...','#')?>
</div>
<br><?php echo label_for('npasicaremp[destipgas]', __($labels['npasicaremp{destipgas}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('npasicaremp{destipgas}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('npasicaremp{destipgas}')): ?> <?php echo form_error('npasicaremp{destipgas}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($npasicaremp, 'getDestipgas', array (
  'disabled' => true,
  'control_name' => 'npasicaremp[destipgas]',
)); echo $value ? $value : '&nbsp;' ?></div>
</div>
<div class="form-row">
<div id="grid01" class="grid01">
<table border="0" class="sf_admin_list" whith="100%">
<?php $nombre=array(0 => 'Codigo', 1 => 'Nombre del Concepto',2 => 'F. Inicio', 3 => 'F. Expiracion', 4 => 'Cant.', 5=> 'Monto', 6 => 'Frecuencia', 7 => 'Activo'); ?>
<? if ( count($rs)>0){
	$i=0;
	foreach ($rs as $k=>$fila) {
		$i++;
		if($i==1){?>
	<thead>
		<tr>
		<? foreach ($fila as $key => $value){?>
			<th><?=$nombre[$key]?></th>
			<? }?>
		</tr>
	</thead>
	<? }?>
	<tr>
	<? foreach ($fila as $key => $value){?>
		<td><?=$value?></td>
		<? }?>
	</tr>
	<? }
}
?>
</table>
</div>
</div>
</fieldset>


<?php include_partial('edit_actions', array('npasicaremp' => $npasicaremp)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($npasicaremp->getId()): ?>
<?php echo button_to(__('delete'), 'nomasicarconnom/delete?id='.$npasicaremp->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
