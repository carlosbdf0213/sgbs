<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.   
 */
include_once('class/tcpdf/tcpdf.php');
include_once("class/PHPJasperXML.inc.php");
include_once ('setting.php');
use app\models\Parametros;

$PHPJasperXML = new PHPJasperXML();
$PHPJasperXML->debugsql=true;

$desde = "2015/11/13";
$desde->format('Y/m/d h:i:s');
$hasta = "2015/11/17";
$hasta->format('Y/m/d h:i:s');


$PHPJasperXML->arrayParameter=array("fecha_desde"=>$desde,"fecha_hasta"=>$hasta);
$PHPJasperXML->load_xml_file("ivacompras.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file


?>
