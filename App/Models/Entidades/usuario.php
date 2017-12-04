<?php

    namespace App\Models\Entidades;

    class usuario{

        private $nome;
        private $email;
        private $dataNascimento;
        private $docCpf;
        private $docRG;
        private $firstContato;
        private $secondContato;
        private $urlFotoRed;
        private $urlFotoOrigin;
        private $endRua;
        private $endBairro;
        private $endCidade;
        private $endUf;
        private $endCep;

        public function __construct(){
               
        }
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getDataNascimento(){
            return $this->dataNascimento;
        }
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }
        public function getDocCpf(){
            return $this->docCpf;
        }
        public function setDocCpf($cpf){
            $this->docCpf = $cpf;
        }
        public function getDocRg(){
            return $this->docRg;
        }
        public function setDocRg($rg){
            $this->docRg = $rg;
        }
        public function getFirstContato(){
            return $this->firstContato;
        }
        public function setFirstContato($firstContato){
            $this->firstContato = $firstContato;
        }
        public function getsecondContato(){
            return $this->secondContato;
        }
        public function setSecondContato($secondContato){
            $this->secondContato = $secondContato;
        }
        public function getUrlFotoRed(){
            return $this->urlFotoRed;
        }
        public function setUrlFotoRed($urlFoto){
            $this->urlFotoRed = $urlFoto;
        }
        public function getUrlFotoOrigin(){
            return $this->urlFotoOrigin;
        }
        public function setUrlFotoOrigin($urlFoto){
            $this->urlFotoOrigin = $urlFoto;
        }
        public function getEndRua(){
            return $this->endRua;
        }
        public function setEndRua($rua){
            $this->endRua = $rua;
        }
        public function getEndBairro(){
            return $this->endBairro;
        }
        public function setEndBairro($bairro){
            $this->endBairro = $bairro;
        }
        public function getEndCidade(){
            return $this->endCidade;
        }
        public function setEndCidade($cidade){
            $this->endCidade = $cidade;
        }
        public function getEndUf(){
            return $this->endUf;
        }
        public function setEndUf($uf){
            $this->endUf = $uf;
        }
        public function getEndCep(){
            return $this->endCep;
        }
        public function setEndCep($cep){
            $this->endCep = $cep;
        }
        
        


    }