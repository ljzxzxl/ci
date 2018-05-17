<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index()
    {
        $this->load->model('typecho_contents');
        $example = $this->typecho_contents->findOrFail(1);
        dd($example->toArray(), Typecho_contents::all());
    }
}