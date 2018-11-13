<?php
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Helper\Sample;
require_once $_SERVER['DOCUMENT_ROOT'] .'/uploadexcel/src/Bootstrap.php';
$helper = new Sample();


$inputFileType = 'Xlsx';
$inputFileName = __DIR__ . '/sampleData/demo.xlsx';

$reader = IOFactory::createReader($inputFileType);
$reader->setReadDataOnly(true);
$spreadsheet = $reader->load($inputFileName);

$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
$sql = "";
$mysqli = con();

for($row=2;$row<=count($sheetData); $row++){
    $xx = "'" . implode ("','",$sheetData[$row])."'";
   print_r($xx);
    $sql = "INSERT INTO custom_apperance (customize_name,valu,user_id,inst_id) VALUES ($xx);";
    if($mysqli->query($sql) ===TRUE){
        echo "Row $row INSERTED"."<br>";
    }else{
        echo "Error $sql INSERTED"."<br>".$mysqli->error;
    }
}

function con(){
    $mysqli = new mysqli("localhost", "root", "", "schoolstuff");
    return $mysqli;
}