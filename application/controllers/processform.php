<?php
class ProcessForm extends CI_Controller
{
    // Assign $gold_count & $activity variables
    protected $gold_count = 0;
    protected $activity = array();

    public function __construct()
    {
        parent::__construct();
        // Everytime this function loads create session variables for
        // gold_count and activity
        $this->gold_count = $this->session->userdata('gold_count');
        $this->activity = $this->session->userdata('activity');

    }

    public function form()
    {
        $post_data = $this->input->post();

        if(isset($post_data['action']) && $post_data['action'] == 'restart_form')
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }

        if(!$this->gold_count)
        {
            $this->session->set_userdata('gold_count', 0);
        }

        if(isset($post_data['building']))
        {
            $building = $post_data['building'];
            $gold_count = 0;
            $class = 'success';

            if($building == 'farm')
                $gold_count = rand(10, 20);
            elseif($building == 'cave')
                $gold_count = rand(5, 10);
            elseif($building == 'house')
                $gold_count = rand(2, 5);
            else
            {
                $percent = rand(0, 100);

                if ($percent <= 70)
                {
                    $gold_count = rand(-50, -1);
                    $message = "Ouch";
                    $class = 'error';
                }
                else
                {
                    $gold_count = rand(1, 50);
                    $message = "Nice";
                }
            }

            if($this->activity != false)
            {
                $this->activity = $this->session->userdata('activity');
            }

            // Set default timezone as Los Angeles, CA, USA
            date_default_timezone_set('America/Los_Angeles');

            $this->activity[] = '<p class="' . $class . '">' . 'You entered a ' . $building . ' and earned ' . $gold_count .' golds.
								' . (($building == 'casino') ? '... '. $message .'.. ' : '') .
                '   (' . date('M d, Y g:ia') . ')' . '</p>';

            $gold_count += $this->session->userdata('gold_count');
            $this->session->set_userdata('gold_count', $gold_count);
            $this->session->set_userdata('activity', $this->activity);

            redirect("");
        }
    }

}
?>