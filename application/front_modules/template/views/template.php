<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {


	public function one_col($data)
	{
            //echo 'fdasf';
            $this->load->view('one_col',$data);
	}
        public function two_col($data)
	{
            //echo 'fdasf';
            $this->load->view('two_col',$data);
	}
        public function three_col($data)
	{
            //echo 'fdasf';
            $this->load->view('three_col',$data);
	}
        public function four_col($data)
	{
            //echo 'fdasf';
            $this->load->view('four_col',$data);
	}
}
