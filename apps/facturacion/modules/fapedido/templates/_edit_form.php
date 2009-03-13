<?php
// auto-generated by PropelCidesa
// date: 2008/11/18 11:42:17
?>
<?php echo form_tag('fapedido/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php use_helper('Catalogo', 'Grid')?>
<?php echo javascript_include_tag('dFilter', 'ajax', 'facturacion/facturas', 'tools') ?>

<?php echo object_input_hidden_tag($fapedido, 'getId') ?>
<?php echo input_hidden_tag('fapedido[reapor]', $fapedido->getReapor()) ?>
<?php echo input_hidden_tag('fapedido[codcli]', $fapedido->getCodcli()) ?>
<?php echo input_hidden_tag('fapedido[entrega]', $fapedido->getEntrega()) ?>
<table width="100%">
  <tr>
    <th><strong><font color="<? print $color;?>" size="2" face="Verdana, Arial, Helvetica, sans-serif"> <? print $fapedido->getEstatus();?></font></strong></th>
  </tr>
</table>

<h2 class="h2" onclick="javascript: return $('divDatos del Pedido').toggle();"><?php echo __('Datos del Pedido') ?></h2>
<fieldset id="sf_fieldset_datos_del_pedido" class="">

<div class="form-row" id="divDatos del Pedido">

<table>
  <tr>
    <th>
		<div id="divnroped">
		  <?php echo label_for('fapedido[nroped]', __($labels['fapedido{nroped}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fapedido{nroped}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fapedido{nroped}')): ?>
		    <?php echo form_error('fapedido{nroped}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fapedido, 'getNroped', array (
		  'size' => 20,
		  'maxlength' => 8,
		  'readonly'  =>  $fapedido->getId()!='' ? true : false ,
		  'onKeyPress' => "javascript:if (event.keyCode==13 || event.keyCode==9){document.getElementById('fapedido_fecped').focus();}",
		  'onBlur'  => "javascript:event.keyCode=13; enter(event,this.value);",
		  'control_name' => 'fapedido[nroped]',
		)); echo $value ? $value : '&nbsp;' ?>
		    </div>
		</div>
	</th>
    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th>
		<div id="divfecped">
		  <?php echo label_for('fapedido[fecped]', __($labels['fapedido{fecped}' ]), 'class="required" Style="text-align:left; width:100px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fapedido{fecped}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fapedido{fecped}')): ?>
		    <?php echo form_error('fapedido{fecped}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_date_tag($fapedido, 'getFecped', array (
		  'rich' => true,
		  'readonly'  =>  $fapedido->getId()!='' ? true : false ,
		  'calendar_button_img' => '/sf/sf_admin/images/date.png',
		  'control_name' => 'fapedido[fecped]',
		  'date_format' => 'dd/MM/yyyy',
		  'onkeyup' => "javascript: mascara(this,'/',patron,true)",
		),date('Y-m-d')); echo $value ? $value : '&nbsp;' ?>
		    </div>
		</div>
	</th>
  </tr>
</table>

<br/>

<table>
  <tr>
    <th>
		<div id="divtipref">
		  <?php echo label_for('fapedido[tipref]', __($labels['fapedido{tipref}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fapedido{tipref}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fapedido{tipref}')): ?>
		    <?php echo form_error('fapedido{tipref}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

           <?php echo select_tag('fapedido[tipref]', options_for_select(Constantes::ListaRefiere(),$fapedido->getTipref(),'include_custom=Seleccione Uno'),array(
             'onchange' => "habilitarefere(this.id)",
	       )) ?>

		    </div>
		</div>
    </th>
    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th>
		<div id="divrefped">
		  <?php echo label_for('fapedido[refped]', __($labels['fapedido{refped}' ]), 'class="required" Style="text-align:left; width:100px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fapedido{refped}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fapedido{refped}')): ?>
		    <?php echo form_error('fapedido{refped}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fapedido, 'getRefped', array (
		  'size' => 20,
		  'readonly' => true,
		  'control_name' => 'fapedido[refped]',
		  'onBlur'=> 'colocargrid(this.id);'
		)); echo $value ? $value : '&nbsp;' ?>
		&nbsp; 		&nbsp;		&nbsp;
		 <?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo').'/metodo/Fapresup_Fapedido/clase/Fapresup/frame/sf_admin_edit_form/obj1/fapedido_refped/campo1/refpre','','','botoncat')?>
		    </div>
		</div>
    </th>
  </tr>
</table>

<br/>

<table>
  <tr>
    <th>
		<div id="divrifpro">
		  <?php echo label_for('fapedido[rifpro]', __($labels['fapedido{rifpro}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fapedido{rifpro}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fapedido{rifpro}')): ?>
		    <?php echo form_error('fapedido{rifpro}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = get_partial('rifpro', array('type' => 'edit', 'fapedido' => $fapedido)); echo $value ? $value : '&nbsp;' ?>
		    </div>
		</div>
	</th>
  </tr>
</table>

<br/>

<table>
  <tr>
    <th>
		<div id="divtelcli">
		  <?php echo label_for('fapedido[telcli]', __($labels['fapedido{telcli}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fapedido{telcli}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fapedido{telcli}')): ?>
		    <?php echo form_error('fapedido{telcli}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fapedido, 'getTelcli', array (
		  'disabled' => true,
		  'control_name' => 'fapedido[telcli]',
		)); echo $value ? $value : '&nbsp;' ?>
		    </div>
		</div>
	</th>
    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th>
		<div id="divnitcli" style="display:none">
		  <?php echo label_for('fapedido[nitcli]', __($labels['fapedido{nitcli}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fapedido{nitcli}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fapedido{nitcli}')): ?>
		    <?php echo form_error('fapedido{nitcli}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fapedido, 'getNitcli', array (
		  'disabled' => true,
		  'control_name' => 'fapedido[nitcli]',
		)); echo $value ? $value : '&nbsp;' ?>
		    </div>
		</div>
    </th>
  </tr>
</table>

<br/>

<table>
  <tr>
    <th>
		<div id="divdircli">
		  <?php echo label_for('fapedido[dircli]', __($labels['fapedido{dircli}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fapedido{dircli}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fapedido{dircli}')): ?>
		    <?php echo form_error('fapedido{dircli}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fapedido, 'getDircli', array (
		  'disabled' => true,
		  'size' => 60,
		  'control_name' => 'fapedido[dircli]',
		)); echo $value ? $value : '&nbsp;' ?>
		    </div>
		</div>
	</th>
  </tr>
</table>

<br/>

<table>
  <tr>
    <th>
		<div id="divdesped">
		  <?php echo label_for('fapedido[desped]', __($labels['fapedido{desped}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fapedido{desped}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fapedido{desped}')): ?>
		    <?php echo form_error('fapedido{desped}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fapedido, 'getDesped', array (
		  'size' => 80,
		  'maxlength' => 250,
		  'control_name' => 'fapedido[desped]',
		)); echo $value ? $value : '&nbsp;' ?>
		    </div>
		</div>
	</th>
  </tr>
</table>

<br/>

<table>
  <tr>
    <th>
		<div id="divmonped">
		  <?php echo label_for('fapedido[monped]', __($labels['fapedido{monped}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fapedido{monped}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fapedido{monped}')): ?>
		    <?php echo form_error('fapedido{monped}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fapedido, array('getMonped',true), array (
		  'size' => 7,
		  'readonly' => true,
		  'onKeyPress' => 'return validaDecimal(event)',
		  'onBlur' => 'event.keyCode=13;return formatoDecimal(event,this.id)',
		  'control_name' => 'fapedido[monped]',
		)); echo $value ? $value : '&nbsp;' ?>
		    </div>
		</div>
	</th>
  </tr>
</table>

</div>
</fieldset>

<h2 class="h2" onclick="javascript: return $('divDetalle Pedido').toggle();"><?php echo __('Detalle Pedido') ?></h2>
<fieldset id="sf_fieldset_detalle_pedido" class="">

<div class="form-row" id="divDetalle Pedido">
<div id="combosl" style="display:none">
<?php echo label_for('fapedido[combo]', __($labels['fapedido{combo}' ]), 'class="required" Style="text-align:left; width:100px"') ?>
  <div class="content<?php if ($sf_request->hasError('fapedido{combo}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fapedido{combo}')): ?>
    <?php echo form_error('fapedido{combo}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php echo input_auto_complete_tag('fapedido[combo]', $fapedido->getCombo(),
    'fapedido/autocomplete?ajax=1',  array('autocomplete' => 'off','maxlength' => 6,
    'readonly'  =>  $fapedido->getId()!='' ? true : false ,
    'onBlur'=>'colocargrid2(this.id)'
    ),
     array('use_style' => 'true')
  )?>
&nbsp; 		&nbsp;		&nbsp;
 <?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo').'/metodo/Fadefcom_Fapedido/clase/Fadefcom/frame/sf_admin_edit_form/obj1/fapedido_combo/campo1/codcom','','','botoncat')?>
    </div>
<br>
</div>
<div id="divgrid">
  <?php echo label_for('fapedido[grid]', __($labels['fapedido{grid}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fapedido{grid}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fapedido{grid}')): ?>
    <?php echo form_error('fapedido{grid}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>
  <div id="articulos">
  <?php $value = get_partial('grid', array('type' => 'edit', 'fapedido' => $fapedido)); echo $value ? $value : '&nbsp;' ?>
  </div>
  <?php echo input_hidden_tag('fapedido[com]', $fapedido->getCom()) ?>
  <?php echo input_hidden_tag('fapedido[fil]', $fapedido->getFil()) ?>
    </div>
</div>
<br/>
</div>
</fieldset>
<h2 class="h2" onclick="javascript: return $('divFecha(s) de Entrega').toggle();"><?php echo __('Fecha(s) de Entrega') ?></h2>
<fieldset id="sf_fieldset_fecha_s__de_entrega" class="">

<div class="form-row" id="divFecha(s) de Entrega">
<div id="divgrid_fafecped">
  <?php echo label_for('fapedido[grid_fafecped]', __($labels['fapedido{grid_fafecped}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fapedido{grid_fafecped}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fapedido{grid_fafecped}')): ?>
    <?php echo form_error('fapedido{grid_fafecped}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('grid_fafecped', array('type' => 'edit', 'fapedido' => $fapedido)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>
<br/>
</div>
</fieldset>
<h2 class="h2" onclick="javascript: return $('divObservación').toggle();"><?php echo __('Observación') ?></h2>
<fieldset id="sf_fieldset_observaci__n" class="">

<div class="form-row" id="divObservación">
<div id="divobsped">
  <?php echo label_for('fapedido[obsped]', __($labels['fapedido{obsped}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fapedido{obsped}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fapedido{obsped}')): ?>
    <?php echo form_error('fapedido{obsped}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fapedido, 'getObsped', array (
  'size' => 80,
  'maxlength' => 250,
  'control_name' => 'fapedido[obsped]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>
<br/>
</div>
</fieldset>

<?php include_partial('edit_actions', array('fapedido' => $fapedido)) ?>

</form>

<ul class="sf_admin_actions">
<li class="float-rigth">
<?php if ($fapedido->getId() && (!$fapedido->getEntrega() && $fapedido->getStatus()!='N')) {?>
  <input type="button" name="Submit" value="Anular" class="sf_admin_action_delete" onclick="javascript:anular();" />
<?php }?>
</li>
<li class="float-rigth"><?php if ($fapedido->getId() && (!$fapedido->getEntrega()) && $fapedido->getStatus()!='N'): ?>
<?php echo button_to(__('delete'), 'fapedido/delete?id='.$fapedido->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>

<script language="JavaScript" type="text/javascript">
var neww='<?php echo $fapedido->getId()?>';
if (neww)
{
 $('trigger_fapedido_fecped').hide()
 $('fapedido_combo').readOnly=true;
 $$('.botoncat')[1].disabled=true;
}
 $$('.botoncat')[0].disabled=true;
 function enter(e,valor)
 {
   if (e.keyCode==13 || e.keyCode==9)
   {
     if (valor!='')
     { valor=valor.pad(8, '0',0);}

     $('fapedido_nroped').value=valor;
   }
 }

 function habilitarefere(id)
 {
 	var neww='<?php echo $fapedido->getId()?>';
 if ($(id).value!="" && neww=="")
 {
 	if ($(id).value=='PR')
 	{
      $('fapedido_refped').readOnly=false;
      $$('.botoncat')[0].disabled=false;
      $('fapedido_rifpro').readOnly=true;
      $$('.botoncat')[1].disabled=true;
      $('fapedido_combo').readOnly=true;
      $$('.botoncat')[2].disabled=true;
 	}
 	else
 	{
      $('fapedido_refped').readOnly=true;
      $$('.botoncat')[0].disabled=true;
      $('fapedido_rifpro').readOnly=false;
      $$('.botoncat')[1].disabled=false;
      $$('.botoncat')[2].disabled=false;
 	}
 }
 }

  function perderfocus(e,id,totcol)
 {
   var aux = id.split("_");
   var name=aux[0];
   var fil=parseInt(aux[1]);
   var col=parseInt(aux[2]);

   if (col!=totcol)
   {
    var colsig=col+1;
    var siguiente=name+"_"+fil+"_"+colsig;
   }
   else
   {
    var fila=fil+1;
   	var siguiente=name+"_"+fila+"_1";
   }

   if (e.keyCode==13 || e.keyCode==9)
   {
     if($(siguiente))
     {
      if (!$(siguiente).readOnly) $(siguiente).focus();
     }
   }
  }

  function anular()
  {
    var referencia=$('fapedido_nroped').value;
    var nroped=$('fapedido_nroped').value;
    var fecped=$('fapedido_fecped').value;

    window.open('/facturacion_dev.php/fapedido/anular?nroped='+nroped+'&referencia='+referencia+'&fecped='+fecped,'...','menubar=no,toolbar=no,scrollbars=yes,width=700,height=400,resizable=yes,left=400,top=120');
  }

  function cargarcombosart()
  {
  	var neww='<?php echo $fapedido->getId()?>';
  	if ($('fapedido_combo').value!="" && neww=="")
  	{
     new Ajax.Updater('articulos', getUrlModulo()+'ajax', {asynchronous:true, evalScripts:true, onComplete:function(request, json){AjaxJSON(request, json)}, parameters:'ajax=7'});
  	}
  }

function colocargrid(id)
{
 var neww='<?php echo $fapedido->getId()?>';
 if ($('fapedido_refped').value!="" && neww=="")
 {
  var cod=$(id).value;
  new Ajax.Updater('articulos', getUrlModulo()+'ajax', {asynchronous:true, evalScripts:true, onComplete:function(request, json){AjaxJSON(request, json)}, parameters:'ajax=4&docref='+$('fapedido_tipref').value+'&cajtexmos=fapedido_codcli&codigo='+cod});
  setTimeout('otra()',5000)
 }

}

function colocargrid2(id)
{
  var neww='<?php echo $fapedido->getId()?>';
  if ($('fapedido_combo').value!="" && neww=="")
  {
   var cod=$(id).value;
   new Ajax.Updater('articulos', getUrlModulo()+'ajax', {asynchronous:true, evalScripts:true, onComplete:function(request, json){AjaxJSON(request, json)}, parameters:'ajax=7&codcom='+cod});
   setTimeout('otra()',5000)
  }
}

function otra()
{
  var comb=$('fapedido_com').value;
  if (comb!='1')
  {
   llenargridfechas();
   monto_total();
  }
  else
  {
   var fil=parseInt($('fapedido_fil').value);
   var i=0;
   while (i<fil)
   {
    var id1="ax"+"_"+i+"_1";
    var id2="ax"+"_"+i+"_2";
    var id3="ax"+"_"+i+"_3";

    $(id3).value='1,00';
    Cantidad2(id3);
    i++;
   }
  }
}
</script>

