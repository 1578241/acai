<?php
/**
 * @Author: Marte
 * @Date:   2018-10-09 10:38:04
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-11-02 14:49:40
 */
$data=array(54,13,85,123,45,78,54);
$sum=count($data);
for ($i=0; $i<$sum-1; $i++){
    for ($j=0; $j <$sum-1-$i ; $j++) {
        if($data[$j]>$data[$j+1]){
            $temp=$data[$j];
            $data[$j]=$data[$j+1];
            $data[$j+1]=$temp;
        }

    }
}
foreach ($data as $k => $v) {
    echo "  ".$v;
}
?>