<?php
defined('BASEPATH') or exit();

class Dvideo_model extends MY_Model
{
  public function getValidationRules() {
      $validationRules = [
        [
          'field' => 'id_user',
          'label' => 'ID User',
          'rules' => 'trim|required'
        ],
        [
          'field' => 'tanggal_upload',
          'label' => 'Tanggal Upload',
          'rules' => 'trim|required'
        ],
        [
          'field' => 'judul',
          'label' => 'Judul',
          'rules' => 'trim|required'
        ],
        [
          'field' => 'caption',
          'label' => 'Caption',
          'rules' => 'trim|required'
        ],
        [
          'field' => 'link_video',
          'label' => 'Link Video',
          'rules' => 'trim|required'
        ]
      ];
      return $validationRules;
  }

  public function getDefaultValues() {
    return [
      'id_user' => '',
      'tanggal_upload' => '',
      'judul' => '',
      'caption' => '',
      'link_video' => ''
    ];
  }
}
 ?>
