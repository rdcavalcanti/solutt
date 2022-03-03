<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$url = 'http://clientes.rodantis.com.br/solutt/oldhtml';

$to = "contato@rodantis.com.br";
$subject = "Contato do site";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email;

$header = "From: testecliente@clientes.rodantis.com.br"."\r\n".
            "Replay-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

            
// if(mail($to,$subject,$body,$header)){

//     echo '<script language="javascript">';
//     echo 'alert("message successfully sent")';
//     echo '</script>';

//     header("Location: http://clientes.rodantis.com.br/solutt/oldhtml/index.html");
// exit( );

// }else{
//     echo("O Email não pode ser enviado");
//     }
// }
//

if(mail($to,$subject,$body,$header)){
  echo '<script language="javascript">';
  echo 'alert("E-mail enviado com sucesso!")';
  echo '</script>';

  echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=" . $url . "'>";
} else {
  echo "Não foi possível enviar o e-mail. Tente novamente ou entre em contato com " . $to;
  echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $url . "'>";
}

}

?>  