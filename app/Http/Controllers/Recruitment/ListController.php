<?php

namespace App\Http\Controllers\Recruitment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $recruitments = \App\Models\Recruitment::latest()->get();
        return view('recruitment.list', [
            'recruitments' => $recruitments,
        ]);
    }
}
