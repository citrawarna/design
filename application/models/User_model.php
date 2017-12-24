<?php
defined('BASEPATH') or exit();

class User_model extends MY_Model
{
  public function __construct() {
    parent::__construct();
    $user = $this->db->get('tb_user');
  }
  public function getValidationRules() {
    $validationRules = [
      [
        'field' => 'nama_user',
        'label' => 'Nama User',
        'rules' => 'trim|required|min_length[1]|max_length[30]'
      ],
      [
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'trim|min_length[1]|max_length[30]|callback_alpha_numeric_coma_dash_dot_space'
      ],
      [
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'trim|required|min_length[6]|max_length[30]'
    ],
    [
      'field' => 'tempat_lahir',
      'label' => 'Tempat Lahir',
      'rules' => 'trim|required|min_length[1]|max_length[30]'
    ],
    [
      'field' => 'tanggal_lahir',
      'label' => 'Tanggal Lahir',
      'rules' => 'trim|required|callback_is_format_tanggal_valid'
    ],
    [
      'field' => 'tanggal_lahir',
      'label' => 'Tanggal Lahir',
      'rules' => 'trim|required'
    ],
    [
      'field' => 'jenis_kelamin',
      'label' => 'Jenis Kelamin',
      'rules' => 'trim|required'
    ],
    [
      'field' => 'no_telp',
      'label' => 'No. Telp',
      'rules' => 'trim|callback_numeric'
    ],
    [
      'field' => 'alamat',
      'label' => 'Alamat',
      'rules' => 'trim|required'
    ],
    [
      'field' => 'level',
      'label' => 'Level',
      'rules' => 'trim|required'
    ]
  ];
  return $validationRules;
  }

  public function getDefaultValues() {
    return [
      'nama_user' => '',
      'username' => '',
      'password' => '',
      'tempat_lahir' => '',
      'tanggal_lahir' => '',
      'jenis_kelamin' => '',
      'no_telp' => '',
      'alamat' => '',
      'level' => ''
    ];
  }
}

 ?>
