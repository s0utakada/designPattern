<?php

    class GreatestCommonDivisor {
        
        static function get($a, $b) {
            echo $a.'と'.$b.'の最大公約数を計算中・・・'."\n";
            $r = $a % $b;
            if($r === 0) {
                return $b;
            }
            return GreatestCommonDivisor::get($b, $r);
        }
        
    }
    
    $a = 3;
    $b = 21;
    $answer = GreatestCommonDivisor::get($a,$b);
    
    echo $a.'と'.$b.'の最大公約数は'.$answer;
    
?>
