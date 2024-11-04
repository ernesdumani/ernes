<?php

//$num = -1;
//if($num<0){
  //   echo "$num is less than 0";
//}
  

///$age = 16;
//if(($age> 14) && ($age< 18)){
    //echo "sale for you!!";
//}

//($age < 18){
   // echo "you are an adult";

//}else {
   // echo "you are underage";
//}
//($num<O){
//echo " the v alue of /$num is a negative number!!!";
//}elseif{$num==0}{
// echo " the value of/$num is equal to zero";

//}else{
    //echo "the value of/$num is a positiove number";
//}
// Write a program that takes a student's score as input and outputs their grades with this system: A: 90-100, B: 80-89, C:70-79, D: 60-69, F: below 60
//$score = 100
//if (($score >= 90) && ($score =100 )){
//    echo "you got an A";
//}




//$x =5;
//function localVariable(){
 //  global $x;
 //   $y = 10;
 //   echo $x;
  //  echo $y;
//}
//localVariable();
//function callCounter() {
  //  static $count = 0;
  //  $count++;
  //  echo "the value of count variable is : $count <br>";

//}
//callCounter();
//callCounter();

//$sports = array('football', 'basketball', 'handball', 'volleyball');
//array_push($sports, 'golf');
//var_dump($sports);

//$sports = array('football', 'basketball', 'handball', 'volleyball');
//array_pop($sports);
//var_dump($sports);
//$x = 5;
//$y = 7;

//function sum() {
 //   global $x, $y;
//    $y = $x + $y;

//}
//sum();
//echo $y;
//$sports = ['football', 'basketball', 'handball', 'volleyball'];
//for($i=0; $i<4; $i++) {
//    echo $sports[$i],  "\n";
//}
//$sports = array('football', 'basketball', 'handball', 'volleyball');
//array_unshift($sport, 'Tennis');
//var_dump($sports);

//$sports = array('football', 'basketball', 'handball', 'volleyball');
//array_shift($sports);
//var_dump($sports);
//$sports = array('football', 'basketball', 'handball', 'volleyball');

//$output1  = array_slice($sports, 2);
//$output2 = array_slice($sports, -2, 1);
//$output3 = array_slice($sports, 0 , 3);

//var_dump($output1, $output2, $output3);
//$myvalues = array(12, 24, 34, 48);
//var_dump(array_sum($myvalues));
//$weekly_temperature = array(25, 35, 23,12 ,24 ,13);
//$average = array_sum($weekly_temperature)/6;
//echo ($average);

//function sumArray($numbers) {
  //  if (!is_array($numbers)) {
  //      return "Input must be an array.";
  //  }
 //   return array_sum($numbers);
//}
//$numbers = [1, 2, 3, 4, 5];
//$result = sumArray($numbers);
//echo "The sum is: " . $result;
//$dogs = array(
 // array("chihuaua", "Mexico", 25),
  //array("husky", "Siberia", 15),
  //array("bulldog", "england", 24),
//
//)

 $dogs = array(
  array("Chihuahua", "Mexico", 25),
  array("Husky", "Siberian",15),
  array("Bulldog", "England",10)
);

echo $dogs[0][0]. " Origin ".$dogs[0][1]. ", Life Span ". $dogs[0][2]. "<br>";
echo $dogs[1][0]. " Origin ".$dogs[1][1]. ", Life Span ". $dogs[1][2]. "<br>";
echo $dogs[2][0]. " Origin ".$dogs[2][1]. ", Life Span ". $dogs[2][2]. "<br>";

for($row = 0; $row<3; $row++){
  echo "<p><b>Row Numbber $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col<3; $col++){
    echo "<li>".$dogs[$row][$col]."</li>";
  }
  echo "</ul>";
}


echo "</table>";
$array4D = [
  [
      [
          ['Item 1-1-1-1', 'Item 1-1-1-2'],
          ['Item 1-1-2-1', 'Item 1-1-2-2']
      ],
      [
          ['Item 1-2-1-1', 'Item 1-2-1-2'],
          ['Item 1-2-2-1', 'Item 1-2-2-2']
      ]
  ],
];

echo "<table border='1'>";

for ($i = 0; $i < count($array4D); $i++) {
  echo "<tr><td colspan='2'>Iphone 1: $i</td></tr>";
  
  for ($j = 0; $j < count($array4D[$i]); $j++) {
      echo "<tr><td>Iphone 2: $j</td><td>";

      for ($k = 0; $k < count($array4D[$i][$j]); $k++) {
          echo "<div>Iphone 3: $k</div>";
          echo "<ul>";

          for ($l = 0; $l < count($array4D[$i][$j][$k]); $l++) {
              echo "<li>Iphone 4: $l - " . $array4D[$i][$j][$k][$l] . "</li>";
          }

          echo "</ul>";
      }
      echo "</td></tr>";
  }
}

echo "</table>";

?>