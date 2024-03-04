<?php 
require_once ("oop.php");

class student extends person{
    public string $studentId;

    public function __construct($name, $surname, $studentId)
    {
        parent::__construct($name, $surname);
        $this->age = 18;
        $this->studentId = $studentId;
    }
}

?>