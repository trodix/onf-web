<?php

Class Layout{
    private $CI;
    private $output = '';
    private $theme = 'default';

    public function __construct(){
        $this->CI = get_instance();
    }

    public function view($name, $data = []){
        $this->output .= $this->CI->load->view($name, $data, true);
        $this->CI->load->view('../themes/' . $this->theme, array('output' => $this->output));
    }

    public function views($name, $data = []){
        $this->output .= $this->CI->load->view($name, $data, true);
        return $this;
    }

    public function getOutput(){
        return $this->output;
    }
}