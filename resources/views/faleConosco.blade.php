<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/contato-create.css">
      <title>Formulario Contato</title>
   </head>
   <body>
      <div class="container">
                      
         <form id="contact" action="/salvar" method="post">
                             @csrf
                            
            <h3>Contato</h3>
                            
            <fieldset>
                                    <input name="txtNome" placeholder="Seu Nome" type="Text" tabindex="1" required autofocus >
                                    
            </fieldset>
                                  
            <fieldset>
                                       <input name="txtEmail" placeholder="Seu E-mail" type="Email" tabindex="2" required>
                                    
            </fieldset>
                                 
            <fieldset>
                                       <textarea name="txtMensagem" placeholder="Mensagem.." cols="30" rows="10"></textarea>
                                   
            </fieldset>
                                 
            <fieldset>
                                       <button name="submit" type="submit" id="contact-submit" data-submit="....Sending">Enviar</button>
                                    
            </fieldset>
                      
         </form>
              
      </div>
       
   </body>
</html>