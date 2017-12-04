<?php
    namespace App\controllers;
    use App\Models\Entidades\usuario;
    use App\Libs\canvas;

    class controllecaduser{
        private $caminhoOriginal = "teste";
        private $endFotoUserOrigin = "imgUserOrigin/";
        private $endFotoUser = "imgUser/";
        private $nomeIgmOrigin;
        private $urlFotoRed;
        private $urlFotoOrigin;
        public function cadUsuario($dir,$past,$extImg){
            
                        //setando variaveis
                        $foto = "extensao nao compativavel";
                        $arquivo = $_FILES['arquivo'];
                        $file = $dir.$arquivo['name'];
                        $this->nomeImgOrigin = $arquivo['name'];
                        echo $this->nomeImgOrigin;


                    
                        
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
                                $this->caminhoOriginal = $past.$nome_atual;
                                //retorna para função ajaxForm
                                //echo "<img src='temp/".$nome_atual."' id='img'class='img-circle' width='180' height='180' id='previsualizar' alt='Cinque Terre'> ";
                               echo "<img src=' imgUser/wallpaper-14459.jpg' id='img'class='img-circle' width='180' height='180' id='previsualizar' alt='Cinque Terre'> ";
                              
                               
                            }

                        }else{
                            echo " Erro com a extensão da imagem!!!";
                            echo "extensão = ".$ext."<br/>";
                            echo " Arquivo name = ".$arquivo['name']."<br/>";
                        }
                       
                    }

            public function cadastroUser(){

                        //salvar  img do usuario
                         $img = new canvas();
                         //salvar imagem original
                         $img->carrega($this->caminhoOriginal)
                         ->grava($this->endFotoUserOrigin.$this->nomeImgOrigin);
                         //salvar imagem reduzida
                         $img->carrega( $this->caminhoOriginal )->hexa( '#FF005C' )
                         ->redimensiona( 90, 90, 'preenchimento' )
                         ->grava($this->endFotoUser.$this->nomeImgOrigin);
                         //url da foto reduzida
                         $this->urlFotoRed= $this->endFotoUser.$this->nomeImgOrigin;
                        //url foto original
                         $this->urlFotoOrigin = $this->endFotoUserOrigin.$this->nomeImgOrigin;
                       
                         //setando as variaveis
                        $nome = isset($_POST["nome"])?$_POST["nome"]:"";
                        $email= isset($_POST["email"])?$_POST["email"]:"";
                        $dataNascimento =isset($_POST["data"])?$_POST["data"]:"";
                        $cpf = isset($_POST["cpf"])?$_POST["cpf"]:"";
                        $rg = isset($_POST["rg"])?$_POST["rg"]:"";
                        $firstContato =isset($_POST["cel"])?$_POST["cel"]:"";
                        $secondContato =isset($_POST["celWhats"])?$_POST["celWhats"]:"";
                        $urlFotoRed = $this->urlFotoRed;
                        $urlFotoOrigin = $this->urlFotoOrigin;
                        $rua =isset($_POST["rua"])?$_POST["rua"]:"";
                        $bairro = isset($_POST["bairro"])?$_POST["bairro"]:"";
                        $cidade= isset($_POST["cidade"])?$_POST["cidade"]:"";
                        $uf = isset($_POST["uf"])?$_POST["uf"]:"";
                        $cep =isset($_POST["cep"])?$_POST["cep"]:"";

                        //setando o usuario
                        $usuario = new usuario();

                        $usuario->setNome($nome);
                        $usuario->setEmail($email);
                        $usuario->setDataNascimento($dataNascimento);
                        $usuario->setDocCpf($cpf);
                        $usuario->setDocRg($rg);
                        $usuario->setFirstContato($firstContato);
                        $usuario->setSecondContato($secondContato);
                        $usuario->setUrlFotoRed($urlFotoRed);
                        $usuario->setUrlFotoOrigin($urlFotoOrigin);
                        $usuario->setEndRua($rua);
                        $usuario->setEndBairro($bairro);
                        $usuario->setEndCidade($cidade);
                        $usuario->setEndUf($uf);
                        $usuario->setEndCep($cep);
                        
                        
                        print_r($usuario);

                    }
            
    }