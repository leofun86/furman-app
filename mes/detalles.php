<?php
  echo '<div class="cajaDatos">';
    echo '<h2 style="padding:0px 20px;background:none;position:relative;right:20px;">DETALLE</h2>
          <h4 style="font-size:0.8em;padding:0px 20px;border:none;background:rgb(57, 186, 59, 0.5)" class="btn btn-success">Trámites: '.$contador['total'].'</h4>

          <h4 style="font-size:0.8em;padding:0px 20px;border:none;background:rgb(57, 186, 59, 0.5)" class="btn btn-success">Honorarios: $'.$honorarios['totalH'].'</h4>

          <h4 style="font-size:0.8em;padding:0px 20px;border:none;background:rgb(57, 186, 59, 0.5)" class="btn btn-success">Boletos: $'.$boletos['totalB'].'</h4>

          <h4 style="font-size:0.8em;padding:0px 20px;border:none;background:rgb(57, 186, 59, 0.5)" class="btn btn-success">Total: $'.$honorariosT.'</h4>

          <br>';
    for ($cNoble=0, $ram=0, $quimA=0, $idtk=0, $olsi=0, $rp=0, $gs=0, $gr=0, $osP=0, $niv=0, $bs=0, $ipnl=0, $kif=0, $jv=0, $spm=0, $tnd=0, $gnt=0, $alsi=0, $mazza=0, $dlr=0, $krs=0, $dvr=0, $cope=0, $temb=0, $volco=0, $labD=0, $giro=0, $eco=0, $landL=0, $cdot=0, $furman=0, $altimec=0, $alu=0, $carr=0, $otro=0, $i=1; $i <= $cant; $i++) {
      $registros = mysqli_query($conexion, "SELECT * FROM $menuMes WHERE fecha='2019-".$numMes."-".$i."'");

      while ($reg = mysqli_fetch_array($registros)) {
        if (
          $reg['empresa'] == "" ||
          $reg['empresa'] == "Aldo ltda" ||
          $reg['empresa'] == "Verónica Zandler" ||
          $reg['empresa'] == "VerónicaZandler" ||
          $reg['empresa'] == "Lucía Cohen" ||
          $reg['empresa'] == "Elizabeth Grudzien" ||
          $reg['empresa'] == "Retirar sobre (andrea)" ||
          $reg['empresa'] == "Gavinot sa" ||
          $reg['empresa'] == "Leandro varela" ||
          $reg['empresa'] == "Coop. Por decir algo" ||
          $reg['empresa'] == "Por decir algo" ||
          $reg['empresa'] == "Boris y J. Vianna" ||
          $reg['empresa'] == "Gonzalo Rostan" ||
          $reg['empresa'] == "Perez Godoy" ||
          $reg['empresa'] == "Vivian Barreto" ||
          $reg['empresa'] == "Miguel Carneiro" ||
          $reg['empresa'] == "Laura Martinez" ||
          $reg['empresa'] == "Horacio Volco" ||
          $reg['empresa'] == "Gustavo Rey" ||
          $reg['empresa'] == "F. Nalborczyk" ||
          $reg['empresa'] == "Mario Mernies" ||
          $reg['empresa'] == "José Grudzien" ||
          $reg['empresa'] == "Grudzien" ||
          $reg['empresa'] == "Autoparque" ||
          $reg['empresa'] == "Ivan Deris" ||
          $reg['empresa'] == "Volco" ||
          $reg['empresa'] == "Unión Montajes" ||
          $reg['empresa'] == "Brandon" ||
          $reg['empresa'] == "Luis Fontes" ||
          $reg['empresa'] == "Camejo" ||
          $reg['empresa'] == "Pablo Arrata" ||
          $reg['empresa'] == "Joselar Fontes" ||
          $reg['empresa'] == "Martín Couñago" ||
          $reg['empresa'] == "Grudzien Burstyn NF" ||
          $reg['empresa'] == "Edelman" ||
          $reg['empresa'] == "José Firpo" ||
          $reg['empresa'] == "Delfino" ||
          $reg['empresa'] == "Mederos" ||
          $reg['empresa'] == "Jorge Penedo" ||
          $reg['empresa'] == "Moresi" ||
          $reg['empresa'] == "E. Lejtreger") {

          $otro+=1;
        }
        if ($reg['empresa'] == "C. Noble" || $reg['empresa'] == "Cabaña Noble" || $reg['empresa'] == "cabaña noble" || $reg['empresa'] == "CABAÑA NOBLE" || $reg['empresa'] == "Cabana Noble" || $reg['empresa'] == "cabana noble" || $reg['empresa'] == "CABANA NOBLE") {
          $cNoble+=1;
        }
        if ($reg['empresa'] == "Ramley sa" || $reg['empresa'] == "ramley sa" || $reg['empresa'] == "Ramley" || $reg['empresa'] == "ramley" || $reg['empresa'] == "RAMLEY SA" || $reg['empresa'] == "RAMLEY") {
          $ram+=1;
        }
        if ($reg['empresa'] == "Química Aplicada" || $reg['empresa'] == "Quimica Aplicada" || $reg['empresa'] == "Química aplicada srl" || $reg['empresa'] == "Quimica aplicada srl" || $reg['empresa'] == "química aplicada" || $reg['empresa'] == "quimica aplicada" || $reg['empresa'] == "Química aplicada" || $reg['empresa'] == "Quimica aplicada" || $reg['empresa'] == "QUÍMICA APLICADA SRL" || $reg['empresa'] == "QUIMICA APLICADA SRL" || $reg['empresa'] == "QUÍMICA APLICADA" || $reg['empresa'] == "QUIMICA APLICADA") {
          $quimA+=1;
        }
        if ($reg['empresa'] == "Rafael Porcelli" || $reg['empresa'] == "rafael porcelli" || $reg['empresa'] == "RAFAEL PORCELLI") {
          $rp+=1;
        }
        if ($reg['empresa'] == "Olsi" || $reg['empresa'] == "olsi" || $reg['empresa'] == "OLSI") {
          $olsi+=1;
        }
        if ($reg['empresa'] == "Gold Stream" || $reg['empresa'] == "gold stream" || $reg['empresa'] == "GOLD STREAM") {
          $gs+=1;
        }
        if ($reg['empresa'] == "G. Ribas" || $reg['empresa'] == "Gonzalo Ribas") {
          $gr+=1;
        }
        if ($reg['empresa'] == "Os Penedos" || $reg['empresa'] == "os penedos" || $reg['empresa'] == "OS PENEDOS" || $reg['empresa'] == "Os penedos" || $reg['empresa'] == "Penedos" || $reg['empresa'] == "penedos" || $reg['empresa'] == "PENEDOS") {
          $osP+=1;
        }
        if ($reg['empresa'] == "Niveltic" || $reg['empresa'] == "niveltic" || $reg['empresa'] == "NIVELTIC") {
          $niv+=1;
        }
        if ($reg['empresa'] == "Bernardo Sport" || $reg['empresa'] == "Bernardo Sport sa" || $reg['empresa'] == "bernardo sport" || $reg['empresa'] == "bernardo sport sa" || $reg['empresa'] == "B. Sport") {
          $bs+=1;
        }
        if ($reg['empresa'] == "Inditek" || $reg['empresa'] == "inditek" || $reg['empresa'] == "INDITEK") {
          $idtk+=1;
        }

        if ($reg['empresa'] == "Ipnl" || $reg['empresa'] == "IPNL" || $reg['empresa'] == "Ipnl srl" || $reg['empresa'] == "IPNL SRL" || $reg['empresa'] == "Ipnl Srl" || $reg['empresa'] == "ipnl Srl" || $reg['empresa'] == "ipnl srl") {
          $ipnl+=1;
        }
        if ($reg['empresa'] == "Kifissia sa" || $reg['empresa'] == "KIFISSIA SA" || $reg['empresa'] == "Kifissia Sa" || $reg['empresa'] == "kifissia sa" || $reg['empresa'] == "kifissia Sa" || $reg['empresa'] == "Kifissia" || $reg['empresa'] == "KIFISSIA") {
          $kif+=1;
        }
        if ($reg['empresa'] == "José Vianna" || $reg['empresa'] == "Jose Vianna" || $reg['empresa'] == "José Viana" || $reg['empresa'] == "Jose Viana" || $reg['empresa'] == "JOSÉ VIANNA" || $reg['empresa'] == "JOSE VIANNA") {
          $jv+=1;
        }
        if ($reg['empresa'] == "Suprimaren" || $reg['empresa'] == "suprimaren" || $reg['empresa'] == "SUPRIMAREN") {
          $spm+=1;
        }
        if ($reg['empresa'] == "Tecnodor" || $reg['empresa'] == "tecnodor" || $reg['empresa'] == "TECNODOR") {
          $tnd+=1;
        }
        if ($reg['empresa'] == "Gavinot sa" || $reg['empresa'] == "gavinot sa" || $reg['empresa'] == "Gavinot Sa" || $reg['empresa'] == "GAVINOT SA") {
          $gnt+=1;
        }
        if ($reg['empresa'] == "Alsi ltda" || $reg['empresa'] == "Alsi Ltda" || $reg['empresa'] == "alsi ltda" || $reg['empresa'] == "ALSI LTDA" || $reg['empresa'] == "alsi Ltda") {
          $alsi+=1;
        }
        if ($reg['empresa'] == "Dr. Mazza" || $reg['empresa'] == "Dr Mazza" || $reg['empresa'] == "dr. Mazza" || $reg['empresa'] == "Dr. mazza" || $reg['empresa'] == "dr. mazza" || $reg['empresa'] == "DR. MAZZA" || $reg['empresa'] == "DR MAZZA" || $reg['empresa'] == "Mazza" || $reg['empresa'] == "mazza" || $reg['empresa'] == "MAZZA"){
          $mazza+=1;
        }
        if ($reg['empresa'] == "Doriler sa" || $reg['empresa'] == "Doriler Sa" || $reg['empresa'] == "doriler Sa" || $reg['empresa'] == "doriler sa" || $reg['empresa'] == "DORILER SA" || $reg['empresa'] == "Doriler" || $reg['empresa'] == "doriler" || $reg['empresa'] == "DORILER") {
          $dlr+=1;
        }
        if ($reg['empresa'] == "Dovier sa" || $reg['empresa'] == "Dovier Sa" || $reg['empresa'] == "dovier Sa" || $reg['empresa'] == "dovier sa" || $reg['empresa'] == "DOVIER SA" || $reg['empresa'] == "Dovier" || $reg['empresa'] == "dovier" || $reg['empresa'] == "DOVIER" || $reg['empresa'] == "Dovier ltda" || $reg['empresa'] == "Dovier Ltda" || $reg['empresa'] == "dovier ltda" || $reg['empresa'] == "DOVIER LTDA") {
          $dvr+=1;
        }
        if ($reg['empresa'] == "Korisia sa" || $reg['empresa'] == "Korisia Sa" || $reg['empresa'] == "korisia Sa" || $reg['empresa'] == "korisia sa" || $reg['empresa'] == "KORISIA SA" || $reg['empresa'] == "KORISIA" || $reg['empresa'] == "Korisia" || $reg['empresa'] == "korisia ") {
          $krs+=1;
        }
        if ($reg['empresa'] == "Copegran sa" || $reg['empresa'] == "Copegran Sa" || $reg['empresa'] == "copegran Sa" || $reg['empresa'] == "copegran sa" || $reg['empresa'] == "COPEGRAN SA" || $reg['empresa'] == "COPEGRAN" || $reg['empresa'] == "Copegran" || $reg['empresa'] == "copegran") {
          $cope+=1;
        }
        if ($reg['empresa'] == "Temberati alto sa" || $reg['empresa'] == "Temberati Alto Sa" || $reg['empresa'] == "Temberati" || $reg['empresa'] == "temberati" || $reg['empresa'] == "TEMBERATI") {
          $temb+=1;
        }
        if ($reg['empresa'] == "Eduardo Volco" || $reg['empresa'] == "Eduardo volco" || $reg['empresa'] == "eduardo Volco" || $reg['empresa'] == "Volco" || $reg['empresa'] == "volco" || $reg['empresa'] == "EDUARDO VOLCO" || $reg['empresa'] == "eduardo volco" || $reg['empresa'] == "volco") {
          $volco+=1;
        }
        if ($reg['empresa'] == "Lab. Dental" || $reg['empresa'] == "Lab Dental" || $reg['empresa'] == "Lab. dental" || $reg['empresa'] == "lab. Dental" || $reg['empresa'] == "LAB DENTAL" || $reg['empresa'] == "LAB. DENTAL" || $reg['empresa'] == "Laboratorio Dental" || $reg['empresa'] == "laboratorio dental" || $reg['empresa'] == "LABORATORIO DENTAL" || $reg['empresa'] == "Lab. Dental Independencia" || $reg['empresa'] == "Laboratorio dental") {
          $labD+=1;
        }
        if ($reg['empresa'] == "Girolar sa" || $reg['empresa'] == "Girolar Sa" || $reg['empresa'] == "girolar Sa" || $reg['empresa'] == "sirolar sa" || $reg['empresa'] == "GIROLAR SA" || $reg['empresa'] == "GIROLAR" || $reg['empresa'] == "Girolar" || $reg['empresa'] == "girolar") {
          $giro+=1;
        }
        if ($reg['empresa'] == "Ecovintage sa" || $reg['empresa'] == "Ecovintage Sa" || $reg['empresa'] == "ecovintage Sa" || $reg['empresa'] == "ecovintage sa" || $reg['empresa'] == "ECOVINTAGE SA" || $reg['empresa'] == "ECOVINTAGE" || $reg['empresa'] == "Ecovintage" || $reg['empresa'] == "ecovintage") {
          $eco+=1;
        }
        if ($reg['empresa'] == "Landlight sa" || $reg['empresa'] == "Landlight Sa" || $reg['empresa'] == "landlight Sa" || $reg['empresa'] == "landlight sa" || $reg['empresa'] == "LANDLIGHT SA" || $reg['empresa'] == "LANDLIGHT" || $reg['empresa'] == "Landlight" || $reg['empresa'] == "landlight") {
          $landL+=1;
        }
        if ($reg['empresa'] == "Oraldot sa" || $reg['empresa'] == "Oraldot Sa" || $reg['empresa'] == "oraldot Sa" || $reg['empresa'] == "oraldot sa" || $reg['empresa'] == "ORALDOT SA" || $reg['empresa'] == "ORALDOT" || $reg['empresa'] == "Oraldot" || $reg['empresa'] == "oraldot" || $reg['empresa'] == "Coraldot" || $reg['empresa'] == "coraldot" || $reg['empresa'] == "CORALDOT") {
          $cdot+=1;
        }
        if ($reg['empresa'] == "Furman y asoc." || $reg['empresa'] == "Furman y Asoc." || $reg['empresa'] == "Furman y asoc" || $reg['empresa'] == "Furman y Asoc" || $reg['empresa'] == "FURMAN Y ASOC." || $reg['empresa'] == "FURMAN Y ASOC" || $reg['empresa'] == "Furman" || $reg['empresa'] == "furman" || $reg['empresa'] == "FURMAN" || $reg['empresa'] == "Furman estudio") {
          $furman+=1;
        }
        if ($reg['empresa'] == "Altimec" || $reg['empresa'] == "altimec" || $reg['empresa'] == "ALTIMEC") {
          $altimec+=1;
        }
        if ($reg['empresa'] == "Alutel" || $reg['empresa'] == "alutel" || $reg['empresa'] == "ALUTEL") {
          $alu+=1;
        }
        if ($reg['empresa'] == "Carric" || $reg['empresa'] == "carric" || $reg['empresa'] == "CARRIC") {
          $carr+=1;
        }
      }

    }
    echo '<div class="col-lg-3 cajaDatos2" style="float:left;">';
      if ($alsi == 0) {
        echo '<span class="cifra0">Alsi: '.$alsi.'</span><br>';
      } else {
        echo 'Alsi: <span class="cifra">'.$alsi.'</span><br>';
      }
      if ($altimec == 0) {
        echo '<span class="cifra0">Altimec: '.$altimec.'</span><br>';
      } else {
        echo 'Altimec: <span class="cifra">'.$altimec.'</span><br>';
      }
      if ($alu == 0) {
        echo '<span class="cifra0">Alutel: '.$alu.'</span><br>';
      } else {
        echo 'Alutel: <span class="cifra">'.$alu.'</span><br>';
      }
      if ($bs == 0) {
        echo '<span class="cifra0">Bernardo Sport: '.$bs.'</span><br>';
      } else {
        echo 'Bernardo Sport: <span class="cifra">'.$bs.'</span><br>';
      }
      if ($cNoble == 0) {
        echo '<span class="cifra0">Cabaña Noble: '.$cNoble.'</span><br>';
      } else {
        echo 'Cabaña Noble: <span class="cifra">'.$cNoble.'</span><br>';
      }
      if ($carr == 0) {
        echo '<span class="cifra0">Carric: '.$carr.'</span><br>';
      } else {
        echo 'Carric: <span class="cifra">'.$carr.'</span><br>';
      }
      if ($cope == 0) {
        echo '<span class="cifra0">Copegran: '.$cope.'</span><br>';
      } else {
        echo 'Copegran: <span class="cifra">'.$cope.'</span><br>';
      }
      if ($cdot == 0) {
        echo '<span class="cifra0">Coraldot: '.$cdot.'</span><br>';
      } else {
        echo 'Coraldot: <span class="cifra">'.$cdot.'</span><br>';
      }
      if ($dlr == 0) {
        echo '<span class="cifra0">Doriler: '.$dlr.'</span><br>';
      } else {
        echo 'Doriler: <span class="cifra">'.$dlr.'</span><br>';
      }
      if ($dvr == 0) {
        echo '<span class="cifra0">Dovier: '.$dvr.'</span><br>';
      } else {
        echo 'Dovier: <span class="cifra">'.$dvr.'</span><br>';
      }
    echo '</div>';
    echo '<div class="col-lg-3 cajaDatos2" style="float:left;">';
      if ($eco == 0) {
        echo '<span class="cifra0">Ecovintage: '.$eco.'</span><br>';
      } else {
        echo 'Ecovintage: <span class="cifra">'.$eco.'</span><br>';
      }
      if ($volco == 0) {
        echo '<span class="cifra0">Eduardo Volco: '.$volco.'</span><br>';
      } else {
        echo 'Eduardo Volco: <span class="cifra">'.$volco.'</span><br>';
      }
      if ($furman == 0) {
        echo '<span class="cifra0">Furman y Asoc.: '.$furman.'</span><br>';
      } else {
        echo 'Furman y Asoc.: <span class="cifra">'.$furman.'</span><br>';
      }
      if ($gnt == 0) {
        echo '<span class="cifra0">Gavinot: '.$gnt.'</span><br>';
      } else {
        echo 'Gavinot: <span class="cifra">'.$gnt.'</span><br>';
      }
      if ($giro == 0) {
        echo '<span class="cifra0">Girolar: '.$giro.'</span><br>';
      } else {
        echo 'Girolar: <span class="cifra">'.$giro.'</span><br>';
      }
      if ($gr == 0) {
        echo '<span class="cifra0">Gonzalo Ribas: '.$gr.'</span><br>';
      } else {
        echo 'Gonzalo Ribas: <span class="cifra">'.$gr.'</span><br>';
      }
      if ($gs == 0) {
        echo '<span class="cifra0">Gold Stream: '.$gs.'</span><br>';
      } else {
        echo 'Gold Stream: <span class="cifra">'.$gs.'</span><br>';
      }
      if ($idtk == 0) {
        echo '<span class="cifra0">Inditek: '.$idtk.'</span><br>';
      } else {
        echo 'Inditek: <span class="cifra">'.$idtk.'</span><br>';
      }
      if ($ipnl == 0) {
        echo '<span class="cifra0">Ipnl: '.$ipnl.'</span><br>';
      } else {
        echo 'Ipnl srl: <span class="cifra">'.$ipnl.'</span><br>';
      }
      if ($jv == 0) {
        echo '<span class="cifra0">José Vianna: '.$jv.'</span><br>';
      } else {
        echo 'José Vianna: <span class="cifra">'.$jv.'</span><br>';
      }
    echo '</div>';
    echo '<div class="col-lg-3 cajaDatos2" style="float:left;">';

      if ($kif == 0) {
        echo '<span class="cifra0">Kifissia: '.$kif.'</span><br>';
      } else {
        echo 'Kifissia: <span class="cifra">'.$kif.'</span><br>';
      }
      if ($krs == 0) {
        echo '<span class="cifra0">Korisia: '.$krs.'</span><br>';
      } else {
        echo 'Korisia: <span class="cifra">'.$krs.'</span><br>';
      }
      if ($labD == 0) {
        echo '<span class="cifra0">Lab. Dental: '.$labD.'</span><br>';
      } else {
        echo 'Lab. Dental: <span class="cifra">'.$labD.'</span><br>';
      }
      if ($landL == 0) {
        echo '<span class="cifra0">Landlight: '.$landL.'</span><br>';
      } else {
        echo 'Landlight: <span class="cifra">'.$landL.'</span><br>';
      }
      if ($mazza == 0) {
        echo '<span class="cifra0">Dr. Mazza: '.$mazza.'</span><br>';
      } else {
        echo 'Dr. Mazza: <span class="cifra">'.$mazza.'</span><br>';
      }
      if ($niv == 0) {
        echo '<span class="cifra0">Niveltic: '.$niv.'</span><br>';
      } else {
        echo 'Niveltic: <span class="cifra">'.$niv.'</span><br>';
      }
      if ($olsi == 0) {
        echo '<span class="cifra0">Olsi: '.$olsi.'</span><br>';
      } else {
        echo 'Olsi: <span class="cifra">'.$olsi.'</span><br>';
      }
      if ($osP == 0) {
        echo '<span class="cifra0">Os Penedos: '.$osP.'</span><br>';
      } else {
        echo 'Os Penedos: <span class="cifra">'.$osP.'</span><br>';
      }
      if ($rp == 0) {
        echo '<span class="cifra0">Rafael Porcelli: '.$rp.'</span><br>';
      } else {
        echo 'Rafael Porcelli: <span class="cifra">'.$rp.'</span><br>';
      }
      if ($ram == 0) {
        echo '<span class="cifra0">Ramley sa: '.$ram.'</span><br>';
      } else {
        echo 'Ramley sa: <span class="cifra">'.$ram.'</span><br>';
      }
    echo '</div>';
    echo '<div class="col-lg-3 cajaDatos2" style="float:left;">';

      if ($spm == 0) {
        echo '<span class="cifra0">Suprimaren: '.$spm.'</span><br>';
      } else {
        echo 'Suprimaren: <span class="cifra">'.$spm.'</span><br>';
      }
      if ($temb == 0) {
        echo '<span class="cifra0">Temberati: '.$temb.'</span><br>';
      } else {
        echo 'Temberati: <span class="cifra">'.$temb.'</span><br>';
      }
      if ($tnd == 0) {
        echo '<span class="cifra0">Tecnodor: '.$tnd.'</span><br>';
      } else {
        echo 'Tecnodor: <span class="cifra">'.$tnd.'</span><br>';
      }
      if ($quimA == 0) {
        echo '<span class="cifra0">Química Aplicada srl: '.$quimA.'</span><br>';
      } else {
        echo 'Química aplicada srl: <span class="cifra">'.$quimA.'</span><br>';
      }
      if ($otro == 0) {
        echo '<span class="cifra0">Otros: '.$otro.'</span><br>';
      } else {
        echo 'Otros: <span class="cifra">'.$otro.'</span><br>';
      }
    echo '</div>';
  echo '</div>';

?>
