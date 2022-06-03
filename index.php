<?php

echo "Months of the Year\n";
sleep(1);

      
$getMonth = readline("\npls write the month number (from 1 to 12)");
$getMonth = (int) $getMonth;



function months($getMonth){
if ($getMonth == 1){
    echo "1st month of the year: January \n";
}else if ($getMonth == 2){
    echo "2nd month of the year: February\n";
}else if ($getMonth == 3){
    echo "3rd month of the year: March\n";
}else if ($getMonth == 4){
    echo "4th month of the year: April\n";
}else if ($getMonth == 5){
    echo "5th month of the year: May\n";
}else if ($getMonth == 6){
    echo "6th month of the year: June\n";
}else if ($getMonth == 7){
    echo "7th month of the year: July\n";
}else if ($getMonth == 8){
    echo "8th month of the year: August\n";
}else if ($getMonth == 9){
    echo "9th month of the year: September\n";
}else if ($getMonth == 10){
    echo "10th month of the year: October\n";
}else if ($getMonth == 11){
    echo "11th month of the year: November\n";
}else if ($getMonth == 12){
    echo "12th month of the year: December\n";
}else if ($getMonth > 12) {
    echo "pls write a number from 1 to 12\n";
}

}



for ($getOPtion= readline ("To continue type: 1, exit type: 2"); $getOPtion < 2 ; $getOPtion++ ){
    
    $getOPtion = (int) $getOPtion;
    months($getMonth);

}

  
    

?>