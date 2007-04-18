<?php
// auto-generated by sfPropelAdmin
// date: 2007/04/12 17:28:28
?>
<?php use_helper('Object') ?>
<?php use_helper('Javascript') ?>
<?php echo javascript_include_tag('dFilter') ?>

<div class="sf_admin_filters">
<?php echo form_tag('almregart/list', array('method' => 'get')) ?>

  <fieldset>
    <h2><?php echo __('filters') ?></h2>
    <div class="form-row">
    <label for="codart"><?php echo __('Codigo del Articulo:') ?></label>
    <div class="content">
    <?php echo input_tag('filters[codart]', isset($filters['codart']) ? str_pad($filters['codart'], 20 , ' '): null, array (
  'size' => 15,
  'onKeyDown' => "javascript:return dFilter (event.keyCode, this,'$mascaraarticulo')",  
)) ?>
    </div>
    </div>

      </fieldset>

  <ul class="sf_admin_actions">
    <li><?php echo button_to(__('reset'), 'almregart/list?filter=filter', 'class=sf_admin_action_reset_filter') ?></li>
    <li><?php echo submit_tag(__('filter'), 'name=filter class=sf_admin_action_filter') ?></li>
  </ul>

</form>
</div>
