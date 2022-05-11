<?php
class SortedArray
{
    public $arr = [];

    public function __construct($arr)
    {   
        $this->arr = $arr; 
    }

    public function sorted($order='asc')
    {
        switch($order) {
            case "asc":
                $tempArr =  $this->arr;
                $len = count($tempArr);
                for($i = 0; $i<$len-1; $i++) {
                     for($j = $i+1; $j<$len; $j++) {
                         if($tempArr[$i] > $tempArr[$j]) {
                             $temp = $tempArr[$i];
                             $tempArr[$i] = $tempArr[$j];
                             $tempArr[$j] = $temp;
                         }
                     }
                }
                return $tempArr;
                break;
            case "desc":
                $tempArr = $this->arr;
                $len = count($tempArr);
                for($i = 0; $i<$len-1; $i++) {
                     for($j = $i+1; $j<$len; $j++) {
                         if($tempArr[$i] < $tempArr[$j]) {
                             $temp = $tempArr[$i];
                             $tempArr[$i] = $tempArr[$j];
                             $tempArr[$j] = $temp;
                         }
                     }
                }
                return $tempArr;
                break;

        }
    
    }

    public function reversed()
    {   
      $len = count($this->arr);
      $rev_arr = [];
      foreach(range($len-1, 0) as $i) {
        $rev_arr[] = $this->arr[$i];
      }
      return $rev_arr;
    }
}


$sampleArr = [1,9,3,6,4];
$arr_sorting = new SortedArray($sampleArr);
$output = $arr_sorting->sorted();
var_dump($output);
echo "<br>";
$output = $arr_sorting->sorted("desc");
var_dump($output);
echo "<br>";
$output = $arr_sorting->reversed();
var_dump($output);

?>