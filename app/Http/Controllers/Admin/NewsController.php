<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function add() {
      //admin/newsディレクトリ配下のcreate.blade.html というファイルを呼び出す という意味
     return view('admin.news.create');
       
    }
}
