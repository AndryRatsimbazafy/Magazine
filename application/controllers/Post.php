<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

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
	public function showPost()
	{
		$this->load->helper('url');
    $this->load->model('Category');
    $this->load->model('Posts');
		$idPost=$this->input->get('idPost');
		$listeCateg=$this->Category->getAllCategorie();
    $post=$this->Posts->getPostById($idPost);
    $rand=$this->Posts->getrandomPost();

		$data = array();
		$data['listeCateg'] = $listeCateg;
    $data['post'] = $post;
		$data['randomPost'] = $rand;
		$this->load->view('image-post', $data);
	}
}
