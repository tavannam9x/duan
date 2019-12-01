<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class CouponController extends Controller
{
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        if (!$coupon)
        {
            return back()->with('errCoupon','Ma giam gia khong ton tai');
        }


        session()->put('coupon',[
            'name'=>$coupon->code,
            'discount'=>$coupon->percent_off,
        ]);

        return back()->with('successCoupon','Ap dung thanh cong ma giam gia');
    }

    public function destroy()
    {
        session()->forget('coupon');

        return back()->with('removeCoupon','Hủy mã giảm giá thành công');
    }
}
