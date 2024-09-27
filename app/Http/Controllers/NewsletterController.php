<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\Trheader;
use Carbon\Carbon;
class NewsletterController extends Controller
{
    public function showList(){
    //1. mengambil data dari DB
        //eloquent
        //select * from books setiap 2 data
        $newsletters = Newsletter::paginate(4);


        //2. passing ke view
        return view('newsletter', ['newsletters'=>$newsletters]);
    }

}
