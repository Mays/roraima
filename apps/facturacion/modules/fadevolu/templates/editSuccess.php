<?php
// auto-generated by PropelCidesa
// date: 2009/02/04 16:46:40
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Devoluciones',
array()) ?></h1>


<div id="sf_admin_header">
<?php include_partial('fadevolu/edit_header', array('fadevolu' => $fadevolu, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('fadevolu/edit_messages', array('fadevolu' => $fadevolu, 'labels' => $labels)) ?>
<?php include_partial('fadevolu/edit_form', array('fadevolu' => $fadevolu, 'labels' => $labels, 'obj' => $obj)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('fadevolu/edit_footer', array('fadevolu' => $fadevolu, 'labels' => $labels)) ?>
</div>

</div>
