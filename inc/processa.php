<?php
    if(isset($_POST['email']) && !empty($_POST['email'])){

        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);
        
        $to = "kyokushinemmovimento@gmail.com, fzuchetto@gmail.com";
        $subject = "Mensagem de contato";
        $body = "Nome: ".$nome."\r\n".
                "Email: ".$email."\r\n".
                "Mensagem: ".$mensagem;
        $header = "From:administracao@kyokushinemmovimento.com.br"."\r\n".
                    "Reply-To:".$email."\r\n".
                    "X=Mailer:PHP/".phpversion();

        if(mail($to, $subject, $body, $header)){
            echo("Email enviado com sucesso");
        }else{
            echo("Email não pode ser enviado");
        }

    }
?>