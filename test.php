<?php

class Test {
    private $arr = [];

    public function put($something) {
        $this->arr[] = $something;
    }

    public function get($name) {
        foreach($this->arr as $key => $item) {
            if($item["name"] == $name) {
                unset($this->arr[$key]);
                return $item;
            }
        }
    }

    public function all() {
        foreach($this->arr as $key => $item) {
            echo $key."\t".$item["name"]."\n";
        }
    }
}

$test = new Test();
$test->put(["name"=>"Oksana"]);
$test->put(["name"=>"Irina"]);
$test->put(["name"=>"Natalya"]);

$test->all();
echo "-------------\n";
$girl = $test->get("Irina");

$test->all();
echo "=============\n";
print_r($girl);