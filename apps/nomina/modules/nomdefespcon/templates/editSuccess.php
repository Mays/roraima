<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/22 10:46:45
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Edicion de Conceptos', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('nomdefespcon/edit_header', array('npdefcpt' => $npdefcpt)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('nomdefespcon/edit_messages', array('npdefcpt' => $npdefcpt, 'labels' => $labels)) ?>
<?php include_partial('nomdefespcon/edit_form', array('npdefcpt' => $npdefcpt, 'labels' => $labels, 'nompar' => $nompar)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('nomdefespcon/edit_footer', array('npdefcpt' => $npdefcpt)) ?>
</div>

</div>
