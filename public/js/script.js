//retorno da imagem
$(document).ready(function(){
    $('#file').live('change',function(){
           $('#visualizar').html('<img src="ajax-loader.gif" alt="Enviando..."/> Enviando...');
           /* Efetua o Upload */
           $('#formulario').ajaxForm({
               target:'#visualizar' // o callback será no elemento com o id #visualizar
           }).submit();
       });
    });