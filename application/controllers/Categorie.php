<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

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
	public function getPostByCateg()
	{
		$this->load->helper('url');
		$this->load->model('Category');
		$this->load->model('Posts');
		$idCateg=$this->input->get('idCateg', TRUE);
		$listeCateg=$this->Category->getAllCategorie();
		$categ=$this->Category->getCategorieById($idCateg);
		$listePost=$this->Posts->getPostByIdCategorie($idCateg);

		$rand=$this->Posts->getrandomPost();

		$data = array();
		$data['listeCateg'] = $listeCateg;
		$data['listePost'] = $listePost;
		$data['randomPost'] = $rand;
		$data['categ'] = $categ;
		$this->load->view('postCategory', $data);
	}
}
