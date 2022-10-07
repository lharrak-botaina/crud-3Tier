<?php
    class Student {

        private $id;
       
        private $firstName;
        private $lastName;
        private $birthday;
       
       

        


        
        

      

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($value){
            $this->firstName = $value;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($value){
            $this->lastName= $value;
        }

        public function getBirthday(){
            return $this->birthday;
        }

        public function setBirthday($value){
            $this->birthday= $value;
        }




        
        




      
    }
?>