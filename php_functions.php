<?php
//treehouse 
// php function basics

function kraig(){
    echo 'hi kraig';
}
kraig();
echo '<br>';
echo '<br>';
function hello(){
    echo 'Hello World!';
}
   //calling the function 
    hello();
echo '<br>';
echo '<br>';
    
$current_user = 'Mike'; //this is outside of the function so we will need to 
//add it as a global variable inside of the function below
  function is_mike(){
      global $current_user;
      if($current_user == 'Mike'){
      echo 'It is Mike';
      }
      else{ 
         echo 'Is is not Mike';
      }
   }  
   is_mike();
echo '<br>';
echo '<br>';

//practice function with a global variable
$outside_global = 'perfectable';
function practice_global(){
    echo 'tester bester<br>';
    global $outside_global;
    if($outside_global == 'perfectable'){
        echo 'it is perfect';
    }
    else{
        echo 'no it is not perfect';
    }
}
practice_global();
echo '<br>';
echo '<br>';
// passing the function hello2 a variable/argument
function hello2($name){
    echo "Hello, $name!";
}
   hello2('Kraig');

echo '<br>';
echo '<br>';

// creating an array and passing that into a foreach function
function hello3($arr){
    if(is_array($arr)){
       foreach($arr as $name1){
           echo "Hello $name1, how's it going?<br>";
        }
      }
    else{
        echo 'Hello friends!';
        }
    }
   $names = array(
       "Kraig",
       "Tom",
       "Bill",
       "Rick"
       );
   hello3($names);
   
   echo '<br>';
   echo '<br>';
// creating an array and passing that into a foreach function
   function soda($whitepop){
       foreach($whitepop as $whitepop){
           echo "bubbling ".$whitepop." stuff <br> ";
       }
   }
   
   $whitepop = array('fizz', 'pop', 'sizzle', 'fizzer');
   soda($whitepop);//calling the function and passing $whitepop 
   
   ?>
