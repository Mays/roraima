<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/29 16:36:25
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Asignacion de Cargos y Conceptos a Empleados', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('nomasicarconnom/edit_header', array('npasicaremp' => $npasicaremp)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('nomasicarconnom/edit_messages', array('npasicaremp' => $npasicaremp, 'labels' => $labels)) ?>
<?php include_partial('nomasicarconnom/edit_form', array('npasicaremp' => $npasicaremp, 'labels' => $labels, 'rs' => $rs)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('nomasicarconnom/edit_footer', array('npasicaremp' => $npasicaremp)) ?>
</div>

</div>
