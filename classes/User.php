<?php
    require_once "Database.php";

    class User extends Database
    {
        public function store($request)
        {
            $first_name = $request['first_name'];
            $last_name = $request['last_name'];
            $username = $request['username'];
            $password = password_hash($request['password'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (first_name, last_name, username, password)
                    VALUES ('$first_name', '$last_name', '$username', '$password')";

            if($this->conn->query($sql)){
                header('location: ../views');
                exit;
            } else {
                die("ERROR in creating the user: " . $this->conn->error);
            }
        }
        
        public function login($request)
        {
            $username = $request['username'];
            $password  = $request['password'];

            $sql = "SELECT * FROM users WHERE username = '$username'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){

                $user = $result->fetch_assoc();

                if(password_verify($password, $user['password'])){

                    session_start();
                    $_SESSION['id']         = $user['id'];
                    $_SESSION['username']   = $user['username'];
                    $_SESSION['full_name']  = $user['first_name'] . " " . $user['last_name'];

                    header("location: ../views/dashboard.php");
                    exit;
                } else {
                    die("PASSWORD IS INCORRECT");
                }
            } else {
                die("USERNAME NOT FOUND");
            }
        }

    }
?>