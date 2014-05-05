<?php
error_reporting (E_ERROR | 0);
include 'constants.php';
// include 'mail.php';

if(isset($_GET['log_out'])) {
	$Login_Process = new Login_Process;
	$Login_Process->log_out($_SESSION['username'], $_SESSION['password']); }

class Login_Process {

	var $cookie_user = CKIEUS;
	var $cookie_pass = CKIEPS;

	function connect_db() {
		$conn_str = mysql_connect(DBHOST, DBUSER, DBPASS);
		mysql_select_db(DBNAME, $conn_str) or die ('Could not select Database.');
	}

	function query($sql) {

		$this->connect_db();
		$sql = mysql_query($sql);
		$num_rows = mysql_num_rows($sql);
		$result = mysql_fetch_assoc($sql);
			
	return array("num_rows"=>$num_rows,"result"=>$result,"sql"=>$sql);
	
	}
	function welcome_note() {
			
		ini_set("session.gc_maxlifetime", Session_Lifetime); 
		session_start();
			
		if(isset($_COOKIE[$this->cookie_user]) && isset($_COOKIE[$this->cookie_pass])) {		
			$this->log_in($_COOKIE[$this->cookie_user], $_COOKIE[$this->cookie_pass], 'true', 'false', 'cookie'); 
		}
		if(isset($_SESSION['username'])) { 
			return "<a href=\"".Script_URL.Script_Path."main.php\">Welcome ".$_SESSION['first_name']."</a>";
		} else {
			return "<a href=\"".Script_URL.Script_Path."index.php\">Welcome Guest, Please Login</a>";
		}	
	}
	
	function check_login($page) {
		
		ini_set("session.gc_maxlifetime", Session_Lifetime); 
		session_start();

		if(isset($_COOKIE[$this->cookie_user]) && isset($_COOKIE[$this->cookie_pass])){
			$this->log_in($_COOKIE[$this->cookie_user], $_COOKIE[$this->cookie_pass], 'true', $page, 'cookie'); 
		} else if(isset($_SESSION['username'])) { 
			if(!$page) { $page = Script_Path."dashboard.php"; }
					header("Location: http://".$_SERVER['HTTP_HOST'].$page); 
		}else {
		    return true;
		}
		
	}

	function check_status($page) {

		ini_set("session.gc_maxlifetime", Session_Lifetime); 
		session_start();

		if(!isset($_SESSION['username'])){
			header("Location: http://".$_SERVER['HTTP_HOST'].Script_Path."index.php?page=".$page); 
		}
	}

	function log_in($username, $password, $page, $submit) {
		
		if(isset($submit)) {

		if($submit !== "cookie") {
			$password = md5($password);
		}

		$query = $this->query("SELECT * FROM ".DBTBLE." WHERE user_name='$username' AND user_pass='$password'");
		if($query['num_rows'] == 1) {

				$this->set_session($username, $password);	
				if(isset($remember)) 
				{ $this->set_cookie($username, $password, '+');	}
											
		} else {
				return "Username or Password not reconised.";
		}			
			$this->query("UPDATE ".DBTBLE." SET last_loggedin = '".date ("d/m/y G:i:s")."' WHERE user_name = '$username'");
		
		if(!$page) { $page = Script_Path."dashboard.php"; }
			
		if ($page == 'false') {
				return true;
		} else {
				header("Location: http://".$_SERVER['HTTP_HOST'].$page); 
		}
		
		}
	}
	
	function set_session($username, $password) {
	
			$query = $this->query("SELECT * FROM ".DBTBLE." WHERE user_name='$username' AND user_pass='$password'");
	
			ini_set("session.gc_maxlifetime", Session_Lifetime); 
			session_start();

			$_SESSION['username']    = $query['result']['user_name'];
			$_SESSION['email_address'] = $query['result']['email_address'];
			$_SESSION['password']      = $query['result']['password'];
                        $_SESSION['user_level']      = $query['result']['user_level'];

	}	
	
	function set_cookie($username, $password, $set) {

			if($set == "+")
				{ $cookie_expire = time()+60*60*24*30; }
			else 
				{ $cookie_expire = time()-60*60*24*30; }		
	
			setcookie($this->cookie_user, $username, $cookie_expire, '/');
			setcookie($this->cookie_pass, $password, $cookie_expire, '/');
	
	} 

	function log_out($username, $password, $header) {

	session_start();
	session_unset();
	session_destroy();
    	$this->set_cookie($username, $password, '-');

		if(!isset($header)) {
			header('Location: ../index.php');
		} else {
			return true;
		}
	
	}

