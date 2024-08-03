<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes(($_POST['email']));
    $telefone = addslashes(($_POST['telefone']));

    $para = "agenciamv.orcamentos@gmail.com";
    $assunto = "Orçamentos de Sites ou Loja Virtual - Portfólio";

   $corpo = "Nome: ".$nome."\n"."Email:"."\n"."Telefone:".$telefone;

   $cabeca = "From: agenciamv.orcamentos@gmail.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

   if(mail($para, $assunto, $corpo, $cabeca)){
    echo("Email enviado com sucesso");
   } else {
        echo("Houve umm erro ao enviar o email");
   }

?>