<?php
$stack = new SplStack();
$queue = new SplQueue();
$str = 'abobao';
$str1 = str_split($str);
foreach ($str1 as $item){
    $stack->push($item);
    $queue->enqueue($item);
}
for ($i=0;$i<count($str1);$i++){
    if ($stack->pop() == $queue->dequeue()){
        echo 'Chuỗi có đối xứng';
        break;
    } else {
        echo 'Chuỗi không đối xứng';
        break;
    }
}
