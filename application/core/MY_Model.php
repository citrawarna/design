<?php
Defined('BASEPATH') or exit();

class MY_Model extends CI_Model {
  protected $table = '';
  protected $perPage = 0;

  public function __construct() {
    parent::__construct();

    if(!$this->table) {
      $this->table = strtolower(str_replace('_model', '', get_class($this)));
    }
  }

  public function query($sql) {
    return $this->db->query($sql);
  }

  public function get(){
    return $this->db->get($this->table)->row();
  }

  public function getAll() {
    return $this->db->get($this->table)->result();
  }

  public function paginate($page){
    $this->db->limit($this->perPage, $this->calculateRealOffSet($page));
    return $this;
  }

  public function calculateRealOffSet($page) {
    if (is_null($page) || empty($page)) {
      $offset = 0;
    } else {
      $offset = ($page * $this->perPage) - $this->perPage;
    }
    return $offset;
  }

  public function select($columns) {
    $this->db->select($columns);
    return $this;
  }

  public function where($column, $condition) {
    $this->db->where($column, $condition);
    return $this;
  }

  public function orLike($column, $condition) {
    $this->db->or_like($column, $condition);
    return $this;
  }

  public function validate() {
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<p class="form-error">', '</p>');
    $validationRules = $this->getValidationRules();
    $this->form_validation->set_rules($validationRules);
    return $this->form_validation->run();
  }

  public function insert($data) {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

  public function update($data) {
    return $this->db->update($this->table, $data);
  }

  public function delete() {
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }

  public function join($table, $type = 'left') {
    $this->db->join($table, "$this->table.id_$table = $table.id_$table", $type);
    return $this;
  }

  public function orderBy($kolom, $order = 'asc') {
    $this->db->order_by($kolom, $order);
    return $this;
  }

  public function makePagination($baseURL, $uriSegment, $totalRows = null) {
    $args = func_get_args();

    $this->load->library('pagination');

    $config = [
      'base_url' => $baseURL,
      'uri_segment' => $uriSegment,
      'per_page' => $this->perPage,
      'total_rows' => $totalRows,
      'use_page_numbers' => true,
      'num_links' => 5,
      'first_link' => '< First',
      'last_link' => 'Last >',
      'next_link' => '>',
      'prev_link' => '<',
    ];

    if(count($_GET) > 0) {
      $config['suffix'] = '?' . http_build_query($_GET, '', "&");
      $config['fist_url'] = $config['base_url'] . '?' . http_build_query($_GET);
    } else {
      $config['suffix'] = http_build_query($_GET, '', "&");
      $config['first_url'] = $config['base_url'];
    }

    $this->pagination->initialize($config);
    return $this->pagination->create_links();
  }

}
 ?>
