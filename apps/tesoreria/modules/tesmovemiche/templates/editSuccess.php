<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/16 16:51:27
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Edicion Emision de Cheques', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('tesmovemiche/edit_header', array('tscheemi' => $tscheemi)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('tesmovemiche/edit_messages', array('tscheemi' => $tscheemi, 'labels' => $labels)) ?>
<?php include_partial('tesmovemiche/edit_form', array('tscheemi' => $tscheemi, 'nomcue' => $nomcue, 'nomtipmov' => $nomtipmov, 'nombenefi' => $nombenefi, 'detpag' => $detpag, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('tesmovemiche/edit_footer', array('tscheemi' => $tscheemi)) ?>
</div>

</div>
