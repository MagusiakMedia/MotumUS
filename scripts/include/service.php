<?php
	//Init Methods
	//------------------------------------------
		
	//------------------------------------------
	//Init Methods


	header('Content-Type: application/json');

	if (isset($_POST['action']))
	{
		$data = $_POST;
		$response = createResponse($_POST['action'], $data);
	}
	else{
		$response = getBadResponse();
	}
	
	echo json_encode($response);


	//Service Methods
	//------------------------------------------

		function createResponse($action, $data){
			$response = handleAction($action, $data);
			return $response;
		}
		
		function handleAction($action, $data){
			switch ($action)
			{
				case 'ConnectForm':
					$response = ConnectForm($data);
				break;
				default:
					$response = getBadResponse();
				break;

			}
			return $response;
		}
		
	//------------------------------------------
	//Service Methods

	//Methods

	function ConnectForm($data)
	{
		if (!$data)
		{
			$response = getBadResponse();
		}
		else
		{

			$bodyEmail = '';
			$bodyEmail .= 'Customer Name: ';
			$bodyEmail .= $data['custName'];
			$bodyEmail .= '<br />';
			$bodyEmail .= 'Customer Email: ';
			$bodyEmail .= $data['custEmail'];
			$bodyEmail .= '<br />';
			$bodyEmail .= 'Customer Phone: ';
			$bodyEmail .= $data['custPhone'];
			$bodyEmail .= '<br />';
			$bodyEmail .= 'Customer Preference: ';
			$bodyEmail .= $data['custPref'];
			$bodyEmail .= '<br />';


			$from2 = $data['custEmail'];

            $to = 'info@motum-us.com';
            
            $from = 'no-reply@motum-us.com';
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: '.$from."\r\n".
                'Reply-To: '.$from2."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            
            // Sending email
            if(mail($to, 'New Connection Request', $bodyEmail, $headers)){
				
				$response['success'] = 1;
            } else{
				$response['success'] = 0;
				
            }

		}
		
		return $response;
	}
	
	


	//General Functions
	//------------------------------------------

		function getBadResponse(){		
			$response = createJSON(0, "There was an error, please try again.");
			return $response;
		}

		
		function createJSON($success, $msg){
			$response['success'] = $success;
			$response['msg'] = $msg;
			return $response;
		}

	//------------------------------------------
	//General Functions


?>