<?php
  $num=$_GET['num'];
  $i=1;
  if($i < 10){
    $i="0$i";
  }
  switch ($num) {
    case 1:

      break;
    case 2:
      break;
    case 3:
      break;
    case 4:
      break;
    case 5:
      break;
    case 6:
      break;
    case 7:
      break;
    case 8:
      break;
    case 9:
      break;
    case 10:
        while($i <= 31) {
          echo'<option value="'.$i.'">'.$i.'</option>';
          $i++;
        }
      break;
    case 11:
      break;
    case 12:
      break;
  }


?>
