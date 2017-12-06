<?php


namespace App;
    use App\Controllers\controlleCadUser;

    class app{

        public function index(){
            $passo = (isset($_GET['p']))? $_GET['p']:"";
            $dir = "up/";
            $past = "temp/";

             //restringindo o tipo de arquivo
             $extImg = array('jpg','png','gif'); 
          

            switch ($passo){
               
                case "cadastrar":
                    $cadUser = new controlleCadUser();

                    $cadUser->cadUsuario($dir,$past,$extImg);
                   // $cadUser->cadastroUser();
                    
                    break;
                default:
                    require_once("Views/cadastro.php");
            }

           

        }

       
    }