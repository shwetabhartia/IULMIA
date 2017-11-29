<?php session_start();
$sid = SID; //Session ID #
$authenticated = $_SESSION['CAS'];
//send user to CAS login if not authenticated
if (!$authenticated) {
  $_SESSION['CAS'] = true;
  $_SESSION['reached1nauth'] = 'yes';
  header("Location: https://cas.iu.edu/cas/login?cassvc=IU&casurl=https:");
  exit;
}
if ($authenticated) {
  $_SESSION['ifauth'] = 'yes';
  //validate since authenticated
  $_SESSION['ingcastick']='no';
  if (isset($_GET['casticket'])) {
    $_SESSION['ingcastick']='yes';
  	//set up validation URL to ask CAS if ticket is good
  	$_url = 'https://cas.iu.edu/cas/validate';
  	$cassvc = 'IU';  //search kb.indiana.edu for "cas application code" to determine code to use here in place of "appCode"
  	$casurl = 'http://localhost/IULMIA/public/request.php'; //same base URLsent
  	$params = "cassvc=$cassvc&casticket=$_GET[casticket]&casurl=$casurl";
  	$urlNew = "$_url?$params";
  	//CAS sending response on 2 lines.  First line contains "yes" or "no".  If "yes", second line contains username (otherwise, it is empty).
  	$ch = curl_init();
  	$timeout = 5; // set to zero for no timeout
  	curl_setopt ($ch, CURLOPT_URL, $urlNew);
  	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  	ob_start();
  	curl_exec($ch);
  	curl_close($ch);
  	$cas_answer = ob_get_contents();
  	ob_end_clean();
  //  https://cas.iu.edu/cas/validate?cassvc=IU&casticket=ST-441576-Bfh9xYDOtdHVPSZoY0uGcasprd06&casurl=http://localhost/IULMIA/public/request.php
  	//split CAS answer into access and user
  	list($access,$user) = split("\n",$cas_answer,2);
  	$access = trim($access);
  	$user = trim($user);

  	//set user and session variable if CAS says YES
  	if ($access == "yes") {
        $_SESSION['user'] = $user;
        $_SESSION['reachedifaccess'] = 'yes';
        echo "Welcome to our home page $user, now we can authorize you with our user database.";
	  }
  }
  else
  {
     $_SESSION['CAS'] = true;
     $_SESSION['reached2nauth'] = 'yes';
     header("Location: https://cas.iu.edu/cas/login?cassvc=IU&casurl=http://localhost/IULMIA/public/request.php");
     exit;
  }
}
?>
