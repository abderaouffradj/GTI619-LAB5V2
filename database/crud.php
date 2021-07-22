<?php
    class crud {
        private $database;

        function __construct($conn){ 
            $this-> database = $conn;
        }

        public function insert ($email, $nom, $prenom, $speciality){
                try{ 
                    // inserer les donnees dans la database
                    $sql = "INSERT INTO gti619(Email,firstname, lastname,speciality_id) VALUES (:email, :nom, :prenom, :speciality)";
                    $statment = $this -> database -> prepare($sql);

                    $statment-> bindparam(':email', $email);
                    $statment-> bindparam(':nom', $nom);
                    $statment-> bindparam(':prenom', $prenom);
                    $statment-> bindparam(':speciality', $speciality);

                    $statment->execute();
                    return true;

                }catch(PDOException $e){
                    echo $e-> getMessage(); 
                }
         }

        public function getAttendeesResidentiel(){
              $sql = "SELECT * FROM `gti619`  where `speciality_id` = 1";
              $result = $this ->database -> query($sql);

              return $result;
        }

        public function getAttendeesAffaire(){
              $sql = "SELECT * FROM `gti619`  where `speciality_id` = 2";
              $result = $this ->database -> query($sql);
              
              return $result;

        }

     }
