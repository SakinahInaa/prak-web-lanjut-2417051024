<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $dbUsers = [];
        try {
            $dbUsers = $this->userModel->getUser();
        } catch (\Exception $e) {
            $dbUsers = collect([]);
        }

        $dummyUsers = collect([
            (object)['id' => 1, 'nama' => 'Sakinah', 'npm' => '2417051024', 'nama_kelas' => 'A'],
            (object)['id' => 2, 'nama' => 'Jeon', 'npm' => '2417051001', 'nama_kelas' => 'B'],
            (object)['id' => 3, 'nama' => 'Rose', 'npm' => '2417051015', 'nama_kelas' => 'A'],
        ]);

        $users = (is_countable($dbUsers) && count($dbUsers) > 0) ? $dbUsers : $dummyUsers;

        return view('list_user', [
            'title' => 'List User',
            'users' => $users
        ]);
    }

    public function create()
    {
        $dbKelas = [];
        try {
            $dbKelas = $this->kelasModel->getKelas();
        } catch (\Exception $e) {
            $dbKelas = collect([]);
        }

        $dummyKelas = collect([
            (object)['id' => 1, 'nama_kelas' => 'Kelas A'],
            (object)['id' => 2, 'nama_kelas' => 'Kelas B'],
            (object)['id' => 3, 'nama_kelas' => 'Kelas C'],
            (object)['id' => 4, 'nama_kelas' => 'Kelas D'],
        ]);

        $kelas = (is_countable($dbKelas) && count($dbKelas) > 0) ? $dbKelas : $dummyKelas;

        return view('create_user', [
            'title' => 'Create User',
            'kelas' => $kelas
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required',
            'npm'      => 'required',
            'kelas_id' => 'required',
        ]);

        try {
            $this->userModel->create([
                'nama'     => $request->input('nama'),
                'npm'      => $request->input('npm'),
                'kelas_id' => $request->input('kelas_id'),
            ]);
        } catch (\Exception $e) {
        }

        return redirect()->to('/user');
    }
}