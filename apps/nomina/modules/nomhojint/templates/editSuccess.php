<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/22 16:50:23
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Edicion de Datos Personales', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('nomhojint/edit_header', array('nphojint' => $nphojint)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('nomhojint/edit_messages', array('nphojint' => $nphojint, 'labels' => $labels)) ?>
<?php include_partial('nomhojint/edit_form', array('nphojint' => $nphojint, 'rs' => $rs, 'listaestadocivil' => $listaestadocivil, 'listaestatus' => $listaestatus, 'grupol' => $grupol,'dentro' => $dentro, 'curricular' => $curricular, 'familiar' => $familiar, 'listaformapago' => $listaformapago, 'listatipocuenta' => $listatipocuenta, 'fuera' => $fuera, 'listatalla' => $listatalla, 'listagruposanguineo' => $listagruposanguineo, 'bancos' => $bancos, 'listaformatraslado' => $listaformatraslado, 'listatipovivienda' => $listatipovivienda, 'listaformatenencia' => $listaformatenencia, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('nomhojint/edit_footer', array('nphojint' => $nphojint)) ?>
</div>

</div>
