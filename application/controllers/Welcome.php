<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

   public function __construct()
   {
     parent::__construct();
     $this->load->model('Main_Model');
   
   }


	public function index()
	{
		$this->load->view('home');
	}

	public function register()
	{
		
		$post = $this->input->post();

	
		  	$this->load->library('form_validation');
	  	    $this->form_validation->set_rules('email', 'Email', 'required');
	  	    $this->form_validation->set_rules('password', 'Password', 'required');

	  	   if($this->form_validation->run())
	     	 {
                 
                  $data['user_email'] = $post['email'];
                  $data['user_password'] = $post['password'];
                   
                   $this->load->model('Main_Model');
                   $this->Main_Model->insert_data($data);
                   redirect(base_url(). "welcome/inserted");
	     	 }

	      else
	     	 {
	     	 	$this->index();
	     	 }
		 
		
	}

	public function inserted()
	  {
	  	$this->index();
	  }

	public function login()
      {
        $this->load->view('login.php');
      }

    public function login_save()
      {
        

        $data = $this->input->post(); 
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
           {   
            die('here');
             $this->load->view('welome/login');
           }
       else
           {
           
             if(isset($_POST['email']))
              { 
                 $user_data = $this->Main_Model->check_login($_POST['email'],$_POST['password']);
                 //echo $this->db->last_query(); die();
                  if(!empty($user_data))
                     {
                        $session_data = array(
                                              'user_id' => $user_data['user_id'],
                                              'user_email' => $user_data['user_email']
                                              );

                        $this->session->set_userdata($session_data);
                        redirect('welcome/dashboard');
                      }
                  else
                      {
                        $this->session->set_flashdata('error', 'Invalid Username and Password');
                        redirect('welcome/login');
                      } 
               }
                die('yaha bhi aaya'); 
           }
      }

      public function dashboard()
      {
        $user = $_SESSION['user_id'];
        $data['users'] = $this->Main_Model->fetch_all($user);
        $this->load->view('dashboard.php', $data); 
      }

    public function blog()
      {
        $this->load->view('blog.php'); 
      }

    public function add_blog()
      {

          $post = $this->input->post();
          $file = $this->upload_file();
         
          $this->load->library('form_validation');
          $this->form_validation->set_rules('title', 'Title', 'required');
          $this->form_validation->set_rules('desc', 'Description', 'required');

         if($this->form_validation->run())
         {
                 
                   $data['title'] = $post['title'];
                   $data['desc'] = $post['desc'];
                   $data['image'] = $file['file_name'];
                   $data['user_id'] = $post['user_id'];

                   $this->load->model('Main_Model');
                   $this->Main_Model->insert_blog($data);
                   redirect(base_url(). "welcome/inserted_blog");
         }

        else
         {
          $this->blog();
         }
     
    
  }

  public function inserted_blog()
     {
       $this->blog();
     }
      
        public function logout()
          {
              $this->session->unset_userdata('uemail');
              redirect(base_url(). 'welcome/login');

          }

   public function upload_file()
        {

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $this->load->library('upload', $config);

              if ( ! $this->upload->do_upload('image'))
                  {
                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                    $error = array('error' => $this->upload->display_errors());
                  
                  }
              else
                  {
                     return $this->upload->data();
                  }
         }   


     public function delete_data()
      {
         $id = $this->uri->segment(3);
         $this->Main_Model->delete_data($id);
         redirect(base_url() . '/welcome/dashboard');
      }

         public function view_data($id)
     {

          $data['user_data'] = $this->Main_Model->fetch_data($id);
          $data['users'] = $this->Main_Model->fetch_all_1();
          $this->load->view('view', $data);

      }
      
        public function update_data($id)
     {

          $data['user_data'] = $this->Main_Model->fetch_data($id);
          $data['users'] = $this->Main_Model->fetch_all_1();
          $this->load->view('update_blog', $data);

      }

       public function update_blog()
    {
        $file = $this->upload_file();
        $data['image'] = $file['file_name'];
        $data['title'] = $this->input->post('title');
        $data['desc'] = $this->input->post('desc');
       
         $id = $this->input->post('user_id');
        

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');

        if ($this->form_validation->run() == TRUE)
                {
                   
                    $this->Main_Model->update($id, $data);
                    redirect(base_url() . '/welcome/dashboard');
                }
            else
                {
                    $data['user_data'] = $this->User_Model->fetch_data($id);
                    $this->load->view('form/update_form', $data);

                }

      }
}
