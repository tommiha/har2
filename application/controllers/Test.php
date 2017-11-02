<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
  public function index(){
    echo 'Tämä on Test Controllerin index metodi';
  }

  public function toinen(){
    echo 'Tämä on Test Controllerin toinen metodi';
  }
  public function kolmas(){
    $data['etunimi']='Ville';
    $data['sukunimi']='Virta';
    $this->load->view('test/kolmas',$data);
  }
  public function neljas(){
    $this->load->model('Test_model');
    $data['oppilaat']=$this->Test_model->hae_nimet();
    $this->load->view('test/neljas',$data);
  }
}
