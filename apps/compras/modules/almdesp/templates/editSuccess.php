<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/16 11:39:26
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date', 'Grid', 'SubmitClick', 'tabs', 'Javascript', 'PopUp') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Edición de Despachos', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('almdesp/edit_header', array('cadphart' => $cadphart)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('almdesp/edit_messages', array('cadphart' => $cadphart, 'labels' => $labels)) ?>
<?php include_partial('almdesp/edit_form', array('cadphart' => $cadphart, 'obj' => $obj, 'mascarapartida' => $mascarapartida, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('almdesp/edit_footer', array('cadphart' => $cadphart)) ?>
</div>

</div>
