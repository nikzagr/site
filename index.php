<?php

    class Student 
    {

        public $name , $status ;

        function __construct($name , $status) {
            $this->name = $name;
            $this->status = $status;
            echo $this->name ;
        }
        
        function getStatus () {
            if ($this->status) {
                echo ' - присутствует'  ;
            } else {
                echo ' - отсутствует' ;
            }
        }

        function getName ($name) {
           echo '<br>'.'Имя студента - '. $this->name ;
        }

    };

    $student = new Student('Alex', 'absent');
    $student->getName('');
    $student->getstatus('');
    
    echo '<br>';
    
    
    $student = new Student('Max', '');
    $student->getStatus('');
    echo '<br>';

    $student = new Student('Ivan', 'a');
    $student->getStatus('');
    $student->getName('');

?>