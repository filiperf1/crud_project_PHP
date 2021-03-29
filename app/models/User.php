<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }


        public function getUsers() {
            $this->db->query("SELECT * FROM users");
            $result = $this->db->resultSet();
            return $result;
        }

        public function addUser($data){
            $this->db->query('INSERT INTO users (user_name, user_cpf, user_birthdate, user_email, user_phone)VALUES (:user_name, :user_cpf, :user_bday, :user_email, :user_phone)');

            $this->db->bind(':user_name', $data['user_name']);
            $this->db->bind(':user_cpf', $data['user_cpf']);
            $this->db->bind(':user_bday', $data['user_bday']);
            $this->db->bind(':user_email', $data['user_email']);
            $this->db->bind(':user_phone', $data['user_phone']);

            if($this->db->execute()){
                return true;
            }else {
                return false;
            }

        }
        
    }
    