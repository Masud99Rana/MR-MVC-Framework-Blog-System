<?php
/**
 * Post Model 
 */
class PostModel extends DModel{
	
	function __construct() {
		parent::__construct();
	}

	public function getAllPost($table) {
		$sql  = "select * from $table order by id desc limit 3";
		return $this->db->select($sql);

	}

	public function PostById ($tablePost, $id) {
		$sql  = "select * from $tablePost where id=$id";
		return $this->db->select($sql);

	}

	public function getPostList($table) {
		$sql  = "select * from $table order by id desc";
		return $this->db->select($sql);

	}


	public function getPostById($tablePost, $tableCat, $id) {
		$sql = "select $tablePost.*, $tableCat.name from $tablePost
				inner join $tableCat
				on $tablePost.cat = $tableCat.id
				where $tablePost.id = $id ";

		return $this->db->select($sql);
	}
	public function getPostByCat($tablePost, $tableCat, $id) {
		$sql = "select $tablePost.*, $tableCat.name from $tablePost
				inner join $tableCat
				on $tablePost.cat = $tableCat.id
				where $tableCat.id = $id ";

		return $this->db->select($sql);
	}
	public function getLatestPost($table) {
		$sql  = "select * from $table order by id desc limit 3";
		return $this->db->select($sql);
	}

	public function getPostBySearch($tablePost, $keyword, $cat) {
		if (empty($keyword) && $cat == 0) {
			echo "<script> document.location.href='http://localhost/mvc/Index/home';</script>";
			
		}
		if (isset($keyword) && !empty($keyword)) {
			$sql = "select * from $tablePost where title LIKE '%$keyword%' or content LIKE '%$keyword%' ";
		}elseif (isset($cat)) {
			$sql  = "select * from $tablePost where cat = $cat";
		}
		return $this->db->select($sql);
	}

	public function insertPost($table, $data) {
		return $this->db->insert($table, $data);
	}


	public function updatePost($table, $data, $cond){
		return $this->db->update($table, $data, $cond);

	}

	public function delPostById($table, $cond) {
		return $this->db->delete($table, $cond);
	}
}?>