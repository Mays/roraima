<?php
// auto-generated by PropelCidesa
// date: 2009/11/20 15:44:27
?>
<?php

/**
 *
 * @package    Roraima
 * @subpackage vistas
 
 * @author     $Author: lhernandez $ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id: editSuccess.php 32815 2009-09-08 16:52:04Z lhernandez $
 * @copyright  Copyright 2007, Cide S.A.
 *
 */
 ?>

<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date', 'Catalogo') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Tablas a Limpiar', 
array()) ?></h1>


<div id="sf_admin_header">
<?php include_partial('asigtabdel/edit_header', array('apernueper' => $apernueper, 'labels' => $labels, 'params' => $params)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('asigtabdel/edit_messages', array('apernueper' => $apernueper, 'labels' => $labels, 'params' => $params)) ?>
<?php include_partial('asigtabdel/edit_form', array('apernueper' => $apernueper, 'labels' => $labels, 'params' => $params)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('asigtabdel/edit_footer', array('apernueper' => $apernueper, 'labels' => $labels, 'params' => $params)) ?>
</div>

</div>

<?php echo javascript_tag("
  salvarsave=function()
	{	  
      f=document.sf_admin_edit_form;
	  ObjetosSelectMultiple(f.apernueper_nomtab_r);
	  f.action=location.pathname;
      f.submit();
	}


") ?>