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

$PHPJasperXML->arrayParameter=array("fecha_desde"=>"2015/12/12","fecha_hasta"=>"2015/12/12");
$PHPJasperXML->load_xml_file("ivaventas.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file


?>
