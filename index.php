<?php
    function calculation_over()
{
    $balls = 164;
    $balls2 = 2;
    $balls -= $balls % 6;
    $total_overs = $balls / 6;
    $f = $balls2 % 6;
    echo $total_overs_calculated = (float)$total_overs.'.'.$f;
}
calculation_over();



// function total_overs(float $balls){
// if ($balls%6 == 0){
//     return $balls/6;
// 	return $balls%6/10 + $balls;
// }
//     }
//    echo (float)total_overs();
?>