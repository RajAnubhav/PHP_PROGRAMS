<?php
//  for each
echo "Welcome to the php tutorial for foreach<br>";

// // for($i=0; $i <count($arr); $i++){
    //     // echo $arr[$i];
    //     // echo "<br>";
    // // }
    
$arr = array("bananas","apples","harpic","bread");
// better way to do this - foreach loops
foreach ($arr as $value){
    echo "$value,<br>";
}
?>