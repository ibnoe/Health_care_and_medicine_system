<?php if (!defined('BASEPATH'))     exit('No direct script access allowed');

/* controller di setiap modul dapat extends pada controller admin. Berfungsi untuk membatasi hak akses*/
class ogfkController extends MY_Controller{
    function __construct() {
        
        parent::__construct();
		$this->script_header = 'lay-scripts/header_samples';
        $this->top_navbar = 'lay-top-navbar/navbar_ogfk';
        // $this->script_footer = 'lay-scripts/footer_agfk';
               
        if(!isset($this->session->userdata['telah_masuk'])&& !isset($this->session->userdata['telah_masuk']["idha"])){
            $this->session->set_userdata(array('last_url' => current_url()));
            redirect('index.php/login/notAuthorized');
        }
        if(18!=$this->session->userdata['telah_masuk']["idha"])
        {   
            $this->session->set_userdata(array('last_url' => current_url()));
            redirect('index.php/login/notAuthorized');
        }
    }

	// function _setFlashData ($status) {
    	// $key = 'error';
    	// if ($status == true)
    		// $message = 'success';
    	// else $message = 'failed';
    
    	// $this->session->set_flashdata ($key, $message);
    // }
	
	// function clean($string) {
        // //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        // //return str_replace(array('\'', '\\', '/', '*'), ' ', $string);
        // return preg_replace('/[^A-Za-z0-9\-@ .,]/', '-', $string); // Removes special chars.
    // }
    

}
?>
