<?php
$field_name = $_POST['cName'];
$field_email = $_POST['cEmail'];
$field_message = $_POST['cMessage'];

$mail_to = 'moksedur.rahman@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
  <script language="javascript" type="text/javascript">
    alert('Thank you for the message. We will contact you shortly.');
    window.location = 'contact.html';
  </script>
  <?php
}
else { ?>
    <script language="javascript" type="text/javascript">
      alert('Message failed. Sorry!');
      window.location = 'contact.html';
    </script>
    <?php
}
header('Location: https://moksedurrahman.github.io/contact.html');
?>
