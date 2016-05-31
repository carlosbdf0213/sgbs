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
//$PHPJasperXML->debugsql=true;
//
//
//
//$param = new Parametros;
//$param->fecha_desde='2015/01/01';
//$PHPJasperXML->arrayParameter=array("fecha_desde"=>"31/01/2015","fecha_hasta"=>"31/12/2015");
$PHPJasperXML->load_xml_file("ivacompras.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file


?>
