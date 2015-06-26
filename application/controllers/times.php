<?php
class Times extends CI_Controller
{
    public function main()
    {
        $date_time['date_time'] = array(
            'month_day_year' => date('M j Y'),
            'time_up_to_12' => date('g:i a')
        );

        $this->load->view('time.php', $date_time);
    }

}
?>