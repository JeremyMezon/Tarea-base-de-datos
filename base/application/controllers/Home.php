<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    
	public function index()
	{
		$this->load->view('inicio');
    }

    public function editar($id=0){

        $this->load->view('nuevo',['id'=>$id]);
    }

    public function borrar($id=0){
        contacto::borrar($id);
        redirect("Home/lista");
    }
    
    public function nuevo(){
        $this->load->view('nuevo');
    }

    public function lista(){
        $this->load->view('lista');
    }

    public function contactos(){
        $this->load->view('contactos');
    }

    
}