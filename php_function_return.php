<?php
function hello($name){
    if($name == 'Kraig'){
    return 'Hello Kraig!';    
    }
    else{
        return 'Hello Stranger!';
    }
}
$greeting = hello('Fred');
echo $greeting;
echo '<br>';
echo '<br>';
//adding up 2 values  but only 1 returned sum
function add_up($a,$b){
    return $a + $b;
}
$value = add_up(2, 4);
echo $value;
echo '<br>';
echo '<br>';
// returning multiple value using array and return
function add_arr($a,$b){
    $arr = array(
        $a,
        $b,
        $a+$b        
    );
    return $arr;
}
$value = add_arr(2, 4);
print_r($value);

echo '<br>';
echo '<br>';











?>