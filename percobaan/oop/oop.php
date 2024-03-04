<?php 
// apa itu class dan instance
class person{
    public string $name;
    public string $surname;
    private ?int $age;
    // protected int $age;
    public static int $counter = 0;

    // instance
    // function construct yang akan disegera eksekusi
    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        // echo $name.' '.$surname;
        // $this->age = null;
        self::$counter++;

    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
    public static function getCounter(){
        return self::$counter;
    }
}


// $p = new person();
// $p->name = 'fachmi';
// $p->surname = 'ramadhan';

// echo "<pre>";
// var_dump($p->name);
// echo "</pre>";

?>