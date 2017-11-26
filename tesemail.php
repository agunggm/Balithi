$mail = new PHPMailer;

$to  = $this->input->get('email');

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
 $mail->IsHTML(true);    // set email format to HTML
        $mail->IsSMTP();   // we are going to use SMTP
$mail->isMail();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alfanwira@gmail.com';                 // SMTP username
$mail->Password = 'nailanursifa';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'alfanwira@gmail.com';
$mail->FromName = $name;
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress("'".$to."'");               // Name is optional

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'SASP Contact Form';
$mail->Body = $message;
$mail->Body .= "<br /><br />Below are my contact details <br /> Name: ";
$mail->Body .= 'namakuuuuuu';
$mail->Body .= "<br />My Phone number: ";
$mail->Body .= 'muhamhhad';
$mail->Body .= "<br /> My email address: ";
$mail->Body .= 'allllll';

if(!$mail->send()) {
    redirect(base_url()."pendaftaran?berhasil");
} else {
   
redirect(base_url()."pendaftaran?error");
}
	   }
        
   	