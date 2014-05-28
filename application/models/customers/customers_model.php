<?php
class customers_model extends CI_Model {

    var $customerID = '';
	var $isActive = '';
	var $firstName = '';
	var $lastName = '';
	var $email = '';
	var $accountPassword = '';
	var $lolCountry = '';
	var $lolUsername = '';
	var $lolPassword = '';
	var $skypeID = '';
	var $token = '';
	var $joined = '';
	var $lastLogin = '';

    function __construct()
    {
        parent::__construct();
    }
	
	function createCustomer($firstName, $lastName, $email, $password, $lolCountry, $lolUsername, $lolPassword, $skypeID)
	{
		
	}
    
    function getCustomerById($_customerID)
	{
		$query = $this->db->select('*')->from('CUSTOMERS')->where('CUSTOMER_ID', $_customerID)->limit(1)->get();
		return $query->row();
	}

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
?>