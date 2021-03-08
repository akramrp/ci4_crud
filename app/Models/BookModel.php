<?php
	namespace App\Models;
	use CodeIgniter\Model;

	class BookModel extends Model {
		protected $table = 'tbl_book';
		protected $allowedFields = ['name','auther','isbn'];

		public function getRecords(){
			return $this->orderBy('id','desc')->findAll();
		}

		public function getRow($id){
			return $this->where('id', $id)->first();
		}  
	}
?>