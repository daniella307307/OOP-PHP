<?php
class Add
{
   public $num1;
   public $num2;
   public function add2numbers($num1,$num2){
    $sum=$num1+$num2;
    echo "the sum of the 2 numbers $num1 and $num2 is =$sum ";

   }
}
//create a new object
$addition=new Add();
$addition->add2numbers(15,10);
?>