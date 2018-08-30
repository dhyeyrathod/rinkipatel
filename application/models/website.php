<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author jay Rathod
*/
class Website extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAllServices()
	{
		$sql_str = "SELECT id , services_name FROM services WHERE status = true";
		return $this->db->query($sql_str)->result();
	}
	public function getAllLocation()
	{
		$sql_str = "SELECT id , area_name FROM area WHERE status = true";
		return $this->db->query($sql_str)->result();
	}
	public function getAllCategory()
	{
		$sql_str = "SELECT id , category_name FROM category WHERE status = true";
		return $this->db->query($sql_str)->result();	
	}
	public function getAllProfile($limit = 0)
	{
		$sql_str = "SELECT profile.id , name , area.area_name as area_name , (SELECT profile_image.image_name FROM profile_image WHERE profile_image.fk_profile_id = profile.id ORDER BY RAND() LIMIT 1 ) AS image_name FROM profile INNER JOIN area ON area.id = profile.fk_area_id ORDER BY RAND()";
		if ($limit != 0) {
			$sql_str .= " LIMIT $limit";
		}
		return $this->db->query($sql_str)->result();
	}
	public function checkProfileIdIsPresent($profile_id)
	{
		$sql_str = "SELECT * FROM profile WHERE id = ".$this->db->escape($profile_id)." AND status = true";
		return $this->db->query($sql_str)->num_rows();	
	}
	public function getSingleProfileById($profile_id)
	{
		$sql_str = "SELECT profile.id , age , nationality , measurements , height , hair_colour , eye_colour , languages , price_one_hour , price_three_hour , price_over_night , seeking_for , contact_number , email_id , cities.city_name as city_name , area.area_name as area_name FROM profile INNER JOIN cities ON profile.fk_city_id = cities.id INNER JOIN area ON profile.fk_area_id = area.id WHERE profile.id = ".$this->db->escape($profile_id);
		return $this->db->query($sql_str)->row();
	}
	public function getSingleProfileImagesById($profile_id)
	{
		$sql_str = "SELECT * FROM profile_image WHERE fk_profile_id = ".$this->db->escape($profile_id);
		return $this->db->query($sql_str)->result();
	}
	public function setBooking($data)
	{
		$sql_str = "INSERT INTO escorts_booking (id, name, date_of_appointment, duration, email, contact_number, message,created_date) VALUES (NULL, ".$this->db->escape($data['name']).", ".$this->db->escape($data['date_of_appointment']).", ".$this->db->escape($data['duration']).", ".$this->db->escape($data['email']).", ".$this->db->escape($data['contact_number']).", ".$this->db->escape($data['message']).",NOW())";
		return $this->db->query($sql_str);
	}
	public function getProfileByLocation($location_id)
	{
		$sql_str = "SELECT profile.id , name , area.area_name as area_name , (SELECT profile_image.image_name FROM profile_image WHERE profile_image.fk_profile_id = profile.id ORDER BY RAND() LIMIT 1 ) AS image_name FROM profile INNER JOIN area ON area.id = profile.fk_area_id WHERE profile.fk_area_id = ".$this->db->escape($location_id)." ORDER BY RAND()";
		return $this->db->query($sql_str)->result();
	}
	public function getLocationInfo($location_id)
	{
		$sql_str = "SELECT * FROM area WHERE id = ".$this->db->escape($location_id);
		return $this->db->query($sql_str)->row();
	}
	public function getServicesInfoById($services_id)
	{
		$sql_str = "SELECT * FROM services WHERE id = ".$this->db->escape($services_id);
		return $this->db->query($sql_str)->row();
	}
	public function getCategoryInfoById($category_id)
	{
		$sql_str = "SELECT * FROM category WHERE id = ".$this->db->escape($category_id);
		return $this->db->query($sql_str)->row();
	}
	public function getAllBlog()
	{
		$sql_str = "SELECT * FROM blog";
		return $this->db->query($sql_str)->result();
	}
}