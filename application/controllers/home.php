<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function index(){
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

		if($this->form_validation->run() == FALSE){
			$this->form_validation->set_error_delimiters('<p class="text-warning">', '</p>');
			$this->load->view('homepage');
		}
		else{
			// Upload config
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'gif|jpg|png|doc|docx|pdf';
			$config['encrypt_name'] = true;
			// Fin config

			// Initialize config
			$this->upload->initialize($config);

			if($this->upload->do_upload('titre1')){
				
				// Fin initialize

				$data_fileuploaded1=$this->upload->data();
				$filename1=$data_fileuploaded1['file_name'];

			}else{
					$data['upload_error']= $this->upload->display_errors();
					$this->load->view('homepage', $data);
			}

			if($this->upload->do_upload('titre2')){
				
				// Fin initialize

				$data_fileuploaded2=$this->upload->data();
				$filename2=$data_fileuploaded2['file_name'];

			}else{
					$data['upload_error']= $this->upload->display_errors();
					$this->load->view('homepage', $data);
			}

			if($filename1 || $filename2){
				$nom_artiste=$this->input->post('nom_artiste');
				$pays=$this->input->post('pays');
				$responsable=$this->input->post('responsable');
				$email=$this->input->post('email');
				$telephone=$this->input->post('telephone');
				$nbpers=$this->input->post('nbpers');
				$transport=$this->input->post('transport');
				$siteweb=$this->input->post('siteweb');
				$youtube=$this->input->post('youtube');
				$date=time();

				$this->load->model('mdl_upload');
				$data_inserted=array(
					'nom_artiste'		=>		$nom_artiste,
					'pays_residence'	=>		$pays,
					'nom_responsable'	=>		$responsable,
					'email'				=>		$email,
					'telephone'			=>		$telephone,
					'nbpers'			=>		$nbpers,
					'transport'			=>		$transport,
					'siteweb'			=>		$siteweb,
					'youtube'			=>		$youtube,
					'titre1'			=>		$filename1,
					'titre2'			=>		$filename2,
					'date'				=>		$date
				);
				$table='canditature';
				$this->mdl_upload->insert_somedata($table,$data_inserted);


				$data['success_message']="Votre Formulaire a été envoyé avec succès, vous recevrez dans votre boîte mail un message de confirmation";
				$this->load->view('homepage',$data);
			}

			/*if(isset($_FILES['titre2'])){
				if($this->upload->do_upload('titre2')){
					// Upload config
					$config['upload_path'] = './uploads';
					$config['allowed_types'] = 'gif|jpg|png|doc|docx|pdf';
					$config['encrypt_name'] = true;
					// Fin config

					// Initialize config
					$this->upload->initialize($config);
					// Fin initialize

					$data_fileuploaded2=$this->upload->data();
					$filename2=$data_fileuploaded2['file_name'];

					echo $filename2;


				}else{
					$data['upload_error']= $this->upload->display_errors();
					$this->load->view('homepage', $data);
				}
			}else{

			}*/

			/*if($filename1 && $filename2){
				$nom_artiste=$this->input->post('nom_artiste');
				$pays=$this->input->post('pays');
				$responsable=$this->input->post('responsable');
				$email=$this->input->post('email');
				$telephone=$this->input->post('telephone');
				$nbpers=$this->input->post('nbpers');
				$transport=$this->input->post('transport');
				$siteweb=$this->input->post('siteweb');
				$youtube=$this->input->post('youtube');
				$date=time();

				$this->load->model('mdl_upload');
				$data_inserted=array(
					'nom_artiste'		=>		$nom_artiste,
					'pays_residence'	=>		$pays,
					'nom_responsable'	=>		$responsable,
					'email'				=>		$email,
					'telephone'			=>		$telephone,
					'nbpers'			=>		$nbpers,
					'transport'			=>		$transport,
					'siteweb'			=>		$siteweb,
					'youtube'			=>		$youtube,
					// 'titre1'			=>		$filename1,
					// 'titre2'			=>		$filename2,
					'date'				=>		$date
				);
				$table='canditature';
				// $this->mdl_upload->insert_somedata($table,$data_inserted);

				echo $filename1.' '.$filename2;

				$data['success_message']="Votre Formulaire a été envoyé avec succès, vous recevrez dans votre boîte mail un message de confirmation";
				$this->load->view('homepage',$data);
			}*/
		}
	}

	/*public function test(){
		// Upload config
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'gif|jpg|png|doc|docx|pdf';
		$config['encrypt_name'] = true;
		// Fin config

		// Initialize config
		$this->upload->initialize($config);
		// Fin initialize

		if (!$this->upload->do_upload('titre1') or !$this->upload->do_upload('titre2')){
			$data['upload_error']= $this->upload->display_errors();

			$this->load->view('homepage', $data);
		}
		else{
			$data['success_message']="Votre Formulaire a été envoyé avec succès, vous recevrez dans votre boîte mail un message de confirmation";
			$this->load->view('homepage',$data);
		}
	}*/
}