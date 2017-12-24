<?php
defined('BASEPATH') or exit();

class Login_model extends MY_Model
{
  public $table = 'tb_user';

  public function getValidationRules() {
    $validationRules = [
      [
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'trim|required'
      ],
      [
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'trim|required'
      ]
    ];
    return $validationRules;
  }

  public function getDefaultValues() {
    return [
      'username' => '',
      'password' => ''
    ];
  }

  public function login($input) {
    $input->password = ($input->password);

    $user = $this->db->where('username', $input->username)
                      ->where('password', $input->password)
                      ->get($this->table)
                      ->row();
    if(count($user)) {
      $data = [
        'id_user' => $user->id_user,
        'username'=> $user->username,
        'level' => $user->level,
        'is_login' => true
      ];
      $this->session->set_userdata($data);
      return true;
    }
    return false;
  }

  public function logout() {
    $data = [
      'username' => null,
      'password' => null,
      'is_login' => null
    ];
    $this->session->unset_userdata($data);
    $this->session->sess_destroy();
  }
}
 ?>
