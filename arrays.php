<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/
$food =[
        "pizza",
        "water",
        "grape",
        "onion"
       ];
echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2] . "<br>";
echo $food[3] . "<br>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>
<li>$food[0]</li>
<li>$food[1]</li>
<li>$food[2]</li>
<li>$food[3]</li>
</ul>";





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/


$food_assoc = ["pizza" =>"main counrse" ,
               "water" => "drink",
               "onion" => "salad",
               "orange" => "fruit"


];
echo  "pizza" . " | " . $food_assoc["pizza"];
echo "<br>";
echo  "water"." | ". $food_assoc["water"];
echo"<br>";
echo  "onion"." | ". $food_assoc["onion"];
echo "<br>";
echo  "orange"." | ". $food_assoc["orange"];



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
$food_assoc = [
"pizza" => [
"type" => "main course",
"origin" => "Italy"
],
"water" => [
"type" => "drink",
"origin" => "Canada"
],
"onion" => [
"type" => "salad",
"origin" => "China"
],
"orange" => [
"type" => "friut",
"origin" => "Korea"
]
];

echo "pizza". " | ". $food_assoc ["pizza"]["type"]." | ".$food_assoc ["pizza"]["origin"];
echo "<br>";
echo "water". " | ". $food_assoc ["water"]["type"]." | ".$food_assoc ["water"]["origin"];
echo "<br>";
echo "onion". " | ". $food_assoc ["onion"]["type"]." | ".$food_assoc ["onion"]["origin"];
echo "<br>";
echo "orange". " | ". $food_assoc ["orange"]["type"]." | ".$food_assoc ["orange"]["origin"];
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo 
"<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>{$food_assoc["pizza"]["type"]}</td>
    <td>{$food_assoc["pizza"]["origin"]}</td>
  </tr>
  <tr>
    <td>water</td>
    <td>{$food_assoc["water"]["type"]}</td>
    <td>{$food_assoc["water"]["origin"]}</td>
  </tr>
  <tr>
    <td>onion</td>
    <td>{$food_assoc["onion"]["type"]}</td>
    <td>{$food_assoc["onion"]["origin"]}</td>
  </tr>
   <tr>
    <td>orange</td>
    <td>{$food_assoc["orange"]["type"]}</td>
    <td>{$food_assoc["orange"]["origin"]}</td>
  </tr>
</table>"
?>
<style>
table, th, td {
  border: 0.5px solid black;
  text-align: left;
}
</style>
