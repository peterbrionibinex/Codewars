<?php

class Salesman extends Person{
        public function __construct($name, $age){
             $this->name = $name;
             $this->age = $age;
             $this->occupation = "Salesman";
        }
        public function introduce(){
            return "Hello, my name is ".$this->name.", don't forget to check out my products!";
        }
    }
    
    class ComputerProgrammer extends Person{
        public function __construct($name, $age){
             $this->name = $name;
             $this->age = $age;
             $this->occupation = "Computer Programmer";
        }
        
        public function describe_job(){
            return "I am currently working as a(n) ".$this->occupation.", don't forget to check out my Codewars account ;)";
        }
    }
    
    class WebDeveloper extends ComputerProgrammer{
        public function __construct($name, $age){
             $this->name = $name;
             $this->age = $age;
             $this->occupation = "Web Developer";
        }
        public function describe_job(){
            return parent::describe_job()." And don't forget to check on my website :D";
        }
        public function describe_website(){
            return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
        }
        
    }
    
    $obj = new Salesman ("Allan",62);
    $obj1 = new ComputerProgrammer ("Shiro", 22);
    $obj2 = new WebDeveloper("Shiro", 30);
    return  $obj->introduce();
    return "\n";
    return $obj1->introduce();
    return "\n";
    return $obj1->describe_job();
    return "\n";
    return $obj2->introduce();
    return "\n";
    return $obj2->describe_job();
    return "\n";
    return $obj2->website();