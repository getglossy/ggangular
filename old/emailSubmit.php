<?php
    $formName = $_POST['formNameVar'];
    $formEmail = $_POST['formEmailVar'];
    $formNumber = $_POST['formNumberVar'];
    $formQuery = $_POST['formQueryVar'];
	$formSubject = $_POST['formSubjectVar'];
    $fieldCheck = false;

	function is_valid_email($email) {
	  return preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $email);
	}

    function checkFilterKeyword($fieldToCheck, $offset=0) {
        $keywords = array("shailesh ojha", "info@semmiami.com", "7867864786", "semmiami", "Rahul sharma", "info@ranksindia.com", "9211469086", "ranksindia");

        foreach($keywords as $key) {
            $found[$key] = stripos($fieldToCheck, $key, $offset);
        }
        return $found;
    }


	if (!is_valid_email($formEmail)) {
	  echo 'Sorry, invalid email';
	}
	else 
	{
        foreach(checkFilterKeyword($formName) as $key=>$val) {
            if ($val !== false) {
                $fieldCheck = true;
            }
        }

        foreach(checkFilterKeyword($formEmail) as $key=>$val) {
            if ($val !== false) {
                $fieldCheck = true;
            }
        }

        foreach(checkFilterKeyword($formNumber) as $key=>$val) {
            if ($val !== false) {
                $fieldCheck = true;
            }
        }

        foreach(checkFilterKeyword($formQuery) as $key=>$val) {
            if ($val !== false) {
                $fieldCheck = true;
            }
        }

        foreach(checkFilterKeyword($formSubject) as $key=>$val) {
            if ($val !== false) {
                $fieldCheck = true;
            }
        }

        if ($fieldCheck === true)
        {
            echo "Thanks for your enquiry, one of the team will be in touch with you soon!";
        }
        else {
            $to = "ali@getglossy.com.au";
            $subject = $formSubject;
            $message = "Contact Name: " . $formName . " Contact Email: " . $formEmail . " Contact Number: " . $formNumber . " Contact Query: " . $formQuery;
            $from = "team@getglossy.com.au";
            $headers = "From:" . $from;

            if(mail($to,$subject,$message,$headers) == true)
            {
                echo "Thanks for your enquiry, one of the team will be in touch with you soon!";
            }
            else
            {
                echo "There was an error while processing your request.";
            }
        }
	}

    

?>