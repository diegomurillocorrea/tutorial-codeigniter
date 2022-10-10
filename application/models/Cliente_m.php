<?php

class Cliente_m extends CI_Model
{
    private $table = "cliente";

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllClientes($idCliente = null)
    {
        $this->db->select("*");
        $this->db->from($this->table);
        if ($idCliente != null) {
            $this->db->where("id", $idCliente);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function save_cliente($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update_cliente($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
}
