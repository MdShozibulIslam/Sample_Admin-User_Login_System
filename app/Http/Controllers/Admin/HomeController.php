<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $data= User::all();
        return view('admin.dashboard',['users'=>$data]);
    }

    /*public function deleteData($id = null){
        $delete_data = User::find($id);

        $delete_data->delete();
        Session::flash('deleteMessage','Employee has Successfully Deleted');
       
    }*/


}
