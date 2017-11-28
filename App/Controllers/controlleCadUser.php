<?php
    namespace App\controllers;

    class controllecaduser{

        public function cadUsuario($dir,$past,$extImg){
            
                        //setando variaveis
                        $foto = "extensao nao compativavel";
                        $arquivo = $_FILES['arquivo'];
                        $file = $dir.$arquivo['name'];
                    
                        
                        //pegando a extensão
                        $separador = explode(".", $arquivo['name']);
                        //transformando em minusculo
                        $ext = strtolower(end($separador));
            
                         //verificar posição do elemento
                         $statusPosicao = array_search($ext, $extImg);
                         $statusPosicao;
            
                        //cerifica se a extenção existe no array e retorna a posição dele
                       if($statusPosicao ===0 or $statusPosicao === 1 or $statusPosicao === 2){
                                $nome_atual = "tmp.".$ext; //nome que dará a imagem
                                $tmp = $_FILES['arquivo']['tmp_name']; //caminho temporário da imagem
            
                            //função upload img
                            if(move_uploaded_file($arquivo['tmp_name'], $past.$nome_atual)){
                                //retorna para função ajaxForm
                                echo "<img src='temp/".$nome_atual."' id='img'class='img-circle' width='180' height='180' id='previsualizar' alt='Cinque Terre'> ";
                                
                            }
            
                        }else{
                            echo " Erro com a extensão da imagem!!!";
                            echo "extensão = ".$ext."<br/>";
                            echo " Arquivo name = ".$arquivo['name']."<br/>";
                        }
                    }
            
    }