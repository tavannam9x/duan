<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
class DangkiController extends Controller
{
    public function addNew(){
        $model = new User();
        $users = User::all();
        return view('dangki');
    }
    public function saveAddnew(Request $request){
        $model = new User();
        $model->fill($request->all());
        $model->save();
        return view('home');
    }
    public function Login(){
        return view('dangnhap');
    }
    public function postLogin(Request $request){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]) ){
            return view('home',compact('category_product','category_post'));
        }
        return view('dangnhap')->with('errmsg', 'Sai thông tin tài khoản/mật khẩu');
    }
}