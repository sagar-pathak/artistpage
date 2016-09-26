<?php
	include(DB_CONFIG);
	include(MODEL_ABOUT);
	$rows = model_get_profileinfo($conn); 
	$to = $rows[0]['email'];

	$method = $_POST['method'];

	function validate_captcha(){
		// Validate Captcha
		require_once(RECAPTCHA);
		$privatekey = "6Lc5qgcUAAAAALU8_Tn6UYjYB5-Bw3_pDSC8a2Ef";
		$resp = recaptcha_check_answer ($privatekey,
		                            $_SERVER["REMOTE_ADDR"],
		                            $_POST["recaptcha_challenge_field"],
		                            $_POST["recaptcha_response_field"]);

		if (!$resp->is_valid) {
			return false;
		} else {
			return true;
		}
	}

	function submit_feedback($to){
		if(validate_captcha()){
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$feedback = $_POST['message'];

			//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
            if (preg_match($pattern, trim(strip_tags($_POST['req-email'])))) { 
                $cleanedFrom = trim(strip_tags($email)); 
            } else { 
                $_SESSION['feedback_error'] = "The email address you entered was invalid. Please try again!"; 
            }

			$subject = 'Feedback Message';
			$headers = "From: " . $email . "\r\n";
			$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			// PREPARE THE BODY OF THE MESSAGE
			$message = '<html><body>';
			$message .= '<img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Feedback Message" />';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($firstname) ." ".strip_tags($lastname). "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
			$curText = htmlentities($feedback);           
			if (($curText) != '') {
			    $message .= "<tr><td><strong>Feedback Message: </strong> </td><td>" . $feedback . "</td></tr>";
			}
			$message .= "</table>";
			$message .= "</body></html>";

            if (mail($to, $subject, $message, $headers)) {
              $_SESSION['feedback_success'] =  'Your message has been sent.';
            } else {
              $_SESSION['feedback_error'] =  'There was a problem sending the email.';
            }
		}else{
			$_SESSION['feedback_error'] = "The reCAPTCHA wasn't entered correctly. Try it again.";
		}
	}

	function feedbackcontroller($method, $to){
		switch($method){
			case 'verify':
				submit_feedback($to);
			break;
		}
		header('Location: '.ROOT_PATH.'feedback');
	}
	feedbackcontroller($method, $to);
?>