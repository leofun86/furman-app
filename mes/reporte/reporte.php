<?php

  include '../../conexion.php';

  //$consulta = "SELECT * FROM datos";
  $accion = $_GET['ac'];
  $accion2 = $_GET['ac'];

  switch ($accion) {

    case 1:
      $consulta = "SELECT * FROM enero";
      break;
    case 2:
      $consulta = "SELECT * FROM febrero";
      break;
    case 3:
      $consulta = "SELECT * FROM marzo";
      break;
    case 4:
      $consulta = "SELECT * FROM abril";
      break;
    case 5:
      $consulta = "SELECT * FROM mayo";
      break;
    case 6:
      $consulta = "SELECT * FROM junio";
      break;
    case 7:
      $consulta = "SELECT * FROM julio";
      break;
    case 8:
      $consulta = "SELECT * FROM agosto";
      break;
    case 9:
      $consulta = "SELECT * FROM setiembre";
      break;
    case 10:
      $consulta = "SELECT * FROM octubre";
      break;
    case 11:
      $consulta = "SELECT * FROM noviembre";
      break;
    case 12:
      $consulta = "SELECT * FROM diciembre";
      break;
  }
  switch ($accion2) {
    case 1:
      $consulta2="enero";
      break;
    case 2:
      $consulta2="febrero";
      break;
    case 3:
      $consulta2="marzo";
      break;
    case 4:
      $consulta2="abril";
      break;
    case 5:
      $consulta2="mayo";
      break;
    case 6:
      $consulta2="junio";
      break;
    case 7:
      $consulta2="julio";
      break;
    case 8:
      $consulta2="agosto";
      break;
    case 9:
      $consulta2="setiembre";
      break;
    case 10:
      $consulta2="octubre";
      break;
    case 11:
      $consulta2="noviembre";
      break;
    case 12:
      $consulta2="diciembre";
      break;
  }


  $resultado = $conexion->query($consulta);

  if ($resultado->num_rows > 0) {

    date_default_timezone_set('America/Argentina/Buenos_Aires');

    if (PHP_SAPI == 'cli')
    die('Este archivo solo se puede ver desde un navegador web');

    require_once 'lib/PHPExcel.php';

    $objPHPExcel = new PHPExcel();

    $objPHPExcel->getProperties()->setCreator("Codedrinks")
    ->setLastModifiedBy("Codedrinks")
    ->setTitle("Reporte Excel con PHP y MySQL")
    ->setSubject("Reporte Excel con PHP y MySQL")
    ->setDescription("Reporte de trámites")
    ->setKeywords("reporte tramites setiembre")
    ->setCategory("Reporte excel");

    //$tituloReporte = "Reporte";
    $titulosColumnas = array('FECHA', 'EMPRESA', 'ORGANISMO', 'DESCRIPCIÓN', 'HONORARIOS', 'TIMBRES', 'MULTAS', 'BOLETOS');

    $objPHPExcel->setActiveSheetIndex(0)
    ->mergeCells('A1:H1');

    $objPHPExcel->setActiveSheetIndex(0)
    //->setCellValue('A1',$tituloReporte) // Titulo del reporte
    ->setCellValue('A3',  $titulosColumnas[0])  //Titulo de las columnas
    ->setCellValue('B3',  $titulosColumnas[1])
    ->setCellValue('C3',  $titulosColumnas[2])
    ->setCellValue('D3',  $titulosColumnas[3])
    ->setCellValue('E3',  $titulosColumnas[4])
    ->setCellValue('F3',  $titulosColumnas[5])
    ->setCellValue('G3',  $titulosColumnas[6])
    ->setCellValue('H3',  $titulosColumnas[7]);

    $i = 4; //Numero de fila donde se va a comenzar a rellenar
    while ($fila = $resultado->fetch_array()) {
       $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('A'.$i, $fila['fecha'])
           ->setCellValue('B'.$i, $fila['empresa'])
           ->setCellValue('C'.$i, $fila['lugar'])
           ->setCellValue('D'.$i, $fila['tramite'])
           ->setCellValue('E'.$i, $fila['honorarios'])
           ->setCellValue('F'.$i, $fila['timbres'])
           ->setCellValue('G'.$i, $fila['multas'])
           ->setCellValue('H'.$i, $fila['boletos']);
       $i++;
    }

    $estiloTituloReporte = array(
      'font' => array(
          'name'      => 'Impact',
          'bold'      => true,
          'italic'    => false,
          'strike'    => false,
          'size' =>16,
          'color'     => array(
              'rgb' => 'FFFFFF'
          )
      ),
      'fill' => array(
        'type'  => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array(
              'rgb' => 'ffffff')
      ),
      'borders' => array(
          'allborders' => array(
              'style' => PHPExcel_Style_Border::BORDER_NONE
          )
      ),
      'alignment' => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
          'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
          'rotation' => 0,
          'wrap' => TRUE
      )
    );

    $estiloTituloColumnas = array(
        'font' => array(
            'name'  => 'Arial',
            'bold'  => false,
            'size'  => '8',
            'color' => array(
                'rgb' => 'FFFFFF'
            )
        ),
        'fill' => array(
            'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
            'rotation'   => 90,
            'startcolor' => array(
                'rgb' => '143860'
            ),
            'endcolor' => array(
                'argb' => 'FF431a5d'
            )
        ),
        'borders' => array(
            'top' => array(
                'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                'color' => array(
                    'rgb' => '143860'
                )
            ),
            'bottom' => array(
                'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                'color' => array(
                    'rgb' => '143860'
                )
            )
        ),
        'alignment' =>  array(
            'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'      => TRUE
        )
    );

    $estiloInformacion = new PHPExcel_Style();
    $estiloInformacion->applyFromArray( array(
        'font' => array(
            'name'  => 'Arial',
            'color' => array(
                'rgb' => '000000'
            )
        ),
        'fill' => array(
      'type'  => PHPExcel_Style_Fill::FILL_SOLID,
      'color' => array(
                'rgb' => 'ffffff')
      ),
        'borders' => array(
            'left' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN ,
          'color' => array(
                  'rgb' => '3a2a47'
                )
            )
        )
    ));

    $objPHPExcel->getActiveSheet()->getStyle('A1:H1')->applyFromArray($estiloTituloReporte);
    $objPHPExcel->getActiveSheet()->getStyle('A3:H3')->applyFromArray($estiloTituloColumnas);
    $objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:H4".($i-1));

    for($i = 'A'; $i <= 'H'; $i++){
    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($i)->setAutoSize(TRUE);}

    $objPHPExcel->getActiveSheet()->setTitle('lugar');

    // Se activa la hoja para que sea la que se muestre cuando el archivo se abre
    $objPHPExcel->setActiveSheetIndex(0);

    // Inmovilizar paneles
    //$objPHPExcel->getActiveSheet(0)->freezePane('A4');
    $objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Planilla de trámites '.$consulta2.' .xlsx"');
    header('Cache-Control: max-age=0');

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
    exit;
    }
    else{
        print_r('No hay resultados para mostrar');
    }

?>
