<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Driverpositionupdate extends Controller {

	public function action_index()
	{	
		$driverposition = ORM::factory("driverposition");
		if(isset($_POST["delete"]))
		{
			DB::Query(Database::DELETE, '
				DELETE FROM driverpositions
				WHERE id != 1'
			)->execute();
		}
		else 
		{
			if(isset($_POST["driver_id"])) 
			{
	     	$driver_id = json_decode($_POST["driver_id"]);
	     	$client_id = json_decode($_POST["client_id"]);
	     	$lat = json_decode($_POST["lat"]);
	     	$lng = json_decode($_POST["lng"]);
				
				$driverposition->driver_id = $driver_id;
				$driverposition->client_id = $client_id;
				$driverposition->lat = $lat;
				$driverposition->lng = $lng;
				$driverposition->notes = $notes;
				$driverposition->time = time();
				$driverposition->save();
			}
		}
		
		$drivers = ORM::factory("driverposition")->find_all();
		$view = View::factory('driverpositionupdate/index')->set('drivers', $drivers);
		$this->response->body($view);
	}
}
 
