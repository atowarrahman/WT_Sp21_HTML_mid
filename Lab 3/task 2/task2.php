<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php
$marks=75;

if ($marks>=90) {
           echo " the grade is A+";
          }
 else if($marks>80 & $marks<90 ){
           echo "the grade is A";
         }
         else if($marks>70 & $marks<80 ){
           echo "the grade is B";
         }
         else if($marks>60 & $marks<70 ){
           echo "the grade is C";
         }
         else{
         	echo "the grade is F";
         }

?>

</body>
</html>