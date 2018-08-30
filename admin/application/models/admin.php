<?php 
/**
* @author Jay Rathod
*/
class Admin extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function loginAuthentication($email,$password)
	{
		$sql_str = "SELECT * FROM admin WHERE email_id = ".$this->db->escape($email)." AND password = ".$this->db->escape($password);
		return $this->db->query($sql_str)->num_rows();
	}
	public function adminSessionDataGet($email,$password)
	{
		$sql_str = "SELECT * FROM admin WHERE email_id = ".$this->db->escape($email)." AND password = ".$this->db->escape($password);
		return $this->db->query($sql_str)->row();
	}
	public function addNewCity($cityname)
	{
		$sql_str = "INSERT INTO cities SET city_name = ".$this->db->escape($cityname)." , status = true";
		return $this->db->query($sql_str);
	}
	public function getAllCities()
	{
		$sql_str = "SELECT id , CASE WHEN status = true THEN 'activate' ELSE 'Deactivate' END AS status , city_name FROM cities ORDER BY id DESC";
		return $this->db->query($sql_str)->result();
	}
	public function cityPresent($city_id)
	{
		$sql_str = "SELECT * FROM cities WHERE id = ".$this->db->escape($city_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function deleteCity($city_id)
	{
		
		$sql_str = "DELETE FROM cities WHERE id = ".$this->db->escape($city_id);
		$sql_str_2 = "DELETE FROM area WHERE fk_city_id = ".$this->db->escape($city_id);
		$this->db->trans_start();$this->db->query($sql_str);$this->db->query($sql_str_2);
		$this->db->trans_complete();return true ; 
	}
	public function addNewArea($city_id,$area_name,$description)
	{
		$sql_str = "INSERT INTO area SET fk_city_id = ".$this->db->escape($city_id).", area_name = ".$this->db->escape($area_name).", description = ".$this->db->escape($description)." , status = true";
		return $this->db->query($sql_str);
	}
	public function getAllArea()
	{
		$sql_str = "SELECT area.id as id , cities.city_name as city_name , area.area_name as area_name , CASE WHEN area.status = true THEN 'activate' ELSE 'Deactivate' END AS status FROM area INNER JOIN cities ON area.fk_city_id = cities.id";
		return $this->db->query($sql_str)->result();
	}
	public function areaPresent($area_id)
	{
		$sql_str = "SELECT * FROM area WHERE id = ".$this->db->escape($area_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function deleteArea($area_id)
	{
		$sql_str = "DELETE FROM area WHERE id = ".$this->db->escape($area_id);
		return $this->db->query($sql_str);
	}
	public function setServices($services_name,$description)
	{
		$sql_str = "INSERT INTO services SET services_name = ".$this->db->escape($services_name).", services_description = ".$this->db->escape($description).", status = true , created_date = NOW()";
		return $this->db->query($sql_str);
	}
	public function getAllServices()
	{
		$sql_str = "SELECT id , services_name , services_description , CASE WHEN services.status = true THEN 'activate' ELSE 'Deactivate' END AS status FROM services";
		return $this->db->query($sql_str)->result();	
	}
	public function servicesPresent($services_id)
	{
		$sql_str = "SELECT * FROM services WHERE id = ".$this->db->escape($services_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function deleteServices($services_id)
	{
		$sql_str = "DELETE FROM services WHERE id = ".$this->db->escape($services_id);
		return $this->db->query($sql_str);
	}
	public function setNewCategory($category_name,$description)
	{
		$sql_str = "INSERT INTO category SET category_name = ".$this->db->escape($category_name).", category_description = ".$this->db->escape($description).", status = true , created_date = NOW()";
		return $this->db->query($sql_str);
	}
	public function getAllCategory()
	{
		$sql_str = "SELECT id , category_name , CASE WHEN category.status = true THEN 'activate' ELSE 'Deactivate' END AS status , created_date FROM category";
		return $this->db->query($sql_str)->result();
	}
	public function categoryPresent($category_id)
	{
		$sql_str = "SELECT * FROM category WHERE id = ".$this->db->escape($category_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function deleteCategory($category_id)
	{
		$sql_str = "DELETE FROM category WHERE id = ".$this->db->escape($category_id);
		return $this->db->query($sql_str);
	}
	public function checkCityIsPresentById($city_id)
	{
		$sql_str = "SELECT * FROM cities WHERE id = ".$this->db->escape($city_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getAllAreasByCityId($city_id)
	{
		$sql_str = "SELECT * FROM area WHERE fk_city_id = ".$this->db->escape($city_id);
		return $this->db->query($sql_str)->result();
	}
	public function setProfile($data)
	{
		$sql_str = "INSERT INTO profile SET name = ".$this->db->escape($data['name']).",age = ".$this->db->escape($data['age']).",nationality = ".$this->db->escape($data['nationality']).",measurements = ".$this->db->escape($data['measurements']).",height = ".$this->db->escape($data['height']).",hair_colour = ".$this->db->escape($data['hair_colour']).",eye_colour = ".$this->db->escape($data['eye_colour']).",languages = ".$this->db->escape($data['languages']).",price_one_hour = ".$this->db->escape($data['price_one_hour']).",price_three_hour = ".$this->db->escape($data['price_three_hour']).",price_over_night = ".$this->db->escape($data['price_over_night']).",fk_city_id = ".$this->db->escape($data['fk_city_id']).",email_id = ".$this->db->escape($data['email']).",contact_number = ".$this->db->escape($data['contact_number']).",fk_area_id = ".$this->db->escape($data['fk_area_id']).", seeking_for = ".$this->db->escape($data['seeking_for']).",created_date = NOW() , status = true "; 
		if ($this->db->query($sql_str)) {
			header('Content-Type: application/json');
    		return json_encode(array('status' =>'success','lase_inserted_id'=>$this->db->insert_id()));
		} else {
			header('Content-Type: application/json');
    		return json_encode(array('status' =>'Faild'));
		}
	}
	public function setProfileName($image_name,$profile_id)
	{
		$sql_str = "INSERT INTO profile_image SET image_name = ".$this->db->escape($image_name).",fk_profile_id = ".$this->db->escape($profile_id);
		return $this->db->query($sql_str);
	}
	public function checkProfilePresentInCity($city_id)
	{
		$sql_str = "SELECT * FROM profile WHERE fk_city_id = ".$this->db->escape($city_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function checkProfilePresentInArea($area_id)
	{
		$sql_str = "SELECT * FROM profile WHERE fk_area_id = ".$this->db->escape($area_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function setBlog($data,$image_name,$blog_id=0)
	{
		$sql_str = "INSERT INTO blog SET title = ".$this->db->escape($data['title']).",meta_description = ".$this->db->escape($data['meta_description']).",meta_title = ".$this->db->escape($data['meta_title']).",description = ".$this->db->escape($data['description']).",image = ".$this->db->escape($image_name).",created_date = NOW() ,status = true";
		return $this->db->query($sql_str);
	}
	public function getAllBlogs()
	{
		$sql_str = "SELECT * FROM blog";
		return $this->db->query($sql_str)->result();
	}
	public function delete_blog($blog_id)
	{
		$sql_str = "DELETE FROM blog WHERE id = ".$this->db->escape($blog_id);
		return $this->db->query($sql_str);
	}

}