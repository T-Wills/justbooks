<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Usersearch;

class UsersearchController extends Controller
{
    //
    /* public function fetch(Request $request){
        if($request->get("book_title")){
            $query= $request->get("book_title");
            $data = DB::table("usersearches")
                    ->where("book_title", "like", "%".$query."%")
                    ->get();

            $output = '<ul style="display:block !important;" class="dropdown-menu">';
             if($data->count()>0){
                 foreach($data as $row){
                     $output .= '<li>'.$row->book_title.'</li>';
                 }
            $output .= '</ul>';
            echo $output;
                 } else{
                 $output .= '<li>Book not found</li>';
                 echo $output;
             }
        }
    } */
}
