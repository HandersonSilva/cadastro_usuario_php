
    //retorno da imagem
    $(document).ready(function(){
        $('#file').on('change',function(){
               $('#visualizar').html('<img src="ajax-loader.gif" alt="Enviando..."/> Enviando...');
               // Efetua o Upload 
               $('#formulario').ajaxForm({
                   target:'#visualizar' // o callback será no elemento com o id #visualizar
               }).submit();
           });
        });

 
       

    //Implementação de mascaras com jquery
    $(document).ready(function(){
        jQuery(function($){
            $("#cpf").mask("999.999.999-99");
            $("#cel").mask("(99)99999-9999");
            $("#celWhats").mask("(99)99999-9999");
            $("#cep").mask("99.999-999");
            });
    });

