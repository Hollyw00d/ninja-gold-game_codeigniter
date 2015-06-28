<?php
class Reset extends CI_Controller
{

    public function index()
    {

        // Destroy all sessions
        $this->session->sess_destroy();

        // Go to the home page
        redirect('');
    }

}
?>