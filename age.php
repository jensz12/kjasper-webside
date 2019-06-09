<?php
  //date in mm/dd/yyyy
  $birthDate = "01/06/2000";
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
?>
{"age":"<?php echo $age; ?> år og har fødselsdag den 6. januar "}