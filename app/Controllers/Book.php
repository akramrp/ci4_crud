<?php
	namespace App\Controllers;
	use App\Models\BookModel;

	class Book extends BaseController {
		public function index(){
			// echo 'hhhhhhhhhhhhhh';
			// return view('list');
			$session  = \config\Services::session();
			$data['session'] = $session; 

			$model = new BookModel;
			$data['books'] = $model->getRecords();

			return view('list', $data);
		}

		public function create(){
			$session  = \config\Services::session();
			helper('form');
			$data = [];

			if($this->request->getMethod() == 'post' ){
				$input = $this->validate([
					'name' => 'required|min_length[5]',
					'auther' => 'required|min_length[5]',
				]);
				
				if($input == true){
					// form validate successfully | save to DB
					$model = new BookModel();
					$model->save([
						'name' => $this->request->getPost('name'),
						'auther' => $this->request->getPost('auther'),
						'isbn' => $this->request->getPost('isbn')
					]);

					$session->setFlashdata('success', 'book add successfully');
					return redirect()->to('/book');
				}
				else{
					// from not validate
					$data['validation'] = $this->validator;
				}
			}
			return view('create', $data);
		}

		public function edit($id){
			$session  = \config\Services::session();
			helper('form');
			$data = [];
			$model = new BookModel();
			$book = $model->getRow($id);
			// print_r($book);
			if(empty($book)){
				$session->setFlashdata('error', 'record not found.');
				return redirect()->to('/book');
			}
			$data['book'] = $book;

			if($this->request->getMethod() == 'post' ){
				$input = $this->validate([
					'name' => 'required|min_length[5]',
					'auther' => 'required|min_length[5]',
				]);
				
				if($input == true){
					// form validate successfully | save to DB
					$model = new BookModel();
					$model->update($id, [
						'name' => $this->request->getPost('name'),
						'auther' => $this->request->getPost('auther'),
						'isbn' => $this->request->getPost('isbn')
					]);

					$session->setFlashdata('success', 'book edit successfully');
					return redirect()->to('/book');
				}
				else{
					// from not validate
					$data['validation'] = $this->validator;
				}
			}
			return view('edit', $data);
		}

		public function delete($id){
			$session  = \config\Services::session();
			$model = new BookModel();
			$book = $model->getRow($id);
			if(empty($book)){
				$session->setFlashdata('error', 'record not found.');
				return redirect()->to('/book');
			}

			$model->delete($id);
			$session->setFlashdata('success', 'record delete successfully.');
			return redirect()->to('/book');
		}
	}
?>