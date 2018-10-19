--TEST--
Returs value from both original and overriding methods
--FILE--
<?php
class Test {
    public function method(){
        return "original";
    }
}

$no = 1;
dd_trace("Test", "method", function() use ($no){
    return $this->method() . "-override " . $no . PHP_EOL;
});

echo (new Test())->method();

?>
--EXPECT--
original-override 1
