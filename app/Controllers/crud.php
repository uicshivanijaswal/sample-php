<?php

namespace App\Controllers;
use App\Models\usermodel;
use CodeIgniter\Controller;


class crud extends Controller
{
    protected $db;
    public function create()
    {
        return view('add');
    }
    public function store()
    {
        $usermodel=new usermodel();
        $data=[
            'name'=>$this->request->getVar('n'),
            'age'=>$this->request->getVar('a'),
        ];
        $usermodel->insert($data);
        return $this->response->redirect(site_url('view'));
    }
    public function view(){
        
        $userModel = new usermodel();
        $data['u'] = $userModel->findAll();  
        return view('view',$data);
    }

    public function update ($id)
    {
        $userModel = new usermodel();
        $data['user_obj'] = $userModel->where('id', $id)->first();           
        return view('update',$data);
    }
public function update1()
    {
    $userModel = new Usermodel();
    $id = $this->request->getVar('id');
    $data = [
        'name' => $this->request->getVar('n'),
        'age'  => $this->request->getVar('a'),
    ];
    $userModel->update($id, $data);
    return $this->response->redirect(site_url('/view'));
}

public function delete($id = null)
{
    $userModel = new Usermodel();
    $data['user'] = $userModel->where('id', $id)->delete($id);
    return $this->response->redirect(site_url('/view'));
}    
}