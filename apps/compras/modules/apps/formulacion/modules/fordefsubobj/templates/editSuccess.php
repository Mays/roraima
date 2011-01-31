<?php
// auto-generated by sfPropelAdmin
// date: 2010/09/06 12:06:01
?>
<?php

/**
 *
 * @package    Roraima
 * @subpackage autoFordefsubobj 
 * @author     $Author: lhernandez $ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id: editSuccess.php 32371 2009-09-01 16:06:59Z lhernandez $
 * @copyright  Copyright 2007, Cidesa C.A.
 *
 */
 ?>

<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1>
<?php if ($etiqueta!="") { ?>
<?php echo __('EdiciÃ³n de '.$etiqueta,
array()) ?>
<?php }else  { ?>
<?php echo __('EdiciÃ³n de Estrategias',
array()) ?>
<?php } ?>
</h1>

<div id="sf_admin_header">
<?php include_partial('fordefsubobj/edit_header', array('fordefsubobj' => $fordefsubobj)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('fordefsubobj/edit_messages', array('fordefsubobj' => $fordefsubobj, 'labels' => $labels)) ?>
<?php include_partial('fordefsubobj/edit_form', array('fordefsubobj' => $fordefsubobj, 'etiqueta' => $etiqueta, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('fordefsubobj/edit_footer', array('fordefsubobj' => $fordefsubobj)) ?>
</div>

</div>