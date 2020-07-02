<?php

/**
 * desarroyo de funciones
 */

function extraer_hoja($archivo){

    $uploadOk = 1; 
    $file_ext = pathinfo(basename($_FILES["archivo"]["name"]),PATHINFO_EXTENSION); 
    $size = $_FILES["archivo"]["size"]; 
    $name = $_FILES["archivo"]["name"]; 
    $type = $archivo["type"]; 
    $tmp_name = $archivo; 
    echo "variable archivo: ",$archivo;

    # check de tamaño de archivo 5mb
    if ($size > 10000000) { 
        echo "Sorry, your file is too large."; 
        $uploadOk = 0; 
    }
    PHPExcel_Settings::setZipClass(PHPExcel_Settings::PCLZIP);
    #Carga de archivo
    if( $uploadOk == 1 ){

        // Pasando nombre del archivo temporal de PHP 
        $inputFileName = $tmp_name; 
        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objReader ->setReadDataOnly(true); 
            $objReader->setLoadAllSheets(); 
            $libro = $objReader->load($inputFileName);                                    // aqui le pone nombre al coso
        } catch (Exception $e) {

            die('Error Reading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) 
            . '": ' . $e->getMessage());
        }
    }
    $hoja = $libro->getSheet(0);
    return $hoja;
}

?>
