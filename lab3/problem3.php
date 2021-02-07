<!DOCTYPE html>
<html>
	<head></head>
	<body>
        
       <?php
        
        $length=5;
        $width=6;
        
        if($length == $width)
        {
          echo "the shape is a square" ; 
        }
        else
        {
            $area=$length*$width;
            $perimeter=2*($length+$width);
            echo "Area is $area ";
            echo " Perimeter is $perimeter";
        
        }
         
        ?> 
        
	      
	</body>
</html>