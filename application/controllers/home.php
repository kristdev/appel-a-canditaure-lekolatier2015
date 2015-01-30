<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$config= array(
			array(
	            'field'   => 'nom_artiste', 
	            'label'   => 'nom artiste', 
	            'rules'   => 'required|xss_clean'
            ),
            array(
	            'field'   => 'pays', 
	            'label'   => 'pays residence', 
	            'rules'   => 'required'
            ),
            array(
	            'field'   => 'responsable', 
	            'label'   => 'nom responsable', 
	            'rules'   => 'required|xss_clean'
            ),
            array(
	            'field'   => 'email', 
	            'label'   => 'Email', 
	            'rules'   => 'required|xss_clean|valid_email'
            ),
            array(
	            'field'   => 'telephone', 
	            'label'   => 'telephone', 
	            'rules'   => 'xss_clean'
            ),
            array(
	            'field'   => 'nbpers', 
	            'label'   => 'Nb personnes', 
	            'rules'   => 'required|xss_clean|greater_than[0]'
            ),
            array(
	            'field'   => 'transport', 
	            'label'   => 'transport international', 
	            'rules'   => 'required'
            ),
            array(
	            'field'   => 'siteweb', 
	            'label'   => 'site web', 
	            'rules'   => 'xss_clean'
            ),
            array(
	            'field'   => 'youtube', 
	            'label'   => 'youtube', 
	            'rules'   => 'xss_clean'
            )
		);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('homepage');
		}
		else
		{
			$data['success_message']="Votre Formulaire a été envoyé avec succès, vous recevrez dans votre boîte mail un message de confirmation";
			$this->load->view('homepage',$data);

		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */