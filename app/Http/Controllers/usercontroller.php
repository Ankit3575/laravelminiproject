<?php

namespace App\Http\Controllers;

use App\Models\contacttbl;
use App\Models\producttbl;
use App\Models\signuptbl;
use App\Models\subcategory;
use App\Models\carttbl;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function signupcode(Request $result)
    {
        $data = new signuptbl();
        $date = date("d/m/y");
        date_default_timezone_set("asia/kolkata");
        $time = date("h:i:sa");
        $a = $result->file("files");
        $data->name = $result->name;
        $data->username = $result->uname;
        $data->email = $result->email;
        $data->mobile = $result->mob;
        $data->password = $result->pass;
        $data->date = $date;
        $data->time = $time;
        $data->picture = $a->getClientOriginalName();

        $check = signuptbl::where('username', $result->uname)
            ->orwhere('email', $result->email)
            ->orwhere('mobile', $result->mob)->first();

        if (!$check or $check->username != $result->uname) {
            if (!$check or $check->email != $result->email) {
                if (!$check or $check->mobile != $result->mob) {
                    if ($data->save()) {
                        $path = "picture/";
                        if ($a->move($path, $a->getClientOriginalName())) {
                            return redirect('login');
                        }
                    }
                } else {
                    echo "mobile already exist";
                }
            } else {
                echo "email already exist";
            }
        } else {
            echo "username already exist";
        }
    }

    public function logincode(Request $result)
    {
        $uem = $result->uem;
        $password = $result->pass;

        $data = signuptbl::where('username', $uem)
            ->orwhere('email', $uem)
            ->orwhere('mobile', $uem)
            ->orwhere('password', $password)->first();
        if ($data) {
            if ($data->username == $uem or $data->email == $uem or $data->mobile == $uem) {
                if ($data->password == $password) {
                    $result->session()->put('user', $uem);
                    return redirect('userdashboard');
                } else {
                    echo "password not match";
                }
            } else {
                echo "username, email and mobile not match";
            }
        } else {
            echo "both details are wrong";
        }
    }
    public function userprofile()
    {
        $sesid = session()->get('user');
        $data = signuptbl::where('username', $sesid)
            ->orwhere('email', $sesid)
            ->orwhere('mobile', $sesid)->first();
        return view('userprofile', compact('data'));
    }

    public function userprofilecode(Request $result)
    {
        $sesid = $result->session()->get('user');
        $data = signuptbl::where('username', $sesid)
            ->orwhere('email', $sesid)
            ->orwhere('mobile', $sesid)->first();

        $date = date("d/m/y");
        date_default_timezone_set("asia/kolkata");
        $time = date("h:i:sa");
        $a = $result->file("files");
        $data->name = $result->name;
        $data->username = $result->uname;
        $data->email = $result->email;
        $data->mobile = $result->mob;
        $data->password = $result->pass;
        $data->date = $date;
        $data->time = $time;
        $data->picture = $a->getClientOriginalName();
        if ($data->save()) {
            $path = "picture/";
            if ($a->move($path, $a->getClientOriginalName())) {
                return view('userprofile', compact('data'));
            }
        }
    }
    public function uchangepassword(Request $result)
    {
        $sesid = $result->session()->get('user');
        $data = signuptbl::where('username', $sesid)->orwhere('email', $sesid)->orwhere('mobile', $sesid)->first();
        $a = $result->opass;
        $b = $result->npass;
        $c = $result->cpass;
        if ($data) {
            if ($data->password == $a) {
                if ($b == $c) {
                    // $check = signuptbl::find($sesid);
                    $data->password = $b;
                    $data->save();
                    return redirect('login');
                } else {
                    echo "new and confirm password not match";
                }
            } else {
                echo "old password not match";
            }
        } else {
            echo "data not fetch";
        }
    }

    public function contactcode(Request $result){
        $data=new contacttbl();
        $date=date("d/m/y");
        date_default_timezone_set("asia/kolkata");
        $time=date("h:i:sa");
        $data->name=$result->name;
        $data->mobile=$result->num;
        $data->subject=$result->sub;
        $data->message=$result->msg;
        $data->date=$date;
        $data->time=$time;
        $data->save();
        return redirect("dashboard");
    }

public function logout(){
$sesid=session()->get('user');
if($sesid){
    session()->flush();
    return redirect('login');
}
else{
    echo 'logout failed';
}
}

public function userproduct(){
$data=producttbl::all();
return view('userproduct',compact('data'));
}

public function addtocart($id){
$pid=$id;
$sesid=session()->get('user');
$data=new carttbl();
$date=date("d/m/y");
$data->pid=$pid;
$data->userid=$sesid;
$data->date=$date;
$data->save();
return redirect('product');
}

public function cart(){
    $sesid=session()->get('user');
    $check=carttbl::where('userid',$sesid);
    $pid=$check->pid;
    $data=producttbl::where('id',$pid);
    return view('cart',compact('data'));

}

}
