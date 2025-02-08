<?php

$name       = 'Moksedur';
$from       = 'sales@datavisionbd.com';
$subject    = 'test mail';
$message    = 'hello test';
$to         = 'info@datavisionbd.com';

$headers = "MIME-Version: 1.0";
$headers .= "Content-type: text/plain; charset=iso-8859-1";
$headers .= "From: {$name} <{$from}>";
$headers .= "Reply-To: <{$from}>";
$headers .= "Subject: {$subject}";
$headers .= "X-Mailer: PHP/".phpversion();

if(mail($to, $subject, $message, $headers)){
    echo 1;
}
else{
    echo 0;
}

?>