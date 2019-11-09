<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slideshow;
class SlideshowController extends Controller
{
    public function index(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $slideshows = Slideshow::paginate(5);
        }else{
            $kw = $request->keyword;
            $slideshows = Slideshow::where('name', 'like', "%$kw%")
                            ->paginate(5);
            $slideshows->withPath("?keyword=$kw");
        }
        return view('list-slideshow', [
                        'slide' => $slideshows
                    ]);
    }
    public function addNew(){
        $model = new Slideshow();
        $slideshows = Slideshow::all();
        return view('slideshow.add-form',compact('model', 'slideshows'));
    }

    public function saveAddNew(Request $request){
        $model = new Slideshow();
        if($request->hasFile('image')){
           
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('products', $filename);
            $model->image = '../images/'.$path;
        }
        $model->fill($request->all());
        //dd($model);
        $model->save();
        return redirect(route('homeslide'));
    }

    public function editForm($id){
        $model = Slideshow::find($id);
        if(!$model){
            return redirect()->route('homeslide');
        }
        $slideshows = Slideshow::all();
        return view('slideshow.edit-form',compact('model', 'slideshows'));
    }
    public function saveEdit(Request $request){
        $model = Slideshow::find($request->id);
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('products', 
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = '../images/'.$path;
        }
        if($request->status == null){
            $model->status = 0;
        }
        $model->fill($request->all());
        //dd($model);
        $model->save();
        return redirect(route('homeslide'));
    }

    // Xóa
    public function deletePost($id){
        $post= Slideshow::find($id);
        $post->delete();
        return redirect(route('homeslide'));
    }
}