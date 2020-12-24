<?php
include_once 'stack.php';
$arr = new Stack();
try {
    $arr->push(1);
    $arr->push(2);
    $arr->push(3);
    $arr->push(4);
    $arr->push(5);
    $arr->pop();
    $arr->pop();
    $arr->pop();
    $arr->push(6);
    $arr->push(7);
    $arr->pop();
    $arr->pop();
    $arr->pop();
    $arr->pop();

    echo "<pre>";
    var_dump($arr);
} catch (RunTimeException $exception){
    echo $exception->getMessage();
}

