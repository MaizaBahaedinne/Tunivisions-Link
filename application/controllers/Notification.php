<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Notification extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('notification_model');
    }

    public function notifSeen($notifId)  {


        $notifInfo = array(
          'seen'=>'yes',
          'seenDate'=>date('Y-m-d H:i:s'),
        );


        $result = $this->notification_model->editNotif($notifInfo, $notifId); 

        $result2 = $this->notification_model->getNotifInfo($notifId) ;

  redirect ( $result2->url ) ;
    }

}

?>