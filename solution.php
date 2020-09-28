<?

//Solution for https://www.hackerrank.com/challenges/circular-array-rotation/problem


function circularArrayRotation($a, $k, $queries) {

$result = '';
$count = count($a);

    if ($k>$count) {
         $k = $k%$count;
    }


    for($i=0; $i<count($queries);$i++){
        $tmp = $a[($queries[$i] - $k + $count)% $count];
        $result.="$tmp ";
    }

$res = explode(' ',$result);
return $res;
}

?>