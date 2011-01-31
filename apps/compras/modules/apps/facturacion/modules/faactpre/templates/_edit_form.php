<?php
// auto-generated by PropelCidesa
// date: 2008/12/16 08:58:08
?>
<?php echo form_tag('faactpre/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php use_helper('Javascript','PopUp','Grid','Date','tabs') ?>
<?php echo javascript_include_tag('dFilter','ajax','tools','observe') ?>

<?php echo object_input_hidden_tag($faartpvp, 'getId') ?>


<?php tabMainJS("tp1","tabPane1", "tabPage1", 'Datos de la Actualización');?>
<fieldset id="sf_fieldset_none" class="">

<div class="form-row" id="divNONE">
<div id="divartdes">
  <?php echo label_for('faartpvp[artdesde]', __($labels['faartpvp{artdesde}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('faartpvp{artdesde}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('faartpvp{artdesde}')): ?>
    <?php echo form_error('faartpvp{artdesde}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php  $value = object_input_tag($faartpvp, 'getArtdesde', array (
  'size' => 15,
  'control_name' => 'faartpvp[artdesde]',
  'maxlength' => $longitud,
  'onKeyDown' => "javascript:return dFilter (event.keyCode, this,'$mascaraarticulo')",
      'onBlur'=> remote_function(array(
   	  'update'   => 'grid',
   	  'script'   => true,
      'url'      => 'faactpre/ajax',
      'complete' => 'AjaxJSON(request, json)',
        'condition' => "$('faartpvp_artdesde').value != ''",
      'with' => "'ajax=1&cajtexmos=faartpvp_desartdesde&codigo='+this.value+'&cajtexcom=faartpvp_artdesde&artdesde='+document.getElementById('faartpvp_artdesde').value+'&arthasta='+document.getElementById('faartpvp_arthasta').value",
        ))
)); echo $value ? $value : '&nbsp;'?>

<?php echo button_to_popup('...',cross_app_link_to('herramientas','catalogo')."/metodo/Caregart_Alminvfis/clase/Caregart/frame/sf_admin_edit_form/obj1/faartpvp_artdesde/obj2/faartpvp_desartdesde/campo1/codart/campo2/desart/param1/".$longitud)?>

  <?php $value = object_input_tag($faartpvp, 'getDesartdesde', array (
  'disabled' => true,
  'control_name' => 'faartpvp[desartdesde]',
  'size' => 70,
)); echo $value ? $value : '&nbsp;' ?>
   </div>
</div>
<br/>
<div id="divarthas">
  <?php echo label_for('faartpvp[arthasta]', __($labels['faartpvp{arthasta}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('faartpvp{arthasta}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('faartpvp{arthasta}')): ?>
    <?php echo form_error('faartpvp{arthasta}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

<?php $value = object_input_tag($faartpvp, 'getArthasta', array (
  'size' => 15,
  'control_name' => 'faartpvp[arthasta]',
  'maxlength' => $longitud,
  'onKeyDown' => "javascript:return dFilter (event.keyCode, this,'$mascaraarticulo')",
      'onBlur'=> remote_function(array(
   	  'update'   => 'grid',
   	  'script'   => true,
      'url'      => 'faactpre/ajax',
      'complete' => 'AjaxJSON(request, json)',
      'condition' => "$('faartpvp_arthasta').value != ''",
      'with' => "'ajax=1&cajtexmos=faartpvp_desarthasta&codigo='+this.value+'&cajtexcom=faartpvp_arthasta&artdesde='+document.getElementById('faartpvp_artdesde').value+'&arthasta='+document.getElementById('faartpvp_arthasta').value",
        ))
)); echo $value ? $value : '&nbsp;' ?>

<?php echo button_to_popup('...',cross_app_link_to('herramientas','catalogo')."/metodo/Caregart_Alminvfis/clase/Caregart/frame/sf_admin_edit_form/obj1/faartpvp_arthasta/obj2/faartpvp_desarthasta/campo1/codart/campo2/desart/param1/".$longitud)?>

  <?php $value = object_input_tag($faartpvp, 'getDesarthasta', array (
  'disabled' => true,
  'control_name' => 'faartpvp[desarthasta]',
  'size' => 70,
)); echo $value ? $value : '&nbsp;' ?>

    </div>
</div>
<br/>
<table>
 <tr>
 <th>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 </th>
 <th><fieldset id="sf_fieldset_none" class="">
    <legend><strong><?php echo  __('Tipo de Actualización :') ?></strong></legend>
    <div class="form-row">
    <?
      echo radiobutton_tag('faartpvp[tipo]','P', true) .'&nbsp;&nbsp;'. "Puntual"."<br>";
      echo radiobutton_tag('faartpvp[tipo]','U', false) .'&nbsp;&nbsp;'. "Porcentual"."<br>";
    ?>
 </div> </fieldset></th>
 <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
 <th><fieldset id="sf_fieldset_none" class="">
    <legend><strong><?php echo  __('Precio :') ?></strong></legend>
    <div class="form-row">
    <?
      echo radiobutton_tag('faartpvp[precio]','A', true) .'&nbsp;&nbsp;'. "Aumenta"."<br>";
      echo radiobutton_tag('faartpvp[precio]','D', false) .'&nbsp;&nbsp;'. "Disminuye"."<br>";
    ?>
  </div> </fieldset></th>
 </tr>
 </table>

<br>
<div id="divmonaum">
  <?php echo label_for('faartpvp[monaum]', __($labels['faartpvp{monaum}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('faartpvp{monaum}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('faartpvp{monaum}')): ?>
    <?php echo form_error('faartpvp{monaum}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($faartpvp, array('getMonaum',true), array (
  'size' => 15,
  'control_name' => 'faartpvp[monaum]',
  'onBlur' => "javascript:event.keyCode=13;return entermontootro(event, this.id)",
)); echo $value ? $value : '&nbsp;' ?>

    </div>
</div>
<br/>
</div>
</fieldset>

<?php tabPageOpenClose("tp1", "tabPage2", 'Artículos seleccionados');?>
<div id="grid">
<?php echo grid_tag($obj);?>
</div>


<?php tabInit();?>
<?php include_partial('edit_actions', array('faartpvp' => $faartpvp)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($faartpvp->getId()): ?>
<?php echo button_to(__('delete'), 'faactpre/delete?id='.$faartpvp->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>

