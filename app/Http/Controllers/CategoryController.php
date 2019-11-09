<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Product;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $category = Category::paginate(5);
        }else{
            $kw = $request->keyword;
            $category = Category::where('title', 'like', "%$kw%")
                            ->paginate(5);
            $category->withPath("?keyword=$kw");
        }
        return view('list-category', [
                        'danhmuc' => $category
                    ]);
    }
    public function addNew(){
        $model = new Category();
        $product = Product::all();
        return view('category.add-form', compact('model', 'product'));
    }

    public function saveAddNew(Request $request){
        $model = new Category();
        if($request->hasFile('image')){
           
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('products', $filename);
            $model->image = '../images/'.$path;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('homehome'));
    }

    public function editForm($id){
        $model = Category::find($id);
        if(!$model){
            return redirect()->route('homehome');
        }
        $product = Product::all();
        return view('Category.edit-form', compact('model', 'product'));
    }
    public function saveEdit(Request $request){
        $model = Category::find($request->id);
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('products', 
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = '../images/'.$path;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('homehome'));
    }

    // Xóa
    // public function deletePost($id){
    //     $post= Category::find($id);
    //     $post->delete();
    //     return redirect(route('homehome'));
    // }
}