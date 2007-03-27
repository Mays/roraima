<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/26 15:54:53
?>
<?php echo form_tag('nomfalperper/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($nphojint, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('nphojint[codemp]', __($labels['nphojint{codemp}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('nphojint{codemp}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('nphojint{codemp}')): ?>
    <?php echo form_error('nphojint{codemp}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($nphojint, 'getCodemp', array (
  'size' => 20,
  'control_name' => 'nphojint[codemp]',
  'disabled' => 'true',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('nphojint[nomemp]', __($labels['nphojint{nomemp}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('nphojint{nomemp}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('nphojint{nomemp}')): ?>
    <?php echo form_error('nphojint{nomemp}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($nphojint, 'getNomemp', array (
  'size' => 80,
  'control_name' => 'nphojint[nomemp]',
  'disabled' => 'true',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<!-- Modifique estas variables y luego coloque las columnas y registros que desee -->
<?php $tituloTabla = __('Datos del Permiso'); ?>
<?php $pagerTabla = $pagerNpfalper; ?>
<?php $modulo = $sf_context->getModuleName(); ?>
<?php $accion = 'edit'; ?>

<fieldset>
<legend><?php echo $tituloTabla; ?></legend>
<table border="0" class="sf_admin_list">
<thead>
	<tr>
		<!-- Nombre de las Columnas -->
	    <th><?php echo NpfalperPeer::getColumName(NpfalperPeer::FECDES ) ?></th>
	    <th><?php echo NpfalperPeer::getColumName(NpfalperPeer::FECHAS )  ?></th>
	    <th><?php echo NpfalperPeer::getColumName(NpfalperPeer::CODMOT )  ?></th>
	    <th><?php echo NpfalperPeer::getColumName(NpmotfalPeer::DESMOTFAL )  ?></th>
	</tr>
</thead>
<tbody>
	<?php $i = 1; foreach ($pagerTabla->getResults() as $registro): $odd = fmod(++$i, 2) ?>
	<tr class="sf_admin_row_<?php echo $odd ?>">
		<!-- Registros de la tabla -->
	    <td><?php echo $registro->getFecdes()  ?></td>
	    <td><?php echo $registro->getFechas() ?></td>
	    <td><?php echo $registro->getCodmot() ?></td>
	    <td><?php echo $registro->getDesmotfal() ?></td>
	</tr>
	<?php endforeach; ?>	
</tbody>

<tfoot>
<tr><th colspan="5">
<div class="float-right">
<?php if ($pagerTabla->haveToPaginate()): ?>
  <?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/first.png', array('align' => 'absmiddle', 'alt' => __('First'), 'title' => __('First'))), $modulo.'/'.$accion.'?page=1') ?>
  <?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/previous.png', array('align' => 'absmiddle', 'alt' => __('Previous'), 'title' => __('Previous'))), $modulo.'/'.$accion.'?page='.$pagerTabla->getPreviousPage()) ?>

  <?php foreach ($pagerTabla->getLinks() as $page): ?>
    <?php echo link_to_unless($page == $pagerTabla->getPage(), $page, $modulo.'/list?page='.$page) ?>
  <?php endforeach; ?>

	<?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/next.png', array('align' => 'absmiddle', 'alt' => __('Next'), 'title' => __('Next'))), $modulo.'/'.$accion.'?page='.$pagerTabla->getNextPage()) ?>
	<?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/last.png', array('align' => 'absmiddle', 'alt' => __('Last'), 'title' => __('Last'))), $modulo.'/'.$accion.'?page='.$pagerTabla->getLastPage()) ?>
<?php endif; ?>
</div>
<?php echo format_number_choice('[0] '.__('no result').'|[1] 1 '.__('result').'|(1,+Inf] %1% '.__('results'), array('%1%' => $pagerTabla->getNbResults()), $pagerTabla->getNbResults()) ?>
</th></tr>
</tfoot>

</table>
</fieldset>


<?php include_partial('edit_actions', array('nphojint' => $nphojint)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($nphojint->getId()): ?>
<?php //echo button_to(__('delete'), 'nomfalperper/delete?id='.$nphojint->getId(), array (
  //'post' => true,
  //'confirm' => __('Are you sure?'),
  //'class' => 'sf_admin_action_delete',
//)) ?><?php endif; ?>
</li>
  </ul>
