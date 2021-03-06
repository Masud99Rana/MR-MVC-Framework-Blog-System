<?php
/**
 * User Controller
 */
class User extends Dcontroller {
	
	public function __construct() {
		parent::__construct();
		$data = array();
	}

	public function Index(){
		$this->makeUser();
	}

	public function makeUser(){
		$this->load->view("admin/header");
		$this->load->view("admin/sidebar");
		$this->load->view("admin/makeuser");
		$this->load->view("admin/footer");
	}

	public function addNewUser() {
		if (!($_POST)) {
			header("Location: ".BASE_URL."/User");
		}
		$input = $this->load->validation('DForm');
		$input ->post('username');

		$input ->post('password');

		$input ->post('level');

		// $title 	 = $_POST['title'];
		// $content = $_POST['content'];
		// $cat 	 = $_POST['cat'];

		$tableUser = "tbl_user";

		$username 	 = $input->values['username'];
		$password 	 = md5($input->values['password']);
		$level 	 	 = $input->values['level'];
		
		$data = array(
			'username'  	=> $username,
			'password'   	=> $password,
			'level' 		=> $level
		);
		$userModel = $this->load->model("UserModel");

 		$result = $userModel->addUser($tableUser, $data);

 		$mdata = array();

 		if ($result == 1) {
 			$mdata['msg'] ="User Added Successfully...";
 		} else {
 			$mdata['msg'] ="User not Added ...";
 		}
 		$url = BASE_URL."/User/listUser?msg=".urlencode(serialize($mdata));

 		header("Location:$url");

	}



	public function listUser() {
		$this->load->view("admin/header");
		$this->load->view("admin/sidebar");

		$tableUser = "tbl_user";

		$userModel = $this->load->model("UserModel");
		$data['users']= $userModel->userList($tableUser);


		$this->load->view("admin/userlist", $data);
		$this->load->view("admin/footer");
	}

	public function deleteUser($id=NULL) {
		$tableUser = "tbl_user";
		$cond = "id=$id";
		
		$userModel = $this->load->model("UserModel");
		$result = $userModel->delUserById($tableUser, $cond);

		$mdata = array();

 		if ($result == 1) {
 			$mdata['msg'] ="User Deleted Successfully...";
 		} else {
 			$mdata['msg'] ="User not Deleted ...";
 		}
 		$url = BASE_URL."/User/listUser?msg=".urlencode(serialize($mdata));

 		header("Location:$url");
	}













}
?>