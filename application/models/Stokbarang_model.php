<?php
class Stokbarang_model extends CI_Model
{
    public function getStok($id = null)
    {
        if ($id === null) {
            return $this->db->get('stock_barang')->result_array();
        } else {
            return $this->db->get_where('stock_barang', ['id_barang' => $id])->result_array();
        }
    }

    public function deleteStok($id)
    {
        $this->db->delete('stock_barang', ['id_barang' => $id]);
        return $this->db->affected_rows();
    }

    public function createStok($data)
    {
        $this->db->insert('stock_barang', $data);
        return $this->db->affected_rows();
    }
    
    public function updateStok($data, $id)
    {
        $this->db->update('stock_barang', $data, ['id_barang' => $id]);
        return $this->db->affected_rows();
    }
}
