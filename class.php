<?php
class student{
    public $name;
    public $age;

}

$s = new student();
$s->name = "nayeem";
$s->age = 26;

var_dump($s);
echo "<br>";

echo "<br>";
echo $s->name;
echo $s->age;
?>
<?php
class emp{
    public $name;
    public $address;

    public function __construct($name, $address){
        $this->name = $name;
        $this->address = $address;
    }

    public function show(){
        echo $this->name;
        echo $this->address;
    }
}
echo "<br>emp class <br>";
$emp = new emp("msr nayeem", 26);
echo $emp->show();
?>