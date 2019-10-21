<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Image_upload_model extends CI_Model {

    var $image_path;



    //uploading the file
    function do_upload() {
        $this->image_path = realpath(APPPATH.'../uploads/avatar');
        $config = array(
            'allowed_types' => 'jpg|jpeg|gif|png',
            'upload_path' => $this->image_path
        );
        $this->load->library('upload',$config);
        $this->upload->do_upload();
    }
}
?>