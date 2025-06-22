<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Stokbarang extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Stokbarang_model', 'stok');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $stok = $this->stok->getStok();
        } else {
            $stok = $this->stok->getStok($id);
        }
        if ($stok) {
            $this->response([
                'status' => true,
                'data' => $stok
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'data' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id_barang');
        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->stok->deleteStok($id) > 0) {
            //ok
            $this->response([
                'status' => true,
                'id' => $id,
                'message' => 'data stok has been deleted!'
            ], REST_Controller::HTTP_OK);
        } else {
        //id not found
            $this->response([
                'status' => false,
                'message' => 'id not found!'
            ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'id_barang' => $this->post('id_barang'),
            'nama_barang' => $this->post('nama_barang'),
            'jenis_barang' => $this->post('jenis_barang'),
            'harga_barang' => $this->post('harga_barang'),
            'stok_barang' => $this->post('stok_barang')
        ];
        if ($this->stok->createStok($data) > 0) {
            $this->response([
            'status' => true,
            'message' => 'new stok has been created.'
            ], REST_Controller::HTTP_CREATED);
        } else {
        //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        // kenapa dibedakan agar id masuk ke where
        $id = $this->put('id_barang');
        $data = [
            'id_barang' => $this->put('id_barang'),
            'nama_barang' => $this->put('nama_barang'),
            'jenis_barang' => $this->put('jenis_barang'),
            'harga_barang' => $this->put('harga_barang'),
            'stok_barang' => $this->put('stok_barang')
        ];
        if ($this->stok->updateStok($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'data stok has been updated.'
            ], REST_Controller::HTTP_OK);
        } else {
        //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to update new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

