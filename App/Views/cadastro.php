<html>
    <head>
        <title>
            Cadastro de Usuario 

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
       
  
        <script type="text/javascript" src="public/js/jquery.js"></script>
        <script src="public/js/jquery.maskedinput.js" type="text/javascript"></script>
        <script type="text/javascript" src="public/js/jquery.form.js"></script>
        <script type="text/javascript" src="public/js/script.js"></script>
   
       
       
  

       
        
      
        
       
       
        <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
     
       
       
 
    </head>
    <body>
     <!--Usando Grid -->
    <div class="container" >                     
            <div class="row">
                     
                <div class="col-md-2 " >
                   
                </div>
                 
                <div class="col-md-8" id="bordarDiv">
                    <form id="formulario" enctype="multipart/form-data" action="index.php?p=cadastrar" method="POST">
                            
                    <div class="row">
                        <div class="col-lg-9">
                                <form id="formulario" enctype="multipart/form-data" action="index.php?p=cadastrar" method="POST">
                                    <div class="form-group">
                                      <label >Nome:</label>
                                      <input type="text" maxlength="100" name="nome" class="form-control" id="nomeU" >
                                    </div>
                                    <div class="form-group">
                                            <label >Email:</label><br/>
                                            <input type="email" id="email" name="email">
                                            
                                    </div>
                                   
                                    <div class="form-group">
                                      <label >Nascimento:</label>
                                      <input type="date" class="form-control" name="data" id="data" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label >Documentos:</label><br/>
                                        <input type="text"   maxlength="11" name="cpf" class="form-control" id="cpf" placeholder="CPF" ><br/>
                                        <input type="text"   maxlength="10" name="rg" class="form-control" id="rg" placeholder="RG">
                                      </div>
                                      <div class="form-group">
                                            <label >Contatos::</label><br/>
                                            <input type="text"  class="celular" maxlength="11" name="cel" class="form-control" id="cel" placeholder="Fone" ><br/>
                                            <input type="text"  class="celular" maxlength="11" name="celWhats" class="form-control" id="celWhats" placeholder="Fone Whatsap">
                                          </div>
                                    <div class="form-group" >
                                        <label>Selecione a Foto:</label><br/>
                                        <input type="file" name="arquivo" id="file">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="30000">     
                                    </div>
                                    <div class="form-group ">
                                        <label >Endereço:</label><br/>
                                        <input type="text" class="endereco" maxlength="100" name="rua" class="form-control" id="rua" placeholder="Rua"><br/>
                                        <input type="text" class="endereco" maxlength="100" name="bairro" class="form-control" id="bairro" placeholder="Bairro"><br/>
                                        <input type="text" class="endereco" maxlength="100" name="cidade" class="form-control" id="cidade" placeholder="Cidade"><br/>
                                        <input type="text"  maxlength="2" name="uf" class="form-control" id="uf" placeholder="Uf">
                                        <input type="text"  maxlength="8" name="cep" class="form-control" id="cep" placeholder="Cep">
                                        
                                      </div>
                                
                                   
                            </form> 
                        </div>
                        <div class="col-lg-3" id="visualizaFoto">
                                <div id="visualizar">
                                    
                                </div>
                        </div>
                    </div>
                    <input type="submit" value="Enviar" id="btnEnvia" >
                </form><br/>
                </div>
                <div class="col-md-2 ">
                    
                    
                </div>
            
            </div>
        
        </div>

         
  
    </body>
    
</html>
