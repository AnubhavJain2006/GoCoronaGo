<?php
    
namespace App\Controllers\site;

use CodeIgniter\Controller;
use App\Models\Pincodes_model;
use App\Models\Oxygen_supply_model;

class Oxygen_supply_controller extends Controller {

	public function oxygen_supply() {

		// getting all pincodes for form options
		$pincodes_model = new Pincodes_model();
		$all_places = $pincodes_model->places();

		$oxygen_supply_model = new Oxygen_supply_model();

		$suppliers = null;
        $dropdownOption = null;

        // handling post req
        helper('form');
        if ($this->request->getmethod() == 'post') {

            if($this->validate([
				'city' => 'required|alpha_space',
				'place' => 'required|alpha_space'
			])){		
				$city = $this->request->getVar('city');
                $place = $this->request->getVar('place');
				
				$dropdownOption = $place;						// used for retaining place in form after redirection

				if($place == "all places")						// finding suppliers with all places in city
                	$suppliers = $oxygen_supply_model->find_oxygen_suppiers_in_city($city);
				else {
					// finding pin code of place, to get result of surrounding places				
					$place_pin = $pincodes_model->get_pin_from_place($place, $city);
					$suppliers = $oxygen_supply_model->find_oxygen_suppiers_with_pin($place_pin);
				}				                
			}
			else {
				// some error, supply default result
				echo "validation fails";
				$suppliers = $oxygen_supply_model->find_oxygen_suppiers();
			}
		}
    



		// passing data
		$data = [
            'dropDownOption' =>$dropdownOption,
			'places' => $all_places,
			'suppliers' => $suppliers,
		];
		return view('site/oxygen_supply', $data);
	}

    

		
}