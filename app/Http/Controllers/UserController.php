<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function Blogs()
    {
        $blogs = DB::table('blogs')->select('id','title','content')->get();
        return view('blogs', ['blogs' => $blogs]);
        
    }
}
