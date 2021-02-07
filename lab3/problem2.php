<!DOCTYPE html>
<html>
	<head></head>
	<body>
         
<?php
	
$marks= 90;
	
if($marks>60 && $marks<70)
	 
{
	   
echo "Grade:C  &  marks:65";	
	 
}
	
elseif ($marks>70 && $marks<80)
	
{
	   
echo "Grade:B  &  marks:75";
	
}

elseif ($marks>80 && $marks<90)
	
{
	   
echo "Grade:A  &  marks:85";
	
} 
elseif ($marks>=90)
	
{
	   
echo "Grade:A+  &  marks:99.99";
	
}
else{ echo "F";}

?>


       
     </body>
</html>