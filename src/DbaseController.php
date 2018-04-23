<?php

namespace Mirko\Dbase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DbaseController extends Controller
{
    public function index() {
        return view('dbase::dbase', compact('posts'));
    }
}
