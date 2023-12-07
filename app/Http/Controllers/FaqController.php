<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Session;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $faqs = Faq::all();
        
        return view('faq', compact('faqs'));
    }
}
