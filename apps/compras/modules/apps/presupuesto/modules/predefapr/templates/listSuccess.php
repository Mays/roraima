<?php
// auto-generated by PropelCidesa
// date: 2008/07/30 10:51:01
?>
<?php use_helper('I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Definición de Aprobación',
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('predefapr/list_header', array('pager' => $pager)) ?>
<?php include_partial('predefapr/list_messages', array('pager' => $pager)) ?>
</div>

<div id="sf_admin_bar">
</div>

<div id="sf_admin_content">
<?php if (!$pager->getNbResults()): ?>
<?php echo __('no result') ?>
<?php include_partial('list_actions') ?>
<?php else: ?>
<?php include_partial('predefapr/list', array('pager' => $pager)) ?>
<?php endif; ?>

</div>

<div id="sf_admin_footer">
<?php include_partial('predefapr/list_footer', array('pager' => $pager)) ?>
</div>

</div>