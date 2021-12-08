<?php
    echo "Welcome to the php tutorial on functions";
    echo "<br><br>";
    function processMarks($marksArr){
        $sum = 0;
        foreach ($marksArr as $value){
            $sum += $value;
        }
        return $sum;
    }  
$rohanDas = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($rohanDas);

$harry = [99, 98, 93, 94, 17, 92];
$sumMarksHarry = processMarks($harry);

echo "Total marks obtained by rohan das out of 600 is $sumMarks"; 
echo "<br>";
echo "Total marks obtained by Harry out of 600 is $sumMarksHarry"; 


?>