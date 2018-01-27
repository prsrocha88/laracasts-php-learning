<?php

namespace App\Controllers;

class PagesController {
	
	public function home() {

		require view('index');

	}

	public function about() {

		$company = 'Laracasts';

		require view('about', ['company' => $company] );

	}

	public function contact() {

		require view('contact');

	}

}