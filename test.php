<?php
$to = $email;
$from = "noreply@cose.teagonig.com";

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
$headers .= "X-Priority: 1 (Highest)\n";
$headers .= "X-MSMail-Priority: High\n";
$headers .= "Importance: High\n";

$subject = $subj;

$logo = 'https://cose.teagonig.com/home/assets/images/maillogo.png';
$url = 'https://cose.teagonig.com/';

$body = "
<!DOCTYPE html>
<html lang='en'>

<head>
<meta charset='UTF-8'>
<title>FUOYE COSE</title>
</head>
<link rel='stylesheet' href='https://cose.teagonig.com/home/assets/css/vendor/bootstrap.min.css'>
<body style='text-align: center;'>";
$body .= "<section style='margin: 30px; margin-top: 50px ; background: #be1e2d; color: #fff;'>";
$body .= "<img style='margin-top: 35px; width: 460px; height: 105px;' src='{$logo}' alt='TeaGo Cose'>";
$body .= "<h1 style='margin-top: 45px; color: #fff'>{$subj}</h1>
<br />";
$body .= "<h3 style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>{$msg}</h3>
<br />";
$body .= "<h1 style='margin-left: 45px; text-align: center;'><a href='{$ninn}'><button style='padding: 20px 30px; border: none; background: white; color: #be1e2d'><b>ACTIVATE ACCOUNT</b></button></a></h1>
<br />";
$body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Do not bother replying this
email. This is a virtual email</p>";
$body .= "<p text-align: center;'><a href='https://teagonig.com/contact'><img style='width:150px;heght:150px'
		src='https://cose.teagonig.com/home/assets/images/footer.png'></a>";
$body .= "
<h4 style='text-align: center;'>Email.: <span style='color: #fff'>hello@cose.teagonig.com</span></h4>";
$body .= "<h4 style='text-align: center;'>Call/Chat.: <span style='color: #fff'>+234(0) 802 276 2696</span>
</h4>";
$body .= "<h4 style='text-align: center; padding-bottom: 80px; padding-top: 40px;'>Team TEAGO COSE</h4>";    
$body .= "<script src='https://cose.teagonig.com/home/assets/js/vendor/bootstrap.min.js'></script>";
$body .= "</section>";
$body .= "</body></html>";
$send = mail($to, $subject, $body, $headers);

//echo $body;

$dateposted = "10/20/19 10:20:35pm";

function timediffrnce($dateposted) {
 
//if you leave this it takes your current timezone
$userTimezone = "Africa/Lagos";
$timezone = new DateTimeZone( $userTimezone );
 
$crrentSysDate = new DateTime(date('m/d/y h:i:s a'),$timezone);
$userDefineDate = $crrentSysDate->format('m/d/y h:i:s a');
 
$start = date_create($userDefineDate,$timezone);
$end = date_create(date('m/d/y h:i:s a', strtotime($dateposted)),$timezone);
 
$diff=date_diff($start,$end);

$year 		 = $diff->y;
$month       = $diff->m;
$days 		 = $diff->d;
$hours		 = $diff->h;
$minutes	 = $diff->i;
$seconds 	 = $diff->s;


 
if($seconds < 60 && $minutes == 0 && $hours == 0 && $days == 0 && $month == 0 && $year == 0) {

	echo "Just now";

} else {

if($minutes < 60 && $hours == 0 && $days == 0 && $month == 0 && $year == 0) {

	echo $minutes." minutes ago";

} else {

if($hours < 24 && $days == 0 && $month == 0 && $year == 0){
	
	if($hours == 1) {
		echo $hours." hour ago";
	} else {
		echo $hours." hours ago";
	}
	
} else {

if($days != 0 && $month == 0 && $year == 0) {

	if($days == 1) {
		echo $days." day ago";
	} else {
		echo $days." days ago";
	}

} else {

if($month != 0 && $year == 0) {

	if($month == 1) {
		echo $month." month ago";
	} else {
		echo $month." months ago";
	}
	
	
} else {

if($year != 0) {

	if($year == 1) {
		echo $year." year ago";
	} else {
		echo $year." years ago";
	}
	
}
}
}
}
}
}
}

echo timediffrnce($dateposted);
?>