<?php 
class user{
        // private database object\
        private $database;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->database = $conn;
        }

        public function insertUser($email,$password){
            try {
                $result = $this->getUserbyEmail($email);
                if($result['num'] > 0){
                    return false;
                } else{
                    $new_password = md5($password.$email);
                    // define sql statement to be executed
                    $sql = "INSERT INTO users (email,password) VALUES (:email,:password)";
                    //prepare the sql statement for execution
                    $stmt = $this->database->prepare($sql);
                    // bind all placeholders to the actual values
                    $stmt->bindparam(':email',$email);
                    $stmt->bindparam(':password',$new_password);
                    
                    // execute statement
                    $stmt->execute();
                    return true;
                }
                
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getUser($email,$password){
            try{
                $sql = "select * from `users` where `email` = :email AND `password` = :password";
                $stmt = $this->database->prepare($sql);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':password', $password);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
           }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getUserbyEmail($email){
            try{
                $sql = "select count(*) as num from users where email = :email";
                $stmt = $this->database->prepare($sql);
                $stmt->bindparam(':email',$email);
                
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
            }
        }

        public function getUsers(){
            try{
                $sql = "SELECT * FROM users";
                $result = $this->database->query($sql);
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }
    ?>