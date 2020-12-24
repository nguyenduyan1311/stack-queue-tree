<?php
include_once 'queue.php';
$queue = new Queue();
try {
    $queue->enqueue(1);
    $queue->enqueue(2);
    $queue->enqueue(3);
    $queue->dequeue();
    $queue->dequeue();
    $queue->enqueue(4);
    $queue->enqueue(5);
    $queue->dequeue();
    $queue->dequeue();
    $queue->dequeue();

    while(!$queue->isEmpty()){
        echo $queue->dequeue(). "" . "<br>";
    }
} catch(RuntimeException $exception){
    echo $exception->getMessage();
}

