<?php
    class Pages extends Controller {
        public function __construct(){
            $this->userModel = $this->model('User');
        }

        public function index(){
           $users = $this->userModel->getUsers();

           $data = [ 
               'users' => $users
           ];

            $this->view('pages/index', $data);
        }
         
        public function create(){
            
            
            $data = [
                'user_name' => '',
                'user_cpf' => '',
                'user_bday' => '',
                'user_email' => '',
                'user_phone' => ''
            ];
                       


            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Cleaner
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'user_name' => trim($_POST['user_name']),
                    'user_cpf' => trim($_POST['user_cpf']),
                    'user_bday' => trim($_POST['user_bdate']),
                    'user_email' => trim($_POST['user_email']),
                    'user_phone' => trim($_POST['user_phone'])
                ];
                if($this->userModel->addUser($data)){
                    header("Location: " . URLROOT . "/pages");
                }else {
                    die('Something went wrong!');
                }
            }
            $this->view('pages/create', $data);
            
        }

        public function update($id){
            $edit_user = $this->userModel->findUserById($id);
            $data = [
                'users' => $edit_user,
                'user_name' => '',
                'user_cpf' => '',
                'user_bdate' => '',
                'user_email' => '',
                'user_phone' => ''
                
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'user_id' => $id,
                    'user_name' => trim($_POST['user_name']),
                    'user_cpf' => trim($_POST['user_cpf']),
                    'user_bdate' => trim($_POST['user_bdate']),
                    'user_email' => trim($_POST['user_email']),
                    'user_phone' => trim($_POST['user_phone'])
                ];

                

                var_dump($data);
                if($this->userModel->updateUser($data)){
                    header("Location: " . URLROOT . "/pages");
                }else {
                    die('Something went wrong!');
                }
            }
            $this->view('pages/update', $data);

        }

        public function delete($id){
            $edit_user = $this->userModel->findUserById($id);
            $data = [
                'users' => $edit_user,
                'user_name' => '',
                'user_cpf' => '',
                'user_bdate' => '',
                'user_email' => '',
                'user_phone' => ''
                
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                if ($this->userModel->deleteUser($id)) {
                    header("Location: " . URLROOT . "/pages");
                }else {
                    die('Something went wrong!');
                }
            }

        }

        public function info($id){
            $user = $this->userModel->findUserById($id);
            $data = [
                'users' => $user
            ];

            $this->view('/pages/info', $data);
        }
    }