<?php

function allPossiblePermutation($arr, $result= [])
{
    $arr = array_unique($arr);
    if (empty($arr)) {
        echo join(' ', $result). "<br>";
    }else{
        for ($i=count($arr) - 1; $i >=0 ; $i--) { 
            $nArr = $arr;
            $nRes = $result;
            list($remElement) = array_splice($nArr, $i, 1);
            array_unshift($nRes, $remElement);
            allPossiblePermutation($nArr, $nRes);
        }
    }
}

$sampleArr = [1,2,3,6,4];
allPossiblePermutation($sampleArr);

?>