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
    
 
     /**
     * Index Page for this controller.
     */
    public function reglement()
    {

         $this->load->view('reglement');
    }


  function registerNewUser()
    {
                $birth = $this->security->xss_clean($this->input->post('birth'));
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
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]).$mobile;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
                    $mobile2 = 0 ; 

                if($this->input->get('var3') == '1'  ){
                        $mobile2 = $this->security->xss_clean($this->input->post('mobile2'));
                 } ;

                $userInfo = array(
                 'avatar' => basename($_FILES["fileToUpload"]["name"]).$mobile ,  
                 'email'=>$email,
                 'password'=>getHashedPassword($password),
                 'roleId'=>'5',
                 'clubID'=>$this->input->get('var2') ,
                 'name'=> $name,
                 'mobile'=>$mobile,
                 'mobile2'=>$mobile2,
                 'cin'=>$cin,
                 'createdBy'=> $this->input->get('var1'),
                 'createdDtm'=>date('Y-m-d H:i:s'),
                 'sexe'=>$sexe,
                 'gouvernorat'=>$gouvernorat,
                 'delegation'=>$delegation,
                 'facebook'=>$facebook, 
                 'birthday' =>date($birth) ,
                 'isDeleted' => 1 
                     );
              
       



               
                $this->load->model('user_model');
                if($this->user_model->checkEmailExists($email) < 1 ) {
                $result = $this->user_model->addNewUser($userInfo);
                
                
                
                if($result > 0 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) )
                {
                    $this->session->set_flashdata('success', 'votre dossier est en cours de traitement');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Problème veuillez contacter <a href="https://www.facebook.com/maiza.koussai">l\'administrateur</a> ');
                }
            }else{
                $this->session->set_flashdata('error', 'utilisateur existe deja');
            }
                
              
            redirect('/login') ;

    }
    
    

     /**
     * Index Page for this controller.
     */
    public function MotDePasse()
    {

         $this->load->view('register/password');
    }
    

     function QuestionMotDePasse()
    {


                $email = $this->input->post('email');
                $mobile = $this->input->post('mobile');
                $cin = $this->input->post('cin');

                $q1 = $this->input->post('fon');
                $q2 = $this->input->post('clu');


               
                $this->load->model('user_model');
                $result = $this->user_model->checkPasswordExists($email,$cin,$mobile);
            
                
                
                if($result && $q1 == 'o' &&  $q2 == 'o' )
                {
                    redirect('Register/MotDePassechange?userId='.$result->userId) ;
                }
                else
                {
                    $this->session->set_flashdata('error', 'Problème veuillez contacter <a href="https://www.facebook.com/maiza.koussai">l\'administrateur</a> ');
                }
                
              
            redirect('/login') ;

    }

     /**
     * Index Page for this controller.
     */
    public function MotDePassechange()
    {

         $this->load->view('register/changePassword');
    }


    /**
     * Index Page for this controller.
     */
    public function MotDePassechangeF()
    {           

                $newPassword = $this->input->post('password');
                $updatedBy = $this->input->get('userId');


                print_r($newPassword ) ; 
                print_r($updatedBy ) ; 

                 $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$updatedBy,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                 print_r($usersData ) ; 
                $result = $this->user_model->changePassword($updatedBy, $usersData);

                if($result)
                {
                    redirect('/login') ; 
                }
                else
                {
                    $this->session->set_flashdata('error', 'Problème veuillez contacter l\'équipe  <a href="mailto:tunivisions.link@gmail.com"> tunivisions.link@gmail.com </a> ');
                }

                    
                
    }



}

?>