<?php
// auto-generated by PropelCidesa
// date: 2008/12/11 00:37:27
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Definición de Artículos',
array()) ?></h1>


<div id="sf_admin_header">
<?php include_partial('fadefart/edit_header', array('facorrelat' => $facorrelat)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('fadefart/edit_messages', array('facorrelat' => $facorrelat, 'labels' => $labels)) ?>
<?php include_partial('fadefart/edit_form', array('facorrelat' => $facorrelat, 'labels' => $labels, 'esta' => $esta, 'esta1' => $esta1, 'esta2' => $esta2, 'obj' => $obj, 'longpre' => $longpre, 'longcon'=> $longcon, 'mascarapresupuestaria' => $mascarapresupuestaria, 'mascaracontabilidad' => $mascaracontabilidad)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('fadefart/edit_footer', array('facorrelat' => $facorrelat)) ?>
</div>

</div>
