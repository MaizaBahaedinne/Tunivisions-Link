<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Register extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('user_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
         $this->load->view('register/new');
    }
    
   
  function registerNewUser()
    {
                $birth = $this->input->post('birth');
                $name = $this->input->post('fname');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $cin = $this->security->xss_clean($this->input->post('cin'));
                $sexe = $this->security->xss_clean($this->input->post('sexe'));
                $gouvernorat = $this->security->xss_clean($this->input->post('gouvernorat'));
                $delegation = $this->security->xss_clean($this->input->post('delegation'));
                $facebook = $this->security->xss_clean($this->input->post('facebook'));
                $instagram = $this->security->xss_clean($this->input->post('instagram'));
                $linkedin = $this->security->xss_clean($this->input->post('linkedin'));
               
                    $target_dir = "uploads/avatar/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   

                $userInfo = array(
                 'avatar' => basename($_FILES["fileToUpload"]["name"]) ,  
                 'email'=>$email,
                 'password'=>getHashedPassword($password),
                 'roleId'=>'5',
                 'clubID'=>$this->input->get('var2') ,
                 'name'=> $name,
                 'mobile'=>$mobile,
                 'cin'=>$cin,
                 'createdBy'=> $this->input->get('var1'),
                 'createdDtm'=>date('Y-m-d H:i:s'),
                 'sexe'=>$sexe,
                 'gouvernorat'=>$gouvernorat,
                 'delegation'=>$delegation,
                 'facebook'=>$facebook, 
                 'birthdaty' => $birth ,
                 'isDeleted' => 1 
                     );

               
                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);
            
                
                
                if($result > 0 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) )
                {
                    $this->session->set_flashdata('success', 'nous activons votre compte aprés le paiement de votre cotisation annuel');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Problème veuillez contacter <a href="https://www.facebook.com/maiza.koussai">l\'administrateur</a> ');
                }
                
              
            redirect('/login') ;

    }
    
    

    
    





}

?>