<?php

class Form extends CI_Controller{
	public function form_view(){
		$this->load->view('login_form');
	}
	public function check(){

		

                $this->form_validation->set_message('min_length', 'полето {field} изисква {param} знака!');
                $this->form_validation->set_message('required', '{field} е задължително!');
                

                $this->form_validation->set_rules('user_name', 'Потребителско име', 'required|min_length[3]');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->form_view();
                }
                else
                {
                	$user_name = $this->input->post('user_name');
                	$password = $this->input->post('password');
                	$this->load->model('form_model');
                	$result2=$this->form_model->get_name($user_name);
                	if ($result2 && $password == $result2['password']) {
                		$this->load->library('session');
                			$_SESSION['first_name']=$result2['first_name'];
			                $_SESSION['username']=$result2['user_name'];
			                $_SESSION['phone']=$result2['phone'];
			                $_SESSION['photo']=$result2['photo'];
                        $this->load->view('success');
                    }else{
                    	echo "Грешен потребител или парола !";
                    	// echo "<p><pre><a href='form_view'>НАЗАД</a></pre></p>";
                    	$this->form_view(); 



                    }
                }
		
		// $user_name = $this->input->post('user_name');
		// //echo "$user_name"; 
		// $this->load->model('form_model');

		// $result2=$this->form_model->get_name($user_name);
		// // $result3=$this->form_model->get_first_name($user_name);

		// if ($result2) {
		// 	// session_destroy();
		// 	// session_start();

		// 	$this->load->library('session');
		
		// 	$_SESSION['first_name']=$result2['first_name'];
		// 	$_SESSION['username']=$result2['user_name'];
		// 	$_SESSION['phone']=$result2['phone'];
		// 	$_SESSION['photo']=$result2['photo'];


		// 	$this->load->view('success');
		// }else{
		// 	$this->form_view();
		// }


	}
		public function first(){
			
	$prefs = array(
        'start_day'    => 'monday',
        'month_type'   => 'short',
        'day_type'     => 'long',
        // 'show_next_prev'  => TRUE,
        // 'next_prev_url'   => 'http://localhost/code_with_login/index.php/form/first'
                         );
			$this->load->library('calendar',$prefs);
			 $events = array(
        3  => 'www.google.bg',
        7  => 'http://example.com/news/article/2006/07/',
        13 => 'http://example.com/news/article/2006/13/',
        26 => 'http://example.com/news/article/2006/26/'
);
            $data['calendar']=$this->calendar->generate(2016,7,$events);


			// session_start();
			$this->load->library('session');
			$this->load->view('first_name',$data);

		}	
}