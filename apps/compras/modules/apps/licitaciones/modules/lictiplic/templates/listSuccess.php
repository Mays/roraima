<?php
// auto-generated by PropelCidesa
// date: 2010/11/23 10:41:42
?>
<?php

/**
 *
 * @package    Roraima
 * @subpackage vistas
 
 * @author     $Author: lhernandez $ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id: listSuccess.php 32815 2009-09-08 16:52:04Z lhernandez $
 * @copyright  Copyright 2007, Cide S.A.
 *
 */
 ?>

<?php use_helper('I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php
$manmodcontra=H::getConfAppGen('manmodcontra');
if ($manmodcontra=='S')
{
echo __('Tipos de ContrataciÃ³n',
array());
}else {
echo __('Tipos de LicitaciÃ³n', 
array()); } ?></h1>

<div id="sf_admin_header">
<?php include_partial('lictiplic/list_header', array('pager' => $pager)) ?>
<?php include_partial('lictiplic/list_messages', array('pager' => $pager)) ?>
</div>

<div id="sf_admin_bar">
<?php include_partial('filters', array('filters' => $filters)) ?>
</div>

<div id="sf_admin_content">
<?php if (!$pager->getNbResults()): ?>
<?php echo __('no result') ?>
<?php else: ?>
<?php include_partial('lictiplic/list', array('pager' => $pager)) ?>
<?php endif; ?>
<?php include_partial('list_actions') ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('lictiplic/list_footer', array('pager' => $pager)) ?>
</div>

</div>