<?php
class Stack {
    protected $stack;
    protected $limit;
    public function __construct($limit = 6){
        $this->stack = array();
        $this->limit = $limit;
    }
    public function push($item){
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        }
    }
    public function isEmpty() {
        return empty($this->stack);
    }
    public function pop(){
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty!');
        } else {
            array_shift($this->stack);
        }
    }
    public function top() {
        return current($this->stack);
    }
}