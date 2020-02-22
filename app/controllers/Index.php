<?php

	/**
	 * Index Controller
	 */
class Index extends DController {

		
		function __construct() {
			parent::__construct();
		}
		public function Index() {
			$this->home();
		}
		public function home() {
			$tablePost = "post";
			$tableCat = "category";
			$data = array();
//start apply color
			// $tableUi = "tbl_ui";
			// $uiModel = $this->load->model("UIModel");
			// $data['color'] = $uiModel->getColor($tableUi);
	 	// 	$this->load->view("header", $data);
//End apply color
	 		$this->load->view("header");
 			$catModel = $this->load->model("CatModel");
 			$data['catlist']= $catModel->catList($tableCat);

 			$this->load->view("search",$data);

 			
 			
 			$postModel = $this->load->model("PostModel");
 			$data['allPost']= $postModel->getAllPost($tablePost);
 			$this->load->view("content", $data);	



 			
 			//$catModel = $this->load->model("CatModel");
 			//$data['catlist']= $catModel->catList($tableCat);		
 			$data['latestPost']= $postModel->getLatestPost($tablePost);
 			$this->load->view("sidebar", $data);

 			$this->load->view("footer");	
 		}

 		public function postDetails($id=NULL) {
 			
			$tablePost = "post";
			$tableCat = "category";
			$data = array();
 			$this->load->view("header");

 			$catModel = $this->load->model("CatModel");
 			$data['catlist']= $catModel->catList($tableCat);

 			$this->load->view("search",$data);


 			//$data = array();
 			//$tablePost = "post";
 			//$tableCat = "category";

 			$postModel = $this->load->model("PostModel");
 			$data['postbyid']= $postModel->getPostById($tablePost, $tableCat, $id);
 	
 			$this->load->view("details", $data);

 			//$catModel = $this->load->model("CatModel");
 			//$data['catlist']= $catModel->catList($tableCat);		
 			$data['latestPost']= $postModel->getLatestPost($tablePost);
 			$this->load->view("sidebar", $data);

 			$this->load->view("footer");	
 		}


 		public function postByCat($id=NULL) {
			$tablePost = "post";
			$tableCat = "category";
			$data = array();
 			$this->load->view("header");

 			$catModel = $this->load->model("CatModel");
 			$data['catlist']= $catModel->catList($tableCat);

 			$this->load->view("search",$data);


 			// $data = array();
 			// $tablePost = "post";
 			// $tableCat = "category";

 			$postModel = $this->load->model("PostModel");
 			$data['getcat']= $postModel->getPostByCat($tablePost, $tableCat, $id);

 			$this->load->view("postbycat", $data);
 
 			//$catModel = $this->load->model("CatModel");
 			//$data['catlist']= $catModel->catList($tableCat);		
 			$data['latestPost']= $postModel->getLatestPost($tablePost);
 			$this->load->view("sidebar", $data);

 			$this->load->view("footer");	

 		}

 		public function search() {
 			$data = array();
 			$keyword = $_REQUEST['keyword'];
 			$cat = $_REQUEST['cat'];

			$tablePost = "post";
			$tableCat = "category";
			
 			$this->load->view("header");

 			$catModel = $this->load->model("CatModel");
 			$data['catlist']= $catModel->catList($tableCat);

 			$this->load->view("search",$data);


 			// $data = array();
 			// $tablePost = "post";
 			// $tableCat = "category";

 			$postModel = $this->load->model("PostModel");
 			$data['postbysearch']= $postModel->getPostBySearch($tablePost, $keyword, $cat);
 			$this->load->view("sresult", $data);
 
 			//$catModel = $this->load->model("CatModel");
 			//$data['catlist']= $catModel->catList($tableCat);		
 			$data['latestPost']= $postModel->getLatestPost($tablePost);
 			$this->load->view("sidebar", $data);
 			$this->load->view("footer");
 		}

 		public function notFound(){
 			
 			$this->load->view("404");

 		}
 		
}
?>