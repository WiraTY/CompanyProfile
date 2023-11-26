<?php

namespace App\Controllers\admin;

// use App\Models\ProfilModel;
use App\Controllers\admin\BaseController;
// use App\Models\ProdukModel;

class Dashboardctrl extends BaseController
{
    public function index()
    {
        // $produk_model = new ProdukModel();
        // $profil_model = new ProfilModel();
        // $all_data_produk = $produk_model->findAll();
        // $all_data_profil = $profil_model->findAll();
        // $validation = \Config\Services::validation();
        return view('admin/dashboard/index');
    }
}
