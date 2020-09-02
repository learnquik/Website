<?php
if (isset($_POST["reset-request-submit"])) {
	$selector=bin2hex(random_bytes(8));
	$token=random_bytes(32);
	$url="www.learnquik.online/create-new-password.php?selector=". $selector . "&validator=" .bin2hex($token);
	$expires=date("U")+1800;
	require 'config.php';
	$userEmail=$_POST["email"];
	$sql="DELETE FROM pwdreset WHERE pwdResetEmail=?";
	$stmt=mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		echo "There was an Error";
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"s",$userEmail);
		mysqli_stmt_execute($stmt);
	}
	$sql="INSERT INTO pwdreset(pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires)VALUES(?,?,?,?); ";
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		echo "There was an Error";
		exit();
	}
	else{
		$hashedToken=password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector,$hashedToken,$expires);
		mysqli_stmt_execute($stmt);
	}
	mysqli_stmt_close();
	mysqli_close();
	
	
	$to=$userEmail;
	$subject="Reset your Password For LearnQuik";
	$message='<p>We Received a Password Reset Request.The Link To Reset Your Password is below.If you didnot make this request,you can ignore this email</p>';
	$message .='<p>Here is your password reset link:<br>';
	$message .= '<a href="' .$url .'">' . $url . '</a></p>';
	$headers="From:LearnQuiK <admin@learnquik.online>\r\n";
	$headers.="Reply-To:admin@learnquik.online\r\n";
	$headers.="Content-type: text/html\r\n";
	

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'learnquik8217@gmail.com';                 // SMTP username
$mail->Password = 'Prisu@8217';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('learnquik8217@gmail.com', 'LEarnQuiK');
$mail->addAddress($to);     // Add a recipient
               // Name is optional
$mail->addReplyTo('admin@learnquik.online');


//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $message;
$mail->AltBody = $headers;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Location: ../reset-password.php?reset=success");
}
	
	

	//mail($to, $subject, $message,$headers);
	

}
else{
	header("Location:../login.php");
}
?>