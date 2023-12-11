<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admintbl;
use App\Models\categorytbl;
use App\Models\subcategory;

class admincontroller extends Controller
{
    public function admincode(Request $result)
    {
        $a = $result->email;
        $b = $result->pass;
        $data = admintbl::where("email", $a)->orwhere("password", $b)->first();
        if ($data) {
            if ($data->email == $a) {
                if ($data->password == $b) {
                    session()->put('admin', $a);
                    return redirect('admindashboard');
                } else {
                    echo "password wrong";
                }
            } else {
                echo "email wrong";
            }
        } else {
            echo "data not fetch";
        }
    }


    public function categorycode(Request $result)
    {
        $data = new categorytbl;
        $data->catname = $result->catname;
        $data->save();
        return redirect("addcategory");
    }
      

    public function subcategory(Request $result)
    {
        $data = categorytbl::all();
        return view('addsubcategory',compact('data'));

    }
    public function subcatcode(Request $result)
    {
        $data =new subcategory;
        $data->catid = $result->catid;
        $data->subcat = $result->subcat;
        $data->save();
        return redirect('addsubcategory');

    }
}
