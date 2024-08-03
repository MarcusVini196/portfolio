<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);

    $para = "agenciamv.orcamentos@gmail.com";
    $assunto = "Orçamentos de Sites ou Loja Virtual - Porfólio";

    $corpo = "Nome: ".$nome."\n"."Email:"."\n"."Celular:".$celular;

    $cabeca = "From: agenciamv.orcamentos@gmail.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso");
    }else {
        echo("Houve um erro ao enviar o email!");
    }


?>