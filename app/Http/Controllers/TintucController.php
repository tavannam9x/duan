<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class TintucController extends Controller
{
    public function add(Request $request){
        return view('posttintuc.add');
    }

    // Xóa
    // public function deletePost($id){
    //     $post= Category::find($id);
    //     $post->delete();
    //     return redirect(route('homehome'));
    // }
}