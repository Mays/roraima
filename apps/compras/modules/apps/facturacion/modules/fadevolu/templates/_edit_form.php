<?php
// auto-generated by PropelCidesa
// date: 2008/11/18 12:55:28
?>
<?php echo form_tag('fadevolu/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($fadevolu, 'getId') ?>
<?php echo javascript_include_tag('dFilter','ajax','tools','observe','facturacion/fadevolu') ?>
<?php use_helper('Javascript', 'tabs', 'Grid') ?>

<?php echo input_hidden_tag('fadevolu[codpro]', $fadevolu->getCodpro()) ?>

<h2 class="h2" onclick="javascript: return $('divDatos de la Devolución').toggle();"><?php echo __('Datos de la Devolución') ?></h2>
<fieldset id="sf_fieldset_datos_de_la_devoluci__n" class="">

<div class="form-row" id="divDatos de la Devolución">

<table>
  <tr>
    <th>
		<div id="divnrodev">
		  <?php echo label_for('fadevolu[nrodev]', __($labels['fadevolu{nrodev}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fadevolu{nrodev}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fadevolu{nrodev}')): ?>
		    <?php echo form_error('fadevolu{nrodev}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fadevolu, 'getNrodev', array (
		  'size' => 8,
		  'control_name' => 'fadevolu[nrodev]',
		  'maxlength' => 8,
		  'onBlur'  => "javascript:event.keyCode=13; enters(event,this.value);",
		  'readonly'  =>  true,
		)); echo $value ? $value : '&nbsp;' ?>

		    </div>
		</div>
	</th>
	<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <th>
		<div id="divrefdes">
		  <?php echo label_for('fadevolu[refdes]', __($labels['fadevolu{refdes}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fadevolu{refdes}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fadevolu{refdes}')): ?>
		    <?php echo form_error('fadevolu{refdes}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		 <?php echo input_auto_complete_tag('fadevolu[refdes]', $fadevolu->getRefdes(),
		    'fadevolu/autocomplete?ajax=1',  array('autocomplete' => 'off',
				'size' => 20,
				'control_name' => 'fadevolu[refdes]',
				'readonly'  =>  $fadevolu->getId()!='' ? true : false ,
				'onBlur'=> remote_function(array(
				'update'   => 'divGrid',
		        'url'      => 'fadevolu/grid',
		        'condition' => "$('fadevolu_refdes').value != '' && $('id').value == ''",
		        'complete' => 'AjaxJSON(request, json)',
		        'script'   => true,
		          'with' => "'ajax=1&cajtexmos=&cajtexcom=&codigo='+this.value"
		        ))),
		     array('use_style' => 'true')
		  )
		?>		    </div>
		</div>
	</th>
	<th>
	   <?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo').'/metodo/Fadevolu_Cadphart/clase/Cadphart/frame/sf_admin_edit_form/obj1/fadevolu_refdes/campo1/dphart','','','botoncat')?>
	</th>
	<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	<th>
		<div id="divfecdev">
		  <?php echo label_for('fadevolu[fecdev]', __($labels['fadevolu{fecdev}' ]), 'class="required" Style="text-align:left; width:100px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fadevolu{fecdev}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fadevolu{fecdev}')): ?>
		    <?php echo form_error('fadevolu{fecdev}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_date_tag($fadevolu, 'getFecdev', array (
		  'rich' => true,
		  'calendar_button_img' => '/sf/sf_admin/images/date.png',
		  'control_name' => 'fadevolu[fecdev]',
		  'date_format' => 'dd/MM/yyyy',
		  'maxlength' => 10,
		  'onkeyup' => "javascript: mascara(this,'/',patron,true)",
		  'readonly'  =>  $fadevolu->getId()!='' ? true : false ,
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
		<div id="divcodcli">
		  <?php echo label_for('fadevolu[rifpro]', __($labels['fadevolu{rifpro}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fadevolu{rifpro}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fadevolu{rifpro}')): ?>
		    <?php echo form_error('fadevolu{rifpro}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php //$value = get_partial('codcli', array('type' => 'edit', 'fadevolu' => $fadevolu)); echo $value ? $value : '&nbsp;' ?>

			<?php $value = object_input_tag($fadevolu, 'getRifpro', array (
			  'size' => 20,
			  'control_name' => 'fadevolu[rifpro]',
			  'readonly'  =>  true,
			  )); echo $value ? $value : '&nbsp;' ?>
			<th>
			   <?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo').'/metodo/Rifcli_Fapedido/clase/Facliente/frame/sf_admin_edit_form/obj1/fadevolu_rifpro/obj2/fadevolu_nompro/campo1/rifpro/campo2/nompro','','','botoncat')?></th>
			</th>
			<th>
			  <?php $value = object_input_tag($fadevolu, 'getNompro', array (
			  'size' => 70,
			  'disabled' => true,
			  'control_name' => 'fadevolu[nompro]',
			)); echo $value ? $value : '&nbsp;' ?>
			</th>

		    </div>
		</div>
	</th>
  </tr>
</table>

<br/>

<table>
  <tr>
    <th>
		<div id="divdirpro">
		  <?php echo label_for('fadevolu[dirpro]', __($labels['fadevolu{dirpro}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fadevolu{dirpro}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fadevolu{dirpro}')): ?>
		    <?php echo form_error('fadevolu{dirpro}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fadevolu, 'getDirpro', array (
		  'disabled' => true,
		  'size' => '100',
		  'control_name' => 'fadevolu[dirpro]',
		)); echo $value ? $value : '&nbsp;' ?>
		    </div>
		</div>
	</th>
	</tr>
</table>

<br>

<table>
	<th>
		<div id="divtelpro">
		  <?php echo label_for('fadevolu[telpro]', __($labels['fadevolu{telpro}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fadevolu{telpro}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fadevolu{telpro}')): ?>
		    <?php echo form_error('fadevolu{telpro}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fadevolu, 'getTelpro', array (
		  'disabled' => true,
		  'control_name' => 'fadevolu[telpro]',
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
		<div id="divdesdev">
		  <?php echo label_for('fadevolu[desdev]', __($labels['fadevolu{desdev}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fadevolu{desdev}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fadevolu{desdev}')): ?>
		    <?php echo form_error('fadevolu{desdev}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_textarea_tag($fadevolu, 'getDesdev', array (
		  'size' => '90x3',
		  'maxlength'=>250,
		  'control_name' => 'fadevolu[desdev]',
		  'readonly'  =>  $fadevolu->getId()!='' ? true : false ,
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
		<div id="divcodalm">
		  <?php echo label_for('fadevolu[codalm]', __($labels['fadevolu{codalm}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fadevolu{codalm}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fadevolu{codalm}')): ?>
		    <?php echo form_error('fadevolu{codalm}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

			<?php echo input_auto_complete_tag('fadevolu[codalm]', $fadevolu->getCodalm(),
			    'fadevolu/autocomplete?ajax=2',  array('autocomplete' => 'off','maxlength' => 6,
			    'readonly'  =>  $fadevolu->getId()!='' ? true : false ,
				'onBlur'=> remote_function(array(
			        'url'      => 'fadevolu/ajax',
			        'complete' => 'AjaxJSON(request, json)',
			        'condition' => "$('fadevolu_codalm').value != ''",
			          'with' => "'ajax=2&cajtexmos=fadevolu_nomalm&cajtexcom=fadevolu_codalm&codigo='+this.value"
			        ))),
			     array('use_style' => 'true')
			  )?>
			  </th>
			<th>
			   <?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo').'/metodo/Cadefalm_Almentalm/clase/Cadefalm/frame/sf_admin_edit_form/obj1/fadevolu_codalm/obj2/fadevolu_nomalm/campo1/codalm/campo2/nomalm','','','botoncat')?></th>
			</th>
			<th>
			  <?php $value = object_input_tag($fadevolu, 'getNomalm', array (
			  'size' => 70,
			  'disabled' => true,
			  'control_name' => 'fadevolu[nomalm]',
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
		<div id="divfatipdev_id">
		  <?php if($labels['fadevolu{fatipdev_id}']!='.:') { ?>
		  <?php echo label_for('fadevolu[fatipdev_id]', __($labels['fadevolu{fatipdev_id}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fadevolu{fatipdev_id}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fadevolu{fatipdev_id}')): ?>
		    <?php echo form_error('fadevolu{fatipdev_id}', array('class' => 'form-error-msg')) ?>
		  <?php endif; }?>

		  <?php $value = object_select_tag($fadevolu, 'getFatipdevId', array (
		  'related_class' => 'Fatipdev',
		  'control_name' => 'fadevolu[fatipdev_id]',
		  'include_blank' => true,
		)); echo $value ? $value : '&nbsp;' ?>
		    <?php if($labels['fadevolu{fatipdev_id}']!='.:') { ?>
		  </div>
		  <?php  } ?>
		</div>
	</th>
  </tr>
</table>

<br/>

<table>
  <tr>
    <th>
		<div id="divmondev">
		  <?php echo label_for('fadevolu[mondev]', __($labels['fadevolu{mondev}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
		  <div class="content<?php if ($sf_request->hasError('fadevolu{mondev}')): ?> form-error<?php endif; ?>">
		  <?php if ($sf_request->hasError('fadevolu{mondev}')): ?>
		    <?php echo form_error('fadevolu{mondev}', array('class' => 'form-error-msg')) ?>
		  <?php endif; ?>

		  <?php $value = object_input_tag($fadevolu, 'getMondev', array (
		  'size' => 20,
		  'readonly' => true,
		  'control_name' => 'fadevolu[mondev]',
		),$default_value = number_format($value,2,',','.')); echo $value ? $value : '&nbsp;' ?>

		    </div>
		</div>
	</th>
  </tr>
</table>



<div class="form-row" id="divGrid">
<!--<form name="form1" id="form1">-->
<?
echo grid_tag($obj);
?>
<!--</form>-->
</div>
<br/>
</div>
</fieldset>

<h2 class="h2" onclick="javascript: return $('divObservación').toggle();"><?php echo __('Observación') ?></h2>
<fieldset id="sf_fieldset_observaci__n" class="">
<div class="form-row" id="divObservación">
<div id="divobsdev">
  <?php if($labels['fadevolu{obsdev}']!='.:') { ?>
  <?php echo label_for('fadevolu[obsdev]', __($labels['fadevolu{obsdev}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fadevolu{obsdev}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fadevolu{obsdev}')): ?>
    <?php echo form_error('fadevolu{obsdev}', array('class' => 'form-error-msg')) ?>
  <?php endif; }?>

  <?php $value = object_textarea_tag($fadevolu, 'getObsdev', array (
  'size' => '90x3',
  'maxlength'=>250,
  'control_name' => 'fadevolu[obsdev]',
  'readonly'  =>  $fadevolu->getId()!='' ? true : false ,
)); echo $value ? $value : '&nbsp;' ?>

</div></div>
<br/>

</div>
</fieldset>


<?php include_partial('edit_actions', array('fadevolu' => $fadevolu)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($fadevolu->getId()): ?>
<?php echo button_to(__('delete'), 'fadevolu/delete?id='.$fadevolu->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>

<script language="javascript">
 $$('.botoncat')[1].disabled=true; //rif

  function enters(e,valor)
  {
   if (e.keyCode==13 || e.keyCode==9)
   {
     if (valor!='')
     { valor=valor.pad(8, '0',0);}
     else{valor=valor.pad(8, '#',0);}

     $('fadevolu_nrodev').value=valor;

   }
  }

</script>