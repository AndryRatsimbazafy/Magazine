<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->helper('url');
		$this->load->view('Admin/login');
	}

	public function connect(){
		$this->load->helper('url');
		$this->load->model('Administrator');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->Administrator->authentificate($username, $password)){
			$string=base_url();
			redirect($string.'Home-Admin', 'refresh');
		}
		else
			$this->load->view('Admin/login');
	}

	public function acceuil(){
		$this->load->helper('url');
		$this->load->model('Posts');
		$this->load->model('Category');
		$listeCateg=$this->Category->getAllCategorie();
		$listePost=$this->Posts->getAllPost();
    $admin = $this->session->userdata('admin');
		if(!isset($admin)){
        redirect('index.php?c=Admin', 'refresh');
    }
		$data = array();
		$data['admin'] = $admin;
		$data['listeCateg'] = $listeCateg;
		$data['listePost'] = $listePost;
		$this->load->view('Admin/index', $data);
	}

	public function toAddItem(){
		$this->load->helper('url');
		$this->load->model('Category');
		$listeCateg=$this->Category->getAllCategorie();
		$data = array();
		$data['listeCateg'] = $listeCateg;
		$this->load->view('Admin/add', $data);
	}

	public function toEditItem(){
		$this->load->helper('url');
		$this->load->model('Category');
		$this->load->model('Posts');
		$idPost=$this->input->get('idPost');
		$listeCateg=$this->Category->getAllCategorie();
		$post=$this->Posts->getPostById($idPost);
		$data = array();
		$data['listeCateg'] = $listeCateg;
		$data['post'] = $post;
		$this->load->view('Admin/edit', $data);
	}

	public function addItem(){
		$this->load->helper('url');
		$this->load->model('Category');
		$this->load->model('Posts');

		$title = $this->input->post('Title');
		$subTitle = $this->input->post('SubTitle');
		$text = $this->input->post('Text');
		$idCateg = $this->input->post('Categ');

		$categ = $this->Category->getCategorieById($idCateg);
		$nomCateg = $categ['Nom'];
		$image = $categ['Nom'];
		$image2 = $categ['Nom']."2";

		$this->Posts->insertPost($title, $subTitle, $text, $idCateg, $image, $nomCateg, $image2);

		$string=base_url();
		redirect($string.'Home-Admin', 'refresh');
	}

	public function insertCategory(){
		$this->load->helper('url');
		$this->load->model('Category');
		$nom = $this->input->post('Title');
		$this->Category->insertCategory($nom);
		$string=base_url();
		redirect($string.'Home-Admin', 'refresh');
	}

	public function editItem(){
		$this->load->helper('url');
		$this->load->model('Category');
		$this->load->model('Posts');

		$title = $this->input->post('Title');
		$subTitle = $this->input->post('SubTitle');
		$text = $this->input->post('Text');
		$idCateg = $this->input->post('Categ');
		$idPost=$this->input->post('idPost');

		$categ = $this->Category->getCategorieById($idCateg);
		$nomCateg = $categ['Nom'];
		$image = $categ['Nom'];
		$image2 = $categ['Nom']."2";

		$this->Posts->editPost($title, $subTitle, $text, $idCateg, $image, $nomCateg, $image2, $idPost);

		$string=base_url();
		redirect($string.'Home-Admin', 'refresh');
	}

	public function deleteItem(){
		$this->load->helper('url');
		$this->load->model('Posts');
		$idPost=$this->input->get('idPost');
		$this->Posts->deletePost($idPost);

		$string=base_url();
		redirect($string.'Home-Admin', 'refresh');
	}

	public function getPostByCateg(){
		$this->load->helper('url');
		$this->load->model('Posts');
		$this->load->model('Category');
		$idCateg=$this->input->get('idCateg');
		$listeCateg=$this->Category->getAllCategorie();
		$listePost=$this->Posts->getPostByIdCategorie($idCateg);
		$categ=$this->Category->getCategorieById($idCateg);
		$data = array();
		$data['listeCateg'] = $listeCateg;
		$data['categ'] = $categ;
		$data['listePost'] = $listePost;
		$this->load->view('Admin/postCategory', $data);
	}
}
