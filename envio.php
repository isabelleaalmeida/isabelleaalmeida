<?php

    $nome = addslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['msg']);

    $para = "isabelledev9@gmail.com"
    $assunto = "Coleta de dados - formulário";

    $texto = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone;

    $cabecalho = "From isabellealmeida12@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail()$para,$assunto,$texto,$cabecalho){
        echo("E-mail enviado com sucesso!");
    }else echo("Houve um erro ao enviar o e-mail");
?>