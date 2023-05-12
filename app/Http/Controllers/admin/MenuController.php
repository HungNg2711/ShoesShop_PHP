<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuServices;
class MenuController extends Controller
{
    public function create()
    {
        
        return view('admin.menu.add', [
            'title' => 'Thêm danh mục mới'
        ]);
    }
    public function detail()
    {
        
        return view('admin.menu.detail', [
            'title' => 'Thêm danh mục mới'
        ]);
    }
}
