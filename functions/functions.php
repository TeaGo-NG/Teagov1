<?php

/*************helper functions***************/

function clean($string) {

	return htmlentities($string);
}

function redirect($location) {

	return header("Location: {$location}");
}

function set_message($message) {

	if(!empty($message)) {

		$_SESSION['message'] = $message;

		}else {

			$message = "";
		}
}



function display_message() {

	if(isset($_SESSION['message'])) {

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function token_generator() {

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token; 
}

function otp() {

	$otp = $_SESSION['otp'] = mt_rand(0, 99999);

	return $otp; 
}

function validation_errors($error_message) {

$error_message = <<<DELIMITER

<div class="col-md-12 alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" class="col-md-12 close sucess-op" data-dismiss="alert" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}

function validator($error_message) {

$error_message = <<<DELIMITER
<div style="background: #FFE9E6; color: #ff0000;" class="col-md-12 alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" style="color: white;" class="col-md-12 close sucess-op" data-dismiss="modal" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}



									/****** Helper Functions********/

function email_exist($email) {

	$sql = "SELECT * FROM user WHERE `email` = '$email'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}

function username_exist($usname) {

	$sql = "SELECT * FROM user WHERE `user` = '$usname'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}





/** VALIDATE USER REGISTRATION **/

if(isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['pword']) && isset($_POST['cpword'])) {

$fname 			= clean(escape($_POST['fname']));
$email	 		= clean(escape($_POST['email']));
$uname	 		= clean(escape(ucwords($_POST['user'])));
$pword    		= clean(escape($_POST['pword']));
$cpword 		= clean(escape($_POST['cpword']));

if(email_exist($email)) {

			echo "Sorry! The email inputted already has an account";
		} else {

if(username_exist($uname)) {

			echo "That username is unavailable!";
		} else {

			register($fname, $email, $uname, $pword);
		}
	}
	} // post request


	

/** REGISTER USER **/
function register($fname, $email, $uname, $pword) {

	$fnam = escape($fname);
	$emai = escape($email);
	$unam = escape(ucwords($uname));
	$pwor = md5($pword);

	$datereg = date("Y-m-d");

	$_SESSION['usermail'] = $emai;
		

	$activator = md5(otp());
	
	$sql = "INSERT INTO user(`id`, `fname`, `user`, `email`, `pword`, `dreg`, `active`, `activator`)";
	$sql.= " VALUES('1', '$fnam', '$unam', '$emai', '$pwor', '$datereg', '0', '$activator')";
	$result = query($sql);

	//redirect to verify function
	$subj = "VERIFY YOUR EMAIL";
	$msg  = "Hi there! <br /><br />Kindly use the button below to activate your account;";
	$ninn = "https://cose.teagonig.com/verify?vef=".$activator;

	mail_mailer($email, $ninn, $subj, $msg);

	//open otp page
	echo 'Loading... Please Wait!';
	echo '<script>verify();</script>';
	 }



/* MAIL VERIFICATIONS */
function mail_mailer($email, $ninn, $subj, $msg) {

	$to = $email;
	$from = "noreply@cose.teagonig.com";
	
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers = "MIME-Version: 1.0\n" ;
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
	<h4 style='text-align: center; style='color: #fff''>Email.: <span style='color: #fff'>hello@cose.teagonig.com</span></h4>";
	$body .= "<h4 style='text-align: center;'>Call/Chat.: <span style='color: #fff'>+234(0) 802 276 2696</span>
	</h4>";
	$body .= "<h4 style='text-align: center; padding-bottom: 80px; padding-top: 40px;'>Team TEAGO COSE</h4>";    
	$body .= "<script src='https://cose.teagonig.com/home/assets/js/vendor/bootstrap.min.js'></script>";
	$body .= "</section>";
	$body .= "</body></html>";
	$send = mail($to, $subject, $body, $headers);
}


/** SIGN IN USER **/
 	if(isset($_POST['username']) && isset($_POST['password'])) {

			$username        = clean(escape($_POST['username']));
			$password   	 = md5($_POST['password']);

			$sql = "SELECT * FROM `user` WHERE `user` = '$username' AND `pword` = '$password'";
			$result = query($sql);
			if(row_count($result) == 1) {

				$row 	    = mysqli_fetch_array($result);
				
				$user 		= $row['user'];
				$active 	= $row['active'];
				$email 		= $row['email'];
				$activate 	= $row['activator'];

				if ($active == 0) {

					$vnt = md5(otp());

					$ninn = "https://cose.teagonig.com/verify?vef=".$vnt;

					$_SESSION['usermail'] = $email;

					//update activation link
					$ups = "UPDATE user SET `activator` = '$vnt' WHERE `user` = '$username'";
					$ues = query($ups);

					$subj = "VERIFY YOUR EMAIL";
					$msg  = "Hi there! <br /><br />Kindly use the button below to activate your account;";

					mail_mailer($email, $ninn, $subj, $msg);

					//open verification page
					echo 'Loading... Please Wait!';
					echo '<script>verify();</script>';
	
					
				}  else {

					if($username == $user) {
						
						$_SESSION['user'] = $username;

						echo 'Loading... Please Wait';	

						echo '<script>window.location.href ="./home"</script>';	
					} else {

						echo "This username doesn't have an account.";
					}

			} 

		}  else {
			
			echo "Wrong Password Inputted";
		}
	}


/** FORGOT PASSWORD **/
if(isset($_POST['fgeml'])) {
	
	$email  = clean(escape($_POST['fgeml']));

	$_SESSION['usermail'] = $email;

	if(!email_exist($email)) {

		echo "Sorry! This email doesn't have an account";
		
	} else {

	$activator = md5(otp());
	$ninn = "https://cose.teagonig.com/recover?vef=".$activator;

	$ssl = "UPDATE user SET `activator` = '$activator' WHERE `email` = '$email'";
	$rsl = query($ssl);

	//redirect to verify function
	$subj = "RESET YOUR PASSWORD";
	$msg  = "Hi there! <br /><br />Kindly use the link below to restore your password;";

	mail_mailer($email, $ninn, $subj, $msg);

	//open otp page
	echo 'Loading... Please Wait!';
	echo '<script>verify();</script>';

	}
}



/** RESET PASSWORD **/
if(isset($_POST['fgpword']) && isset($_POST['fgcpword'])) {

	    $fgpword 	= md5($_POST['fgpword']);
        $eml 		= $_SESSION['usermail'];

	$sql = "UPDATE user SET `pword` = '$fgpword', `activator` = '' WHERE `email` = '$eml'";
	$rsl = query($sql);
	
	//get username and redirect to dashboard
	$ssl = "SELECT * FROM user WHERE `email` =  '$eml'";
	$rsl = query($ssl);
	if(row_count($rsl) == '') {
		
		echo 'Loading... Please Wait';
		echo '<script>window.location.href ="./welcome"</script>';
		
	} else {

		$row  = mysqli_fetch_array($rsl);
		$user = $row['user'];

		$_SESSION['user'] = $user;
		
		
		echo 'Loading... Please Wait';

		echo '<script>window.location.href ="./home"</script>';
		
	}
}


// DASHBOARD FUNCTIONS FOR USER
function user_details() {
	
	$data = $_SESSION['user'];


	//users details
	$sql = "SELECT * FROM user WHERE `user` = '$data'";
	$rsl = query($sql);

	//check if user details is valid
	if(row_count($rsl) == '') {

		redirect(".././logout");
		
	} else {

    $GLOBALS['t_users'] = mysqli_fetch_array($rsl);

	}

	//set default profile picture
	if($GLOBALS['t_users']['pix'] == '') {

		$GLOBALS['pix'] = "assets/images/log.png";

	} else {

		$GLOBALS['pix'] = $GLOBALS['t_users']['pix'];

	}

	//give verified users a tick on their username
	if($GLOBALS['t_users']['verification'] == 1) {

		$GLOBALS['user'] = $GLOBALS['t_users']['user']."  <i style='color: red;' class='bi bi-tick'></i>";
		
	} else {

		$GLOBALS['user'] = $GLOBALS['t_users']['user'];
	}


	//set default cover picture
	if($GLOBALS['t_users']['cover'] == '') {

		$GLOBALS['cover'] = "assets/images/cover.jpg";

	} else {

		$GLOBALS['cover'] = $GLOBALS['t_users']['cover'];

	}
}


//time difference function
function timediffrnce() {

	user_details();

	$date = $GLOBALS['t_users']['lstseen'];
 
//if you leave this it takes your current timezone
$userTimezone = "Africa/Lagos";
$timezone = new DateTimeZone( $userTimezone );
 
$crrentSysDate = new DateTime(date('m/d/y h:i:s a'),$timezone);
$userDefineDate = $crrentSysDate->format('m/d/y h:i:s a');
 
$start = date_create($userDefineDate,$timezone);
$end = date_create(date('m/d/y h:i:s a', strtotime($date)),$timezone);
 
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





//time difference function
function psttdff($date) {
 
//if you leave this it takes your current timezone
$userTimezone = "Africa/Lagos";
$timezone = new DateTimeZone( $userTimezone );
 
$crrentSysDate = new DateTime(date('m/d/y h:i:s a'),$timezone);
$userDefineDate = $crrentSysDate->format('m/d/y h:i:s a');
 
$start = date_create($userDefineDate,$timezone);
$end = date_create(date('m/d/y h:i:s a', strtotime($date)),$timezone);
 
$diff = date_diff($start,$end);

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



//post article
if(isset($_POST['title']) && isset($_POST['gist']) ) {

	$titl 	 = clean(escape($_POST['title']));
	$gist 	 = clean(escape($_POST['gist']));
	$idid    = md5(rand(0, 9999));
	$date    = date('Y-m-d h:i:sa');
	$post_url   = str_replace(' ', '-', $titl);


	//check for duplicated article id
    $ssl = "SELECT * FROM article WHERE `articleurl` = '$post_url'";
    $rsl = query($ssl);
    if (row_count($rsl) == 1) {


    //asign a new post_url 
      $post_url = str_replace(' ', '-', $titl).rand(0, 99);

    } else {
 
    $post_url   = str_replace(' ', '-', $titl); 
    }


	user_details();

	$user = $t_users['user'];
	$pix  = $pix;

	$sql = "INSERT INTO article(`id`, `user`, `post`, `react`, `dateposted`, `title`, `uspix`, `articleurl`, `comment`)";
	$sql.= "VALUES('$idid', '$user', '$gist', '0', '$date', '$titl', '$pix', '$post_url', '0')";
	$res = query($sql);

	$_SESSION['newpost'] = "Article posted submitted successfully";
	
	echo "Loading... Please wait";
	echo '<script>window.location.href ="./"</script>';
}

//get page url

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {  
         $url = "https://";   
    }else{  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI']; }  

//Like Button
if (isset($_POST['like']) && isset($_POST['post'])) {
	$post = $_POST['post'];
	$var = $_POST['like'];
	$sql = "SELECT * FROM `article` WHERE `sn` = '$post'";
	$rsl = query($sql);
	$row = mysqli_fetch_array($rsl);
	$reac = $row['react'];
	$react_now = $reac + $var;
	$up = "UPDATE article SET `react` = '$react_now' WHERE `sn` = '$post'";
	$ud = query($up);

	?><span><?php echo $react_now; ?></span> <?php
}

//unlike
if (isset($_POST['unlike']) && isset($_POST['post'])) {
	$post = $_POST['post'];
	$var = $_POST['unlike'];
	$sql = "SELECT * FROM `article` WHERE `sn` = '$post'";
	$rsl = query($sql);
	$row = mysqli_fetch_array($rsl);
	$reac = $row['react'];
	$react_now = $reac - $var;
	$up = "UPDATE article SET `react` = '$react_now' WHERE `sn` = '$post'";
	$ud = query($up);

	?><span><?php echo $react_now; ?></span> <?php
}
      
 // Input Comment into DB

if(isset($_POST['comment']) && isset($_POST['post'])) {
 	$comment 	 = clean(escape($_POST['comment']));
	$post 	 = clean(escape($_POST['post']));
	$date    = date('Y-m-d');
	$commentId = clean(escape($_POST['commentId']));

	user_details();

	$user = $t_users['user'];

	$sql = "INSERT INTO comments(`post_id`, `comment`, `user`, `datecommented`, `parent_id`)";
	$sql.= "VALUES('$post', '$comment', '$user', '$date', '$commentId')";
	$result = query($sql);

	

	$ssl = "SELECT * FROM comments WHERE `post_id` = '$post' AND `parent_id` = '0' ORDER BY `id` DESC";
    $rsl = query($ssl);

    while($row = mysqli_fetch_array($rsl)) {

    ?>
    					<div class=" row">
                            <div class="" >
                                <img style="max-height: 40px; max-width: 40px;" class="responsive" src="assets/images/log.png">
                            </div>
                            <div class="" style="max-width: 87%; padding-left: 20px;">
                                <div style="border-radius: 10px; background-color: #e6e6e6;" >
                                    <div class="share-text-field" style="height: fit-content ; border-radius: 15px;">
                                        <div class="row">
                                            <p class="col-12" style="margin: 7px"><strong><?php echo $row['user'];  ?></strong></p>
                                        </div>
                                        <div style="margin: -10px 10px 0px 10px"><?php echo $row['comment'];  ?>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- <small class="col-12"><?php echo $row['datecommented'];  ?></small> -->
                                <span>
                                    <small>
                                        <strong>
                                            <input type="text" name="" id="commentId" value="<?php echo $row['id']; ?>" hidden>
                                            <p href="" onclick="reply()" style="color:#be1e2d; cursor: pointer;">Reply</p>
                                        </strong>
                                    </small>
                                </span>
                            </div>
                            </div><br>
    <?php 
	}
	
   
}
 
//End Input Comment into DB******//


if (isset($_POST['num']) && isset($_POST['post'])) {
	$new = $_POST['num'];
	$post = $_POST['post'];
	$sqll = "UPDATE article SET `comment` = '$new' WHERE `sn` = '$post'";;
	$results = query($sqll);

	echo '<p><?php echo $new; ?></p>';
	

}
?>