<%@LANGUAGE="VBSCRIPT"%>
<!--#include file="Connections/GP.asp" -->
<%
User = Session("Usuario")

Dim CUIT
Dim CUIT_numRows
Set CUIT = Server.CreateObject("ADODB.Recordset")
CUIT.ActiveConnection = MM_GP_STRING
CUIT.Source = "SELECT CUIT FROM dbo.TBL_Usuarios WHERE ID_Usuario = '" + Replace(User, "'", "''") + "'"
CUIT.CursorType = 0
CUIT.CursorLocation = 2
CUIT.LockType = 1
CUIT.Open()
CUIT_numRows = 0

Session ("CUIT") = (CUIT.Fields.Item("CUIT").Value)
%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>G&amp;P Im&aacute;genes - Productos, Servicios y Soluciones en Tecnolog&iacute;a M&eacute;dica</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

<link href="fuentes.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('Images/Menu/botonera_1_f2.gif','Images/Menu/botonera_3_f2.gif','Images/Menu/botonera_5_f2.gif','Images/Menu/botonera_6_f2.gif','Images/Menu/botonera_8_f2.gif','Images/Menu/botonera_10_f2.gif')">
<table width="752" height="412" cellpadding="0" cellspacing="0">
  <tr>
    <td width="750" height="410" valign="top"><table width="750" height="410" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="750" height="53" valign="top"><img src="Images/Encabezado.jpg" width="752" height="78"></td>
        </tr>
        <tr>
          <td height="342" valign="top"><table width="750" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="106" height="342" valign="top" background="images/lateral1.jpg"><table width="106" height="341" border="0" cellpadding="0" cellspacing="0" class="hora">
                    <tr>
                      <td width="10" height="201" valign="top"><font color="#FF0000" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                      <td width="96" valign="top"><font size="1" face="Tahoma">&nbsp;</font><font size="1" face="Tahoma">&nbsp;</font><font size="1" face="Tahoma">&nbsp;</font><font size="1" face="Tahoma">&nbsp;</font><font size="1" face="Tahoma">&nbsp;</font><font size="1" face="Tahoma">&nbsp;</font><font size="1" face="Tahoma">&nbsp;</font><font size="1" face="Tahoma">&nbsp;</font>
                          <table border="0" cellpadding="0" cellspacing="0" width="95">
                            <!-- fwtable fwsrc="Botonera.png" fwbase="botonera.gif" fwstyle="Dreamweaver" fwdocid = "742308039" fwnested="0" -->
                            <tr>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="95" height="1" border="0"></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
                            </tr>
                            <tr>
                              <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('botonera_1','','Images/Menu/botonera_1_f2.gif',1);"><img name="botonera_1" src="Images/Menu/botonera_1.gif" width="95" height="19" border="0" alt=""></a></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="19" border="0"></td>
                            </tr>
                            <tr>
                              <td><img name="botonera_2" src="Images/Menu/botonera_2.gif" width="95" height="1" border="0" alt=""></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
                            </tr>
                            <tr>
                              <td><a href="Servicios.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('botonera_3','','Images/Menu/botonera_3_f2.gif',1);"><img name="botonera_3" src="Images/Menu/botonera_3.gif" width="95" height="19" border="0" alt=""></a></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="19" border="0"></td>
                            </tr>
                            <tr>
                              <td><img name="botonera_4" src="Images/Menu/botonera_4.gif" width="95" height="1" border="0" alt=""></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
                            </tr>
                            <tr>
                              <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('botonera_5','','Images/Menu/botonera_5_f2.gif',1);"><img name="botonera_5" src="Images/Menu/botonera_5.gif" width="95" height="19" border="0" alt=""></a></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="19" border="0"></td>
                            </tr>
                            <tr>
                              <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('botonera_6','','Images/Menu/botonera_6_f2.gif',1);"><img name="botonera_6" src="Images/Menu/botonera_6.gif" width="95" height="19" border="0" alt=""></a></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="19" border="0"></td>
                            </tr>
                            <tr>
                              <td><img name="botonera_7" src="Images/Menu/botonera_7.gif" width="95" height="1" border="0" alt=""></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
                            </tr>
                            <tr>
                              <td><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('botonera_8','','Images/Menu/botonera_8_f2.gif',1);"><img name="botonera_8" src="Images/Menu/botonera_8.gif" width="95" height="19" border="0" alt=""></a></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="19" border="0"></td>
                            </tr>
                            <tr>
                              <td><img name="botonera_9" src="Images/Menu/botonera_9.gif" width="95" height="1" border="0" alt=""></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
                            </tr>
                            <tr>
                              <td><a href="contacto.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('botonera_10','','Images/Menu/botonera_10_f2.gif',1);"><img name="botonera_10" src="Images/Menu/botonera_10.gif" width="95" height="19" border="0" alt=""></a></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="19" border="0"></td>
                            </tr>
                            <tr>
                              <td><img name="botonera_11" src="Images/Menu/botonera_11.gif" width="95" height="2" border="0" alt=""></td>
                              <td><img src="Images/Menu/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0"></td>
                            </tr>
                          </table>
                          <font size="1" face="Tahoma">&nbsp;</font></td>
                    </tr>
                    <tr valign="bottom">
                      <td height="140" colspan="2"><div align="center"><font color="#333333" size="1" face="Arial, Helvetica, sans-serif">&copy; Copyright</font></div>
                      </td>
                    </tr>
                  </table>
                </td>
                <td width="644" valign="top"><table width="644" height="298" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="15" colspan="9" background="Images/barra.jpg"><p align="right" class="hora">
                          <!-- #BeginDate format:Sw1a -->4 August, 2005 9:45 PM<!-- #EndDate -->
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="27">&nbsp;</td>
                      <td height="19" colspan="3"><img src="Images/@.gif" alt="@support es marca Registrada por G&amp;P Im&aacute;genes" width="94" height="31"></td>
                      <td width="19" class="Titulos">&nbsp;</td>
                      <td width="21" class="Titulos">&nbsp;</td>
                      <td width="15" class="Titulos">&nbsp;</td>
                      <td width="280" height="19" class="hora">Su n&uacute;mero
                        de Sesi&oacute;n es:
                          <% =Session.SessionID%>
                      </td>
                      <td width="47">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td width="22" height="19">&nbsp;</td>
                      <td colspan="6" class="Texto1">Estimado Sr.: <%= Session("Usuario") %> a continuaci&oacute;n Ud. podr&aacute; seleccionar la
                        opci&oacute;n de su inter&eacute;s</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="19">&nbsp;</td>
                      <td width="13" class="Texto1">&nbsp;</td>
                      <td width="198" class="Texto1">&nbsp;</td>
                      <td class="Texto1">&nbsp;</td>
                      <td class="Texto1">&nbsp;</td>
                      <td class="Texto1">&nbsp;</td>
                      <td class="Texto1">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="21" class="Texto1"><img src="Images/subindice.gif" width="14" height="16"> </td>
                      <td height="21" colspan="2" class="Texto1">Reportes de Fallas</td>
                      <td class="Texto1">&nbsp;</td>
                      <td class="Texto1"><img src="Images/subindice.gif" width="14" height="16"></td>
                      <td colspan="2" class="Texto1">Estad&iacute;sticas</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="19">&nbsp;</td>
                      <td class="Texto"><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora">Anular un reporte existente</td>
                      <td class="hora"></td>
                      <td class="hora"></td>
                      <td class="hora"><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora">Estad&iacute;sticas de fallas de su parque instalado</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="20">&nbsp;</td>
                      <td class="Texto"><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora">Consultar estado actual de un reporte</td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora"><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora">Estad&iacute;sticas de soluci&oacute;n de reportes generados</td>
                      <td valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="19">&nbsp;</td>
                      <td class="Texto"><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora"><a href="@reporte_prueba.asp">Generar un nuevo reporte</a></td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora"><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora">Estad&iacute;sticas de vigencia de Garant&iacute;a
                      sobre sus equipos</td>
                      <td valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="19">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="Texto1">&nbsp;</td>
                      <td class="Texto1">&nbsp;</td>
                      <td class="Texto1">&nbsp;</td>
                      <td class="Texto1">&nbsp;</td>
                      <td class="Texto1">&nbsp;</td>
                      <td valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="19"><img src="Images/subindice.gif" width="14" height="16"></td>
                      <td colspan="2" class="Texto1">Servicios</td>
                      <td class="Texto1">&nbsp;</td>
                      <td class="Texto1"><img src="Images/subindice.gif" width="14" height="16"></td>
                      <td colspan="2" class="Texto1">Cuenta Corriente</td>
                      <td valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="19">&nbsp;</td>
                      <td><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora"><a href="foro.asp">Foro de Discusi&oacute;n</a></td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora"><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora">Consultar su estado actual de pago</td>
                      <td valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="19">&nbsp;</td>
                      <td><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora">Soporte Remoto</td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora"><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora">Consultar las facturas pr&oacute;ximas
                        a pago</td>
                      <td valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="19">&nbsp;</td>
                      <td><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora">Soporte on-line</td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora"><img src="Images/minifle.gif" width="11" height="10"></td>
                      <td class="hora">Consultar  su estad&iacute;sitca de pagos</td>
                      <td valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="19">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="hora">                        <div align="right"><span class="Subtitulos"></span>
                            <div align="left"></div>
                      </div></td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora">&nbsp;</td>
                      <td class="hora">&nbsp;</td>
                      <td valign="top"><a href="Index.htm"><img src="Images/volver.gif" alt="Volver a la p&aacute;gina anterior" width="47" height="14" border="0"></a></td>
                    </tr>
                    <tr>
                      <td height="19" colspan="9" background="Images/barra.jpg"><div align="right"></div>
                      </td>
                    </tr>
                  </table>
                  <div align="center" class="Texto"><span class="pie"><strong> </strong></span>
                        <hr size="1" noshade>
                      <span class="pie"><strong> </strong> </span><span class="pie">GP Im&aacute;genes SRL - Tinogasta 3870 CP(1417 EIL) -&nbsp; Ciudad Aut&oacute;noma de Buenos Aires&nbsp; - Argentina <br>
Tel /Fax .: +54 11&nbsp;4501-2137</span></div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
<%
CUIT.Close()
Set CUIT = Nothing
%>
