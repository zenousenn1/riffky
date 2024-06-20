<?php
class Gudang_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function get_gudang() {
        return $this->db->get('gudang')->result_array();
    }
    public function tambah_gudang($data) {
        return $this->db->insert('gudang', $data);
    }
    public function get_gudang_by_id($id) {
        return $this->db->get_where('gudang', array('id' => $id))->row_array();
    }
    public function update_gudang($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('gudang', $data);
    }
    public function hapus_gudang($id) {
        $this->db->where('id', $id);
        return $this->db->delete('gudang');
    }
}
?>

