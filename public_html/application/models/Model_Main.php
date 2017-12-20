<?php

class Model_Main extends Model
{
    public function getContacts(){
		$contacts = [
			'phone' => '123-123',
			'address' => 'Roflyanskaya street',
			'email' => 'another@gmail.com'
		];
		return $contacts;
	}

}