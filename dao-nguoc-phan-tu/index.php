<?php
$stack = new SplStack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
for ($i=0;$i<3;$i++){
    echo $stack->pop();
}
