<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Post;

class CommentController extends Controller
{
    public function index(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $posts = Post::paginate(5);
        }else{
            $kw = $request->keyword;
            $posts = Post::where('title', 'like', "%$kw%")
                            ->paginate(5);
            $posts->withPath("?keyword=$kw");
        }
        return view('list-posts', [
                        'baiviet' => $posts
                    ]);
    }
    public function addNew(){
        $model = new Post();
        $posts = Post::all();
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        return view('post.add-form', compact('model', 'posts', 'category_post','category_product'));
    }
    public function saveAddNew(PostRequest $request){
        $model = new Post();
        $dt = Carbon::now();
        if($request->hasFile('image')){
           
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('products', $filename);
            $model->image = '../images/'.$path;
        }
        if($request->date == null){
            $model->date = $dt->toDateString();
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('homepost'));
    }
}