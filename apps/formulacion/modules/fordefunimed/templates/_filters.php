<?php
/**
 * Funciones de la vista.
 *
 * @package    Roraima
 * @subpackage vistas
 * @author     $Author:lhernandez $ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id:_filters.php 32813 2009-09-08 16:19:47Z lhernandez $
 */
// date: 2007/06/18 12:05:55
?>
<?php use_helper('Object', 'Javascript') ?>
<?php echo javascript_include_tag('tools') ?>

<div class="sf_admin_filters">
<?php echo form_tag('fordefunimed/list', array('method' => 'get')) ?>

  <fieldset>
    <h2><?php echo __('filters') ?></h2>
    <div class="form-row">
    <label for="codunimed"><?php echo __('Código') ?></label>
    <div class="content">
    <?php echo input_tag('filters[codunimed]', isset($filters['codunimed']) ? $filters['codunimed'] : null, array (
  'size' => 3,
  'maxlength' => 3,
  'onBlur'  => "javascript: valor=this.value; valor=valor.pad(3, '0',0);document.getElementById('filters_codunimed').value=valor;",
)) ?>
    </div>
    </div>

      </fieldset>

  <ul class="sf_admin_actions">
    <li><?php echo button_to(__('reset'), 'fordefunimed/list?filter=filter', 'class=sf_admin_action_reset_filter') ?></li>
    <li><?php echo submit_tag(__('filter'), 'name=filter class=sf_admin_action_filter') ?></li>
  </ul>

</form>
</div>
