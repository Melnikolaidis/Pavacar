<?php 
class Users extends CI_Controller { 

	public function newsletter_sign_up() {
		
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email',
			 array(
                'required'      => 'Παρακαλούμε συμπληρώστε το %s σας.',
                'valid_email'     => 'Αυτό το %s δεν είναι έγκυρο.'
			)
		);
		
		if ($this->form_validation->run() == FALSE)
            {
				
                //Load View
				$data['main_content'] = 'index';
				$this->load->view('layouts/main', $data);
            }
            else
            {
				if($this->User_model->newsletter_sign_up()) {
					$this->session->set_flashdata('newsletter_success', 'Ευχαριστούμε για την καταχώρησή σας.');
					redirect('pavacar');
				} else {
					$this->session->set_flashdata('newsletter_fail', 'Έχετε καταχωρήσει ήδη το E-mail σας.');
					redirect('pavacar');
				}
            }
	}
	
	public function contact_mail() {
		
		$this->form_validation->set_rules('name', 'Επωνυμία', 'trim|required|min_length[3]|max_length[20]',
			 array(
                'required'      => 'Παρακαλούμε συμπληρώστε την %s σας.',
				'min_length'	=> 'Η %s σας είναι μικρή',
				'max_length'	=> 'Η %s σας είναι μεγάλη'
			)
		);
		
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email',
			 array(
                'required'      => 'Παρακαλούμε συμπληρώστε το %s σας.',
                'valid_email'     => 'Αυτό το %s δεν είναι έγκυρο.'
			)
		);
		
		$this->form_validation->set_rules('comments', 'Σχόλια', 'trim|required|min_length[5]',
			 array(
                'required'      => 'Παρακαλούμε συμπληρώστε τα %s σας.',
				'min_length'	=> 'Τα %s σας είναι πολύ λίγα.'
			)
		);
		
		if ($this->form_validation->run() == FALSE)
            {
				//Load View
				$data['main_content'] = 'contact';
				$this->load->view('layouts/main', $data);
				
            } else {
				
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$subject = $this->input->post('subject');
				$comments = $this->input->post('comments');
				$newsletter = $this->input->post('newsletter');
				
				if(isset($subject)) {
						$email_subject = "Θέμα: ".$subject."\n";
					} else {
						$email_subject = "Θέμα: Σχόλια Πελατών"."\n";
					}
					
				$email_to = "melnikolaidis@hotmail.com";
				
				$email_message .= "Επωνυμία: ".$name."\n"; 

				$email_message .= "Email: ".$email."\n";
 
				$email_message .= "Σχόλια: ".$comments."\n";
				
				// create email headers
 
				$headers = 'From: '.$email."\r\n".
 
				'Reply-To: '.$email_to."\r\n" .
 
				'X-Mailer: PHP/' . phpversion();
				
				@mail($email_to, $email_subject, $email_message, $headers);
				
				if(isset($newsletter)) {
					
					if($this->User_model->newsletter_sign_up()) {
						$this->session->set_flashdata('newsletter_success', 'Ευχαριστούμε για την καταχώρησή σας.');
						$this->session->set_flashdata('mail_sent', 'Θα έρθουμε σε επικοινωνία μαζί σας το συντομότερο δυνατό. Ευχαριστούμε για την επιλογή σας.');
						redirect('pavacar/contact');
					} else {
						$this->session->set_flashdata('newsletter_fail', 'Έχετε καταχωρήσει ήδη το E-mail σας.');
						$this->session->set_flashdata('mail_sent', 'Θα έρθουμε σε επικοινωνία μαζί σας το συντομότερο δυνατό. Ευχαριστούμε για την επιλογή σας.');
						redirect('pavacar/contact');
					}
				} else {
					$this->session->set_flashdata('mail_sent', 'Θα έρθουμε σε επικοινωνία μαζί σας το συντομότερο δυνατό. Ευχαριστούμε για την επιλογή σας.');
					redirect('pavacar/contact');
				}
			}
	}
}