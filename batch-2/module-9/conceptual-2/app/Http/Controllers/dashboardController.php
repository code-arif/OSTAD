<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){

        $tasks = [
            ['task-name' => 'Potential growth', 'total-sale' => '4512'],
            ['task-name' => 'Revenue current', 'total-sale' => '7541'],
            ['task-name' => 'Daily Income', 'total-sale' => '1523'],
            ['task-name' => 'Expense current', 'total-sale' => '5326'],
        ];

        return view('pages.home',['tasks' => $tasks]);
    }

    public function showsTask(){
        return view('pages.tasks');
    }
}
