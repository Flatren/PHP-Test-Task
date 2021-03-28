<?php
function GetCountSmuzy($countHipster, $countSmuzy)
{
    $OnePersonCountSmuzy =(int)($countSmuzy / $countHipster);
	return $OnePersonCountSmuzy;
}
print_r("Каждый хипстер выпьет ". GetCountSmuzy(4,9) . " смузи");
?>