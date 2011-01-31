<?php
/**
 * Funciones de la vista.
 *
 * @package    Roraima
 * @subpackage vistas
 * @author     $Author$ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id$
 */
// date: 2007/05/10 12:00:07
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date', 'tabs', 'PopUp', 'Grid', 'SubmitClick') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Registro de Convenios de Pagos', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('facconvenio/edit_header', array('fcconpag' => $fcconpag)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('facconvenio/edit_messages', array('fcconpag' => $fcconpag, 'labels' => $labels)) ?>
<?php include_partial('facconvenio/edit_form', array('fcconpag' => $fcconpag, 'obj' => $obj, 'obj2' => $obj2, 'obj3' => $obj3, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('facconvenio/edit_footer', array('fcconpag' => $fcconpag)) ?>
</div>

</div>
