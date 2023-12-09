<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admintbl;
use App\Models\categorytbl;

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


    public function admintbl(Request $result){
        $data=new admintbl;
        $data->catname= $result->catname;
        $data->save();
        return redirect("addcategory");
    }
}
