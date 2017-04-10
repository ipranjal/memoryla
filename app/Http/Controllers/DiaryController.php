<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dairy;

class DiaryController extends Controller
{
   public function editor(){
       return view('components.wysiwyg');
   }
   
    public function post(Request $r){
       $dairy = new Dairy();
       $dairy->content = $r->content;
       $dairy->user_id = $r->user()->id;
       $dairy->save();
       return redirect('diary');
       }
   
   public function view(Request $r){
       $dairies = $r->user()->dairies;
       $dairies = $dairies->sortByDesc('id');
       return view('dairy',['dairies'=>$dairies]);
       
   }
}