	function edit_details($post, $process) {

		if(isset($process)) {
			
		$first_name		= $post['first_name'];
		$last_name		= $post['last_name'];
		$email_address	= $post['email_address'];
		$info			= $post['info'];
		$username		= $post['username'];
		$password		= $_SESSION['password'];
		
		if((!$first_name) || (!$last_name) || (!$email_address) || (!$info)) {
			return "Please enter all details.";
		}

		$this->query("UPDATE ".DBTBLE." SET first_name = '$first_name', last_name = '$last_name', 
		email_address = '$email_address', info = '$info' WHERE username = '$username'");		

				$this->set_session($username, $password);		
				if(isset($_COOKIE[$this->cookie_pass])) 
				{ $this->set_cookie($username, $pass, '+'); }

				return "Details sucessfully changed.";
		}
	}

	function edit_password($post, $process) {

		if(isset($process)) {

		$pass1		= $post['pass1'];
		$pass2		= $post['pass2'];
		$password	= $post['pass'];
		$username	= $post['username'];
		
		if ((!$password) || (!$pass1) || (!$pass2)) {
			return "Missing required details.";
		} 
		if (md5($password) !== $_SESSION['password']) {
			return "Current password is incorrect.";
		}
		if ($pass1 !== $pass2) {
			return "New passwords do not match.";
		}

		$new = md5($pass1);
		$this->query("UPDATE ".DBTBLE." SET user_pass = '$new' WHERE user_name = '$username'");

				$this->set_session($username, $new);		
				if(isset($_COOKIE[$this->cookie_pass])) 
				{ $this->set_cookie($username, $pass, '+'); }

			return "Password update successfull.";
		}
	}

	function Register($post, $process) {

		if(isset($process)) {

		$pass1			= $post['pass1'];
		$pass2			= $post['pass2'];
		$email_address	= $post['email_address'];
		$username		= $post['user_name'];
		        
        $user_role = $post['user_role'];

        if($user_role == "Company admin")
        {
        	$user_level = 1;
        }
        else if($user_role == "Company user")
        {
        	$user_level = 2;
        }
		
		
		if((!$pass1) || (!$pass2) || (!$username) || (!$email_address)) {
		return "Some Fields Are Missing";
		}
		if ($pass1 !== $pass2) {
		return "Passwords do not match";
		}
		$query = $this->query("SELECT username FROM ".DBTBLE." WHERE user_name = '$username'");
		if($query['num_rows'] > 0){
		return "Username unavialable, please try a new username";
		}
		$query = $this->query("SELECT email_address FROM ".DBTBLE." WHERE email_address = '$email_address'");
		if($query['num_rows'] > 0){
		return "Emails address registered to another account.";
		}
		$query = $this->query("SELECT user_name FROM ".DBTBLE." WHERE user_name = '$username'");
		if($query['num_rows'] > 0){
		return "User name registered to another account.";
		}
		
		
		$this->query("INSERT INTO ".DBTBLE." (user_name, email_address, user_pass, user_level) VALUES ('$username', '$email_address', '".md5($pass1)."', '$user_level')");
				
		return '<h3>Sign up was sucessful, you may now log in.</h3>';
			
	}
	
	} 

	function Forgot_Password($get, $post) {
	
	$username = $post['username'];
	if(!$username) { 
	$username = $get['username']; } 
	
	$code = $post['code'];
	if(!$code) { 
	$code = $get['code']; } 

		if (isset($code)) {
			$query = $this->query("SELECT * FROM ".DBTBLE." WHERE username='$username' AND forgot='$code'");
		
		if($query['num_rows'] == 1) {		
				return "<!-- !-->";
		} else {
		if(isset($code) && isset($username)) {
				return "Link Invalid, Please Request a new link.";
		} else {
				return false;
		}
	}
	}
}

	function Request_Password($post, $process) {
		
		$username = $post['username'];
		$email = $post['email'];
			
		if(isset($process)) {

		$query = $this->query("SELECT * FROM ".DBTBLE." WHERE username='$username' AND email_address = '$email'");

			if((!$username) || (!$email)) {
				return "Please enter all details.";
			}

			if($query['num_rows'] == 0){
				return "Matching details were not found.";
			}

		    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
		    srand((double)microtime()*1000000);
		    $i = 0;
		    $pass = '' ;

   			while ($i <= 7) {
   			    $num = rand() % 33;
        		$tmp = substr($chars, $num, 1);
        		$pass = $pass . $tmp;
        		$i++;
    		}
			$code = md5($pass);
			$this->query("UPDATE ".DBTBLE." SET forgot = '$code' WHERE username='$username' AND email_address='$email'");

			Mail_Reset_Password($username, $code, $email);
				return "We have sent an email to your address, this will allow you to reset your password.";
			
		}
	}

	function Reset_Password($post, $process) {

		if(isset($process)) {
		
		$pass1 = $post['pass1'];
		$pass2 = $post['pass2'];
		$username = $post['username'];
		
		if ($pass1 !== $pass2) {
			return "New passwords do not match";
		}
		
			$password = md5($pass1);

		$query = $this->query("UPDATE ".DBTBLE." SET password = '$password', forgot = 'NULL' WHERE username = '$username'");
		
		Mail_Reset_Password_Confirmation($username, $email);
			return "Password Reset Sucsessfull, You may now login.";

		}
	} 
	
}

?>