<?php
//https://app.mailgun.com -> crear-se un usuari i fer login -> enviaran verification code al mòbil
//https://app.mailgun.com/app/account/authorized -> autoritzar als emails als quals anem a enviar: ruralshoponti@gmail.com i yomogan@gmail.com
//https://app.mailgun.com/app/domains -> ací tenim la configuració: api_key i API Base URL

    function send_mailgun($email,$marca,$model,$user,$func){
    	$config = array();
    	$config['api_key'] = "key-27a47845669378b8c18d62529d06e676"; //API Key
    	$config['api_url'] = "https://api.mailgun.net/v2/sandboxe09f505918c143c685e0ee65bc9c60ba.mailgun.org/messages"; //API Base URL

    	$message = array();
    	$message['from'] = "firemovieapp@gmail.com";
    	$message['to'] = 'firemovieapp@gmail.com';
    	$message['h:Reply-To'] = "firemovieapp@gmail.com";
    	$message['subject'] = "Hello, this is a test";
        if ($func==="create"){
    	$message['html'] = 'Hello' . $email .',<br>
        Your mobile with name: <b>' . $marca . '</b>, model: <b>' . $model . '</b> and id: <b>' . $user . '</b> .Has been created';
        }else{
            $message['html'] = 'Hello' . $email .',<br>
        Your mobile with name: ' . $marca . ', model: ' . $model . ' and id: ' . $user . '. Has been updated';
        }
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $config['api_url']);
    	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    	curl_setopt($ch, CURLOPT_USERPWD, "api:{$config['api_key']}");
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    	curl_setopt($ch, CURLOPT_POST, true); 
    	curl_setopt($ch, CURLOPT_POSTFIELDS,$message);
    	$result = curl_exec($ch);
    	curl_close($ch);
    	
    	//print_r($result).'<br>';
        //{ "id": "<20170602094223.81454.4543A9B40EA7AF05@sandbox1811da627e3e450ebabe2e836ed20a3a.mailgun.org>", "message": "Queued. Thank you." }
    	
    	$obj = json_decode($result);
        //print $obj->{'message'}; //Queued. Thank you.
        
        if($obj->{'message'} === "Queued. Thank you."){
            return "send_email_ok";
        }else{
            return "send_email_not";
        }
    }
    
    /*$json = send_mailgun('firemovieapp@gmail.com');
    echo $json; //send_email_ok*/
    