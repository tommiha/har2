<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oppilas extends CI_Controller {
  public function nayta_oppilaat(){
    $this->load->model('Oppilas_model');
    $data['oppilaat']=$this->Oppilas_model->hae_oppilaat();
    $data['sivu']='oppilas/nayta_oppilaat';
    $this->load->view('menu/content',$data);
  }

  public function poista_oppilas($idPoista){
    $this->load->model('Oppilas_model');
    $this->Oppilas_model->poista_valittu($idPoista);
    redirect('oppilas/nayta_oppilaat');
  }
}
