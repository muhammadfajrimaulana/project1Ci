<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TaskModel;

class TaskController extends BaseController
{

    protected $taskModel;

    public function __construct()
    {
        $this->taskModel = New TaskModel();
    }

    public function index()
    {   
        $data_task = $this->taskModel->findAll();

        $data = [
            "title" => "Page Home Task",
            "data" => $data_task
        ];

        return view('main/task/page_task', $data);
        
    }
    
    public function layout()
    {
        return view('main/task/page_layout');
    }
    public function layout_kedua()
    {  

        return view('main/task/page_layout_kedua');
    }

}