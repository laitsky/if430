<?php
    class User{
        private $email;
        private $password;

        public function getEmail() { return $this->email; }

        public function setEmail($email) { $this->email = $email; }
        public function setPassword($password) { $this->password = $password; }
    }
