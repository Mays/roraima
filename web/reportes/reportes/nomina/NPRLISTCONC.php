<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>SIGA Reportes</title>
<link href="../../lib/css/siga.css" rel="stylesheet" type="text/css">
<link href="../../lib/css/datepickercontrol.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="../../lib/general/datepickercontrol.js"></script>
<script language="JavaScript" src="../../lib/general/fecha.js"></script>
</head>
<body>
<?
require_once("../../lib/bd/basedatosAdo.php");
$bd=new basedatosAdo();
?>
<form name="form1" method="post" action="">
  <table width="760" height="40"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE">
    <tr>
      <td width="190" rowspan="2" bgcolor="#003399" class="cell_left_line02"><img src="../../img/tl_logo_01.gif" width="190" height="40" border="0"></a></td>
      <td colspan="2" class="cell_date" align="right">
		<?
		$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","S&aacute;bado");
		$mes = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		$me=$mes[date('n')];
		echo $dias[date('w')].strftime(", %d de $me del %Y")."<br>";
		?>
		</td>
    </tr>
    <tr>
      <td width="313">&nbsp; </td>
      <td width="257" align="right" valign="middle" class="cell_logout">&nbsp;</td>
    </tr>
  </table>
  <table width="760"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
      <td width="6" align="left" valign="top" class="cell_left_line02"><img src="../../img/center02_tl.gif" width="6" height="6"></td>
      <td rowspan="2" valign="top" class="cell_padding_01"> <p class="breadcrumb">Reportes
        </p>
        <fieldset>

        <div align="left">&nbsp;
          <table width="612"  border="0" align="center" cellspacing="0" bordercolor="#6699CC" class="grid_line01_tl">
            <tr bordercolor="#FFFFFF">
              <td colspan="3" class="form_label_01"> <div align="center"> <font color="#000066" size="4"><strong>LISTADO DETALLADO
                  POR CONCEPTOS
                  <input name="titulo" type="hidden" id="titulo">
                  </strong></font></div></td>
            </tr>
            <tr bordercolor="#FFFFFF">
              <td class="form_label_01">&nbsp;</td>
              <td>&nbsp;</td>
              <td><font color="#00FFCC">&nbsp; </font></td>
            </tr>
            <tr bordercolor="#6699CC">
              <td width="192" class="form_label_01"><strong>Tama&ntilde;o Hoja:</strong></td>
              <td width="168"> <input name="tamano" type="text" class="breadcrumb" id="tamano" readonly="true"></td>
              <td width="238">&nbsp;</td>
            </tr>
            <tr bordercolor="#6699CC">
              <td height="24" class="form_label_01"><strong>Orientaci&oacute;n:</strong></td>
              <td> <input name="orientacion" type="text" class="breadcrumb" id="orientacion" readonly="true"></td>
              <td> <div align="right"> </div></td>
            </tr>
            <tr bordercolor="#6699CC">
              <td class="form_label_01"> <div align="left"><strong>Salida del
                  Reporte:</strong></div></td>
              <td> <div align="left"> </div>
                <div align="left"> <strong>
                  <input name="radiobutton" type="radio" class="breadcrumb" value="radiobutton" checked>
                  PANTALLA</strong></div></td>
              <td> <strong>
                <input name="radiobutton" type="radio" class="breadcrumb" value="radiobutton">
                IMPRESORA</strong></td>
            </tr>
            <tr bordercolor="#FFFFFF">
              <td class="form_label_01">&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr bordercolor="#FFFFFF">
              <td colspan="3" class="form_label_01"> <div align="center"><font color="#000066" size="3"><strong><em>Criterios
                  de Selecci&oacute;n</em></strong></font></div></td>
            </tr>
            <tr bordercolor="#6699CC">
              <td height="23" bordercolor="#FFFFFF" class="form_label_01">&nbsp;</td>
              <td><strong>DESDE</strong></td>
              <td><strong>HASTA</strong></td>
            </tr>
            <tr>
              <td class="form_label_01"><strong>Tipo de Concepto :</strong></td>
              <td> <select name="pf_10" class="breadcrumb" id="pf_10">
                  <option value="t">Todos</option>
                  <option value="A">Asignaciones</option>
                  <option value="D">Deducciones</option>
                  <option value="P">Aportes</option>
                </select></td>
              <td>&nbsp;</td>
            </tr>
            <tr bordercolor="#6699CC">
              <td class="form_label_01"><strong>C&oacute;digo Empleado:</strong></td>
              <td>
                  <? 	$tb=$bd->select("SELECT min(CODEMP) as cod FROM NPNOMCAL");  ?>
		 	      <input type="text" name="codempdes" class="breadcrumb" id="codempdes" value="<?php print $tb->fields["cod"] ?>" size="15">
                  <input type="button" name="boton" value="..." onclick="catalogo1('codempdes')" >
		      </td>
              <td>
                  <? 	$tb=$bd->select("SELECT max(CODEMP) as cod FROM NPNOMCAL");  ?>
		 	      <input type="text" name="codemphas" class="breadcrumb" id="codemphas" value="<?php print $tb->fields["cod"] ?>" size="15">
                  <input type="button" name="boton" value="..." onclick="catalogo1('codemphas')" >
		      </td>
            </tr>
            <tr bordercolor="#6699CC">
              <td class="form_label_01"><strong>Cargo:</strong></td>

              <td >
                  <? 	$tb=$bd->select("SELECT min(CODCAR) as codc FROM NPNOMCAL");  ?>
		 	      <input type="text" name="codcardes" class="breadcrumb" id="codcardes" value="<?php print $tb->fields["codc"] ?>" size="15">
                  <input type="button" name="boton" value="..." onclick="catalogo2('codcardes')" >
		      </td>

              <td >
                  <? 	$tb=$bd->select("SELECT max(CODCAR) as codc FROM NPNOMCAL");  ?>
		 	      <input type="text" name="codcarhas" class="breadcrumb" id="codcarhas" value="<?php print $tb->fields["codc"] ?>" size="15">
                  <input type="button" name="boton" value="..." onclick="catalogo2('codcarhas')" >
		      </td>
            </tr>
            <tr>
              <td class="form_label_01"><strong>Concepto:</strong></td>

              <td>
                  <? 	$tb=$bd->select("SELECT min(CODCON) as codcon FROM NPNOMCAL");  ?>
		 	      <input type="text" name="codcondes" class="breadcrumb" id="codcondes" value="<?php print $tb->fields["codcon"] ?>" size="15">
                  <input type="button" name="boton" value="..." onclick="catalogo3('codcondes')" >
		      </td>

              <td>
                  <? 	$tb=$bd->select("SELECT max(CODCON) as codcon FROM NPNOMCAL");  ?>
		 	      <input type="text" name="codconhas" class="breadcrumb" id="codconhas" value="<?php print $tb->fields["codcon"] ?>" size="15">
                  <input type="button" name="boton" value="..." onclick="catalogo3('codconhas')" >
		      </td>
            </tr>
            <tr bordercolor="#6699CC">
              <td height="23" class="form_label_01"><strong>Fecha Emisi&oacute;n:</strong></td>
              <td> <div align="left"> </div>
                <div align="left">
                  <?

			  	$tb=$bd->select("SELECT to_char(MIN(fecnom),'DD/MM/YYYY') as fecha FROM nphiscon");
				if(!$tb->EOF)
				{
					$fecini=$tb->fields["fecha"];
				}

			  	$tb2=$bd->select("SELECT to_char(MAX(fecnom),'DD/MM/YYYY') as fecha FROM nphiscon");
				if(!$tb2->EOF)
				{
					$fecdes=$tb2->fields["fecha"];
				}

				?>
                  <input name="fecreg1" type="text" class="breadcrumb" id="fecreg1" datepicker="true" value="<? print $fecini;?>" size="10">
                </div></td>
              <td><input name="fecreg2" type="text" class="breadcrumb" id="fecreg2" datepicker="true" value="<? print $fecdes;?>" size="10"></td>
            </tr>
            <tr bordercolor="#6699CC">
              <td class="form_label_01"><strong>N&oacute;mina:</strong></td>

              <td>
                  <? 	$tb=$bd->select("SELECT min(CODNOM) as codcon FROM NPNOMCAL");  ?>
		 	      <input type="text" name="codnom" class="breadcrumb" id="codnom" value="<?php print $tb->fields["codcon"] ?>" size="8">
                  <input type="button" name="boton" value="..." onclick="catalogo4('codnom')" >
		      </td>
              <td>&nbsp; </td>
            </tr>

          <tr>
              <td height="26" class="form_label_01"> <div align="left"><strong>Nomina
                  Especial:</strong></div></td>
              <td colspan="2" valign="middle"> <select name="especial" class="breadcrumb" id="especial">
                  <option value="N" selected="selected">No</option>
                  <option value="S">Si</option>
                </select></td>
</tr>

		 <tr>
              <td class="form_label_01"><strong>Tipo de Nomina Especial :</strong></td>
              <td colspan="2">
                  <select name="tipnomesp" class="breadcrumb" id="tipnomesp">
                    <?
					$tb2=$bd->select("SELECT distinct(a.CODNOMESP),upper(a.DESNOMESP) as nombre FROM npnomesptipos a order by a.CODNOMESP");
				  	while(!$tb2->EOF)
					{
				  ?>
                    <option value="<? print $tb2->fields["codnomesp"];?>"><? print $tb2->fields["codnomesp"].' - '.$tb2->fields["nombre"];?></option>
                    <?
				  		$tb2->MoveNext();
					}
				  ?>
                </select></td>
            </tr>


            <tr>
            <tr bordercolor="#6699CC">
              <td class="form_label_01">&nbsp;</td>
              <td>&nbsp; </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="form_label_01">&nbsp;</td>
              <td colspan="2"><input name="sqls" type="hidden" id="sqls"></td>
            </tr>
          </table>
        </div>
        <div align="left">&nbsp; </div>
        </fieldset>
        <table width="356"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE">
          <tr>
            <td width="38" rowspan="3" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="258"><img src="../../img/box01_tl.gif" width="6" height="6"></td>
            <td width="60" align="right"><img src="../../img/box01_tr.gif" width="6" height="6"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input name="Button" type="button" class="form_button01" value="Generar" onClick="enviar()">
              <input name="Button" type="button" class="form_button01" value="   Salir    " onClick="cerrar()"> </td>
          </tr>
          <tr>
            <td><img src="../../img/box01_bl.gif" width="6" height="6"></td>
            <td align="right"><img src="../../img/box01_br.gif" width="6" height="6"></td>
          </tr>
        </table></td>
      <td width="6" align="right" valign="top"><img src="../../img/center01_tr.gif" width="6" height="6"></td>
      <td width="40" rowspan="2" align="center" bgcolor="#EEEEEE">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="bottom" class="cell_left_line02"><img src="../../img/center02_bl.gif" width="6" height="6"></td>
      <td align="right" valign="bottom"><img src="../../img/center01_br.gif" width="8" height="30"></td>
    </tr>
  </table>
</form>
</body>
<script language="javascript">
function enviar()
{
	f=document.form1;
	f.titulo.value="LISTADO DETALLADO POR CONCEPTOS";
	f.action="rNPRLISTCONC.php";
	f.submit();
}
function cerrar()
{
//	 f= document.form1;
//	 alert(f.codubi.value);
window.close();
}
function catalogo1(campo)
{
      mysql='select codemp as Empleado, nomemp as Nombre_Empleado from nphojint order by codemp asc limit 50';
	  pagina="../../lib/general/catalogoobj.php?sql="+mysql+"&campo="+campo;
	  window.open(pagina,"catalogo","menubar=no,toolbar=no,scrollbars=yes,width=500,height=400,resizable=yes,left=50,top=50");
}

function catalogo2(campo)
{
      mysql='SELECT codcar as codigo, nomcar as Descripcion FROM npcargos order by codcar asc limit 50';
	  pagina="../../lib/general/catalogoobj.php?sql="+mysql+"&campo="+campo;
	  window.open(pagina,"catalogo","menubar=no,toolbar=no,scrollbars=yes,width=500,height=400,resizable=yes,left=50,top=50");
}

function catalogo3(campo)
{
      mysql='select codcon as codigo, nomcon as Descripcion from npdefcpt order by codcon asc limit 50';
	  pagina="../../lib/general/catalogoobj.php?sql="+mysql+"&campo="+campo;
	  window.open(pagina,"catalogo","menubar=no,toolbar=no,scrollbars=yes,width=500,height=400,resizable=yes,left=50,top=50");
}

function catalogo4(campo)
{
      mysql='select codnom as nomina, nomnom as descripcion from npnomina order by codnom asc limit 50';
	  pagina="../../lib/general/catalogoobj.php?sql="+mysql+"&campo="+campo;
	  window.open(pagina,"catalogo","menubar=no,toolbar=no,scrollbars=yes,width=500,height=400,resizable=yes,left=50,top=50");
}

</script>
</html>
