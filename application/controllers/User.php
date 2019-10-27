<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('evaluation_model');
        $this->load->model('user_model');
        $this->load->model('scores_model');  
        $this->load->model('club_model'); 
        $this->load->model('project_model');   
        $this->load->model('Image_upload_model');
        $this->load->model('actualite_model');
        $this->load->model('notification_model');
        
        $this->isLoggedIn();   
    }
    


    
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
              
        $data["tunimateurs"] = count($this->user_model->userListing($this->vendorId))  ; 
        $data["clubs"] = count($this->club_model->clubListing() ) ; 
        $data["clubscount"] = $this->club_model->clubListingCount() ;
        $data["projets"] = count($this->project_model->projectListing() ) ;
        $data["RateClub"] = $this->scores_model->RaitingClub()   ;
        $data["RateMember"] = $this->scores_model->RaitingUsers()   ;
        $data["countEval"] = count($this->evaluation_model->evaluation_A_ValidListing($this->clubID))   ;
        $data['ActuRecords'] = $this->actualite_model->actuListing();
        $data['MyclubID'] = $this->clubID;
        $data['MyuserId'] = $this->vendorId;
        $this->global['active'] = 'dash';
      
        $this->loadViews("dashboard", $this->global, $data , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function userListing()
    {
      
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
             $count = $this->user_model->userListing($this->vendorId);
             $data['count'] = count($count)  ; 
             $data['userRecords'] = $this->user_model->userListing($this->vendorId);
            
            $this->global['pageTitle'] = 'CodeInsect : User Listing';
            $this->global['active'] = 'users';

            $this->loadViews("users", $this->global, $data, NULL);
        
    }




    function userListing2()
    {

          
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListing2($searchText);
            $data['count'] = count($count)  ; 
            $data['userRecords'] = $this->user_model->userListing2($searchText);
            $this->global['active'] = 'members';
            $this->global['pageTitle'] = 'CodeInsect : User Listing';
            
            $this->loadViews("Tunimateurs/list", $this->global, $data, NULL);
        
    }

    function userByClubListing()
    {

          
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingByclub($this->vendorId,$this->clubID);
            $data['count'] = count($count)  ; 
            $data['userRecords'] = $this->user_model->userListingByclub($this->vendorId,$this->clubID);
            
            $this->global['pageTitle'] = 'CodeInsect : User Listing';
            $this->global['active'] = 'users';
            $this->loadViews("users", $this->global, $data, NULL);
        
    }
    

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {

            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();
            $data['clubs'] = $this->user_model->getClubs();
            $this->global['pageTitle'] = 'CodeInsect : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
       
    }

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    



    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            
            $this->load->library('form_validation');         
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('club','Club Tunivisions','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[8]');
            $this->form_validation->set_rules('cin','cin','required|min_length[8]');

            

            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
          
                $name = $this->input->post('fname');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $clubID = $this->input->post('club');
                $cellule = $this->input->post('cellule');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $mobile2 = $this->security->xss_clean($this->input->post('mobile2'));
                $birth = $this->security->xss_clean($this->input->post('birthday'));
                $affectedYear = $this->security->xss_clean($this->input->post('affectedYear'));
                $cin = $this->security->xss_clean($this->input->post('cin'));
                $sexe = $this->security->xss_clean($this->input->post('sexe'));
                $gouvernorat = $this->security->xss_clean($this->input->post('gouvernorat'));
                $delegation = $this->security->xss_clean($this->input->post('delegation'));
                $facebook = $this->security->xss_clean($this->input->post('facebook'));
                $instagram = $this->security->xss_clean($this->input->post('instagram'));
                $linkedin = $this->security->xss_clean($this->input->post('linkedin'));
               
                $file_name = 'Avatr_'.$name.'_'.$_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                
                $file_destination = 'uploads/avatar/' . $file_name;
                move_uploaded_file($file_tmp, $file_destination);


                $userInfo = array(
                 'avatar' => $file_name ,  
                 'email'=>$email,
                 'password'=>getHashedPassword($password),
                 'roleId'=>$roleId,
                 'cellule'=>$cellule,
                 'clubID'=>$clubID,
                 'name'=> $name,
                 'mobile'=>$mobile,
                 'mobile2'=>$mobile2,
                 'cin'=>$cin,
                 'birthday'=>$birth,
                 'affectedYear'=>$affectedYear,
                 'createdBy'=>$this->vendorId,
                 'createdDtm'=>date('Y-m-d H:i:s'),
                 'birthday'=>date($birth),
                 'sexe'=>$sexe,
                 'gouvernorat'=>$gouvernorat,
                 'delegation'=>$delegation,
                 'facebook'=>$facebook,
                 'instagram'=>$instagram,
                 'linkedin'=>$linkedin
                     );
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Formulaire validé');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                redirect('addNew');
            }
        }
    }

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {

            if($userId == null)
            {
                redirect('userListing');
            }
            
            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);
            
            $this->global['pageTitle'] = 'CodeInsect : Edit User';
            
            $this->loadViews("editOld", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $userId = $this->input->post('userId');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $email = strtolower($this->security->xss_clean($this->input->post('email')));
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('userListing');
            }
        }
    }




    /**
     * This function is used to edit the user information
     */
    function MAJUser()
    {

                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $email = strtolower($this->security->xss_clean($this->input->post('email')));           
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $facebook = $this->security->xss_clean($this->input->post('facebook'));
                $instagram = $this->security->xss_clean($this->input->post('instagram'));
                $linkedin = $this->security->xss_clean($this->input->post('linkedin'));
                $birthday = $this->security->xss_clean($this->input->post('birthday'));
 
                    $userInfo = array('email'=>$email,
                                      'name'=>$name,
                                      'email'=>$email,
                                      'birthday'=>$birthday,
                                      'mobile'=>$mobile,
                                      'facebook'=>$facebook,
                                      'instagram'=>$instagram,
                                      'linkedin'=>$linkedin,
                                      'updatedBy'=>$this->vendorId,
                                      'updatedDtm'=>date('Y-m-d H:i:s'));
        
                   
              
                
                $result = $this->user_model->editUser($userInfo, $this->vendorId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Votre profile a été mise à jour');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Erreur de mise à jour');
                }
                
                redirect('profile');
            
        
    }



    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser($userId)
    {
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            if( $this->user_model->deleteUser($userId, $userInfo) ) { $this->send_mail() ; }  
            
    }

    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function actifUser($userId)
    {
            $userInfo = array('isDeleted'=>0,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            if( $this->user_model->deleteUser($userId, $userInfo) ) { $this->send_mail() ; }  
            
    }



        public function send_mail()
            {



                $config = array(
                    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
                    'smtp_host' => 'tunivisions.link',
                    'smtp_port' => 465,
                    'smtp_user' => 'no-reply',
                    'smtp_pass' => 'Tunivisions-Link-2019',
                    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
                    'mailtype' => 'html', //plaintext 'text' mails or 'html'
                    'smtp_timeout' => '4', //in seconds
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE,
                    'newline' => '\r\n' ,
                    'crlf' => '\r\n'
                );
               

                $this->load->library('email');
                // Sender email address
                $this->email->initialize($config);
                $this->email->from('no-reply@tunivisions.link', 'T-Link');
                // Receiver email address.for single email
                $this->email->to('maizabahaedinne@gmail.com');                
                // Subject of email
                $this->email->subject('test mail');
                // Message in email
                $this->email->message('Welcome mail ');
                // It returns boolean TRUE or FALSE based on success or failure
        

                
                  if($this->email->send())
                 {
                  echo 'Email sent.';
                 }
                 else
                {
                 show_error($this->email->print_debugger());
                }


          
             
                
            }

            
    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    /**
     * This function used to show login history
     * @param number $userId : This is user id
     */
    function loginHistoy($userId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $userId = ($userId == NULL ? 0 : $userId);

            $searchText = $this->input->post('searchText');
            $fromDate = $this->input->post('fromDate');
            $toDate = $this->input->post('toDate');

            $data["userInfo"] = $this->user_model->getUserInfoById($userId);

            $data['searchText'] = $searchText;
            $data['fromDate'] = $fromDate;
            $data['toDate'] = $toDate;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);

            $returns = $this->paginationCompress ( "login-history/".$userId."/", $count, 10, 3);

            $data['userRecords'] = $this->user_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : User Login History';
            
            $this->loadViews("loginHistory", $this->global, $data, NULL);
        }        
    }

    /**
     * This function is used to show users profile
     */
    function profile($active = "details")
    {
        $data["userInfo"] = $this->user_model->getUserInfoWithRole($this->vendorId);
        $data["active"] = $active;
        
        $this->global['pageTitle'] = $active == "details" ? 'CodeInsect : My Profile' : 'CodeInsect : Change Password';
        $this->global['active'] = 'profile' ;
        $this->loadViews("profile", $this->global, $data, NULL);
    }

        /**
     * This function is used to show users profile
     */
    function PasswordMaj()
    {
        $data["userInfo"] = $this->user_model->getUserInfoWithRole($this->vendorId);
        
        
        $this->global['pageTitle'] = 'CodeInsect : Change Password';
         $this->global['active'] = 'profile' ;
        $this->loadViews("Upassword", $this->global, $data, NULL);
    }

    /**
     * This function is used to update the user details
     * @param text $active : This is flag to set the active tab
     */
    function profileUpdate($active = "details")
    {
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
        $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]|callback_emailExists');        
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
            $mobile = $this->security->xss_clean($this->input->post('mobile'));
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            
            $userInfo = array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->editUser($userInfo, $this->vendorId);
            
            if($result == true)
            {
                $this->session->set_userdata('name', $name);
                $this->session->set_flashdata('success', 'Profile updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Profile updation failed');
            }

            redirect('profile/'.$active);
        }
    }




    /**
     * This function is used to change the password of the user
     * @param text $active : This is flag to set the active tab
     */
    function changePassword($active = "changepass")
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password is not correct');
                redirect('profile/'.$active);
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                redirect('profile/');
            }
        }
    }

    /**
     * This function is used to check whether email already exist or not
     * @param {string} $email : This is users email
     */
    function emailExists($email)
    {
        $userId = $this->vendorId;
        $return = false;

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ $return = true; }
        else {
            $this->form_validation->set_message('emailExists', 'The {field} already taken');
            $return = false;
        }

        return $return;
    }
}

?>