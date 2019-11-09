<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $validate = [
            'title' => [
                'required',
                Rule::unique('post')->ignore($this->id),
                'min:3',
                'max:100'
            ],
            'author' =>[
                'required',
                'min:3',
                'max:15'
            ],
            'short_desc' =>[
                'required',
                'min:20',
                'max:300'
            ],
            'description' =>[
                'required',
                'min:20',
                'max:2000'
            ]



        ];
        if(!$this->id){
            $validate['date'] = 'required|date|after:'.Carbon::now()->subDay()->format('Y-m-d');
            $validate['image'] = 'required|file|mimes:jpeg,png';
        }
        return $validate;
    }
    public function messages(){
        return [
            'title.required' => 'Bạn phải nhập tiêu đề bài viết',
            'title.min' => 'Tiêu đề bài viết phải lớn hơn 3 ký tự',
            'title.max' => 'Tiêu đề bài viết phải nhỏ hơn 100 ký tự',
            'title.unique' => 'Tiêu đề bài viết đã tồn tại, vui lòng chọn tên sản phẩm khác',
            'image.required' => 'Bạn không được để trống ảnh sản phẩm',
            'image.mimes' => 'Bạn chỉ có thể lựa chọn định dạng ảnh jpeg hoặc png',
            'author.required' => 'Bạn phải nhập giá sản phẩm',
            'author.numeric' => 'Giá sản phẩm phải là số',
            'author.between' => 'Giá sản phẩm phải nằm trong khoảng 1000 đến 999999 ',
            'short_desc.required' => 'Bạn phải nhập nội dung tóm tắt',
            'short_desc.min' => 'Nội dung tóm tắt phải lớn hơn 20 ký tự',
            'short_desc.max' => 'Nội dung tóm tắt phải nhỏ hơn 300 ký tự',
            'description.required' => 'Bạn phải nhập nội dung sản phẩm',
            'description.min' => 'Nội dung sản phẩm phải lớn hơn 20 ký tự',
            'description.max' => 'Nội dung sản phẩm phải nhỏ hơn 2000 ký tự',
            'date.required' => 'Bạn phải nhập ngày xuất bản',
        ];

    }
}