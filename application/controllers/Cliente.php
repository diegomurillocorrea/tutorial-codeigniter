<?php

include(APPPATH . "controllers/Padre.php");

class Cliente extends Padre
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Cliente_m");
    }

    public function index()
    {
        $data["clientes"] = $this->Cliente_m->getAllClientes();
        $data["title"] = "Gestion de Clientes";
        $this->load->view("layout/head", $data);
        $this->load->view("layout/navbar");
        $this->load->view("layout/sidebar");
        $this->load->view("cliente/index_cliente", $data);
        $this->load->view("layout/footer");
        $this->load->view("cliente/end_cliente");
    }

    public function save_cliente()
    {
        $data = array(
            "id" => 0,
            "nombres" => $this->input->post("nombres"),
            "apellidos" => $this->input->post("apellidos"),
            "direccion" => $this->input->post("direccion"),
            "telefono" => $this->input->post("telefono"),
            "email" => $this->input->post("email"),
            "estado" => 1,
        );
        $res = $this->Cliente_m->save_cliente($data);
        if ($res > 0) {
            header("Location: " . site_url("cliente"));
        }
    }

    public function obtener_info()
    {
        $idCliente = $this->input->post("id");
        $cliente = $this->Cliente_m->getAllClientes($idCliente);
        echo json_encode($cliente);
    }

    public function update_cliente()
    {
        $data = array(
            "nombres" => $this->input->post("nombres"),
            "apellidos" => $this->input->post("apellidos"),
            "direccion" => $this->input->post("direccion"),
            "telefono" => $this->input->post("telefono"),
            "email" => $this->input->post("email"),
        );
        $res = $this->Cliente_m->update_cliente(array("id" => $this->input->post("idCliente")), $data);
        if ($res >= 0) {
            header("Location: ".site_url("cliente"));
        }
    }
}
