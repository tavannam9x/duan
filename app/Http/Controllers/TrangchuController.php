<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Product;
use App\Models\Post;
use App\Models\Contact;
use App\Models\User;
class TrangchuController extends Controller
{
    public function index(Request $request){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();

        return view('home', compact('category_product','category_post'));
    }

    public function sanpham($id){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $cate=Category::find($id);
        $model = Product::all()->where('category_id','=',$id);
        return view('sanpham', compact('category_product','category_post','model','cate'));
    }

    public function lienhe(){
        $model = new Contact();
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();

        return view('lienhe', compact('category_product','category_post','model'));
    }
    public function saveAddnew(Request $request){
        $model = new Contact();
        $dt = Carbon::now();
        if($request->date == null){
            $model->date = $dt->toDateString();
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('lienhe'));
    }

    public function tintuc($id){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $cate=Category::find($id);
        $model = Post::all()->where('category_post_id','=',$id);
        return view('tintuc', compact('category_product','category_post','model','cate'));
    }

    public function chitiet($id){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $cate=Product::find($id);
        return view('chitietsanpham', compact('category_product','category_post','cate'));
    }

    public function chitietbv($id){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $cate=Post::find($id);
        return view('chitietbaiviet', compact('category_product','category_post','cate'));
    }

    public function gioithieu(Request $request){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();

        return view('gioithieu', compact('category_product','category_post'));
    }

    // Xóa
    // public function deletePost($id){
    //     $post= Category::find($id);
    //     $post->delete();
    //     return redirect(route('homehome'));
    // }
}