<form method="post">
    <label>
        <input type="number" name="input" placeholder="Nhập số">
    </label>
    <button>Convert</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $input = $_POST['input'];
    echo convertToBinary($input);
}
function convertToBinary($number){
    $stack = new SplStack();
    $quotient = $number;
    while ($quotient != 0){
        $remainder = $quotient % 2;
        $quotient = floor($quotient/2);
        $stack->push($remainder);
    }
    $result = '';
    while (!$stack->isEmpty()){
        $result = $result . $stack->pop();
    }
    return $result;
}

