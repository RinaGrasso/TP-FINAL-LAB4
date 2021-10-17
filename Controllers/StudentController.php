<?php
    namespace Controllers;
    use DAO\StudentDAO as StudentDAO;
    use Models\Student as Student;

    class StudentController
    {
        private $studentDAO;

        public function __construct(){$this->studentDAO = new StudentDAO();}

        public function ShowAddView(){
            require_once(VIEWS_PATH."student-add.php");
        }

        public function ShowListView(){

            $studentList = $this->studentDAO->GetAll();
            require_once(VIEWS_PATH."student-list.php");
        }

        public function ShowMyProfile(){


            require_once(VIEWS_PATH."profile.php");
        }

        public function EditProfile(){

            require_once(VIEWS_PATH."edit-profile.php");

        }

        public function Add($name, $surname, $dni, $phone, $gender, $birthDate, $email, $studentId, $carrerId, $fileNumber, $active, $password){

            $student = new Student($name, $surname, $dni, $phone, $gender, $birthDate, $email, $studentId, $carrerId, $fileNumber, $active, $password);
            $this->studentDAO->Add($student);
            $this->ShowAddView();
        }
        public function signUp ($firstName, $SurName, $dni, $email,$password){

            $homeController = new HomeController();
    
            if($this->pdo->checkEmailRegistrado($email)){
            
                $student = new Student();
                $student->setFirstName($firstName);
                $student->setSurName($surName);
                $student->setDni($dni);
                $student->setEmail($email);
                $student->setPassword($password);
            
             
                $validation = false;
                /*
                if ($user->getFirstName() != '' && $user->getLastName() != '' && $user->getDni() < 0 && $user->getDni() != '' && $user->getPassword() != '') {
                    */
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $validation = true;
                    }
                /*}*/
                
                  if($validation){
                    
                      //ACA VA LA PAGINA DIRECTAMENTE
                      $this->pdo->create($student);
                     //INICIA SESSION ANTES
                     if(!isset($_SESSION['userLog'])){
                         $_SESSION['studentLog'] = $student;
                         $homeController = new HomeController();
                         $homeController->viewProfile();  
                        }
                    }
                
            }else{
                echo "<script>alert('The email entered already exists, please enter another');";
                echo "</script>";
                $homeController->viewSignUp();
            }
        }
    
            
        /*public function getByEmail($email){
            $userDAO = $this->pdo->getByEmail($email);
        }*/
        
        public function login($email,$pass){
    
            $homeController = new HomeController();
    
            $studentDAO = new StudentDAO();
            try{
                $student = $studentDAO->checkStudent($email,$pass);
            }catch(Exception $e){
                   throw new Exception($e->get_message());
            }
    
           
            if(isset($student))
            {    
                 if($student->getEmail() =="admin@gmail.com" && $student->getPassword() =="admin123")
                 {
                    $_SESSION['studentLog'] = $student;
                    $homeController->viewHomeAdmin();
                 }
                 else{
                      $_SESSION['studentLog'] = $student;
                      $homeController->Index();
                 }
    
            }
            else 
            {
                echo '<script>alert("Datos Incorrectos, vuelva a intentar");</script>';
    
               $homeController->viewSingIn();
            }
            
        }
    
        public function logout(){
    
            $homeController = new HomeController();
    
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
            unset($_SESSION['userLog']);
            $homeController->Index();
        }
    }
?>