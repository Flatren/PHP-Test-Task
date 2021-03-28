<?php
if (isset($_POST['year']) && $_POST['year']) {
    if(is_numeric($_POST['year'])){
	    $y  = (int)$_POST['year'];
	    if($y>=0){
		    if($y % 400 == 0 || ($y % 100 != 0 && $y % 4==0))
		    {
		    	 echo "\"ДА\"";
		    }
		   	else{echo "\"НЕТ\"";}
	   	}
	   	else{
	   		echo "\"ОШИБКА ВО ВХОДНЫХ ДАННЫХ\"";
	   	}
	}
	else {
    	echo "\"ОШИБКА ВО ВХОДНЫХ ДАННЫХ\"";
	}
}
else{
    echo "\"ОШИБКА ВО ВХОДНЫХ ДАННЫХ\"";
   }
?>