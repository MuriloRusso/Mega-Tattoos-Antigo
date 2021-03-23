<?php

     if(isset($_POST['email']) && !empty($_POST['email']))
     {
     $nome = addslashes($_POST['nome']);
     $email = addslashes($_POST['email']);
     $tel = addslashes($_POST['tel']);
     $opcao = addslashes($_POST['opcao']);
     $data = addslashes($_POST['data']);
     $horario = addslashes($_POST['horario']);
         
     $to = "murilorussooo@gmail.com";
     $subject = "Agendamento";
     $body = "Nome: ".$nome. "\n".
             "E-mail: ".$email. "\n".
             "Telefone: ".$tel. "\n".
             "Serviço: ".$opcao. "\n".
             "Horário : ".$horario. "\n".
             "Data: ".$data;
     $header = "from:megatattoos@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mainer:PHP/".phpversion();
     if(mail($to,$subject,$body,$header)){
         echo("Nome: ".$nome."\r\n"
              ."E-mail: ".$email."\r\n"
              ."Telefone: ".$tel. "\r\n"
              ."Serviço: ".$opcao. "\n"
              ."Horário : ".$horario. "\n"
              ."Data: ".$data);
         echo("sucesso");
     }
         else{
             echo("erro");
         }
     }
?>