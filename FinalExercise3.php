<?php
class EvenNumber{
    public $var1 = 2;
    public $var2 = 4;
    public $var3 = 6;
    public $var4 = 8;
    public $var5 = 10;

    function printIteration(){
        foreach($this as $key => $val)
        echo " $key: $val  \n";
    }

    function __clone(){
        foreach($this as $key => $val)
        echo "clone-$key: $val  \n";
    }
}

$obj = new EvenNumber();

//Original Object
echo "Array:<br>";
$obj->printIteration();

//Clone Object
echo "<br>Cloned Array<br>";
$clone1 = clone $obj;

//Serialize
$data = serialize($obj);
file_put_contents('Text1.txt', $data);

//Unserialize
$data = file_get_contents('Text1.txt');
$unserialize = unserialize($data);
echo "<br>Unserialized<br>";
$unserialize->printIteration();

/*
Bernabe, Alexandra B.
  4ITH
*/
?>