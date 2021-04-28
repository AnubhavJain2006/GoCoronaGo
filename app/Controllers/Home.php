<?php

namespace App\Controllers;

class Home extends BaseController {

	public function index() {
		return view('site/homepage');
	}


	public function oxygen_supply() {
		return view('site/oxygen_supply');
	}


	public function tiffin_services() {
		return view('site/tiffin_services');
	}


	public function bed_availability() {
		return view('site/bed_availability');
	}


	public function plasma_donor() {
		return view('site/plasma_donor');
	}


	public function covid_hospitals() {
		return view('site/covid_hospitals');
	}


	public function vaccination_drives() {
		return view('site/vaccination_drives');
	}


	public function testing_centers() {
		return view('site/testing_centers');
	}


	public function home_treatment() {
		return view('site/home_treatment');
	}


	public function newly_opened() {
		return view('site/newly_opened');
	}

	public function covid_memes() {
		return view('site/covid_memes');
	}

}
