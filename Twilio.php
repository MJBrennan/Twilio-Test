<?php


 require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

 use Twilio\Rest\Client;

class Twilio{


	public $imput;
	public $output;

	public $sid = 'YOUR_ID';
	public $token = 'YOUR_TOKEN';


	public function __construct(){

	$property =	$this->smsSend();

	print $property;

	}


  	 public function smsSend(){


  	 try{

		$sms = new Client($this->sid,$this->token);

		$sms->account->messages->create("7676767676443444", array("from"=>"+YOUR_TWILIO_NUMBER","body"=>"Message"));


		return "Message Sent";


		}catch(Exception $ex){

		return $ex->getMessage();


		}
	}
}


$twilio = new Twilio();

