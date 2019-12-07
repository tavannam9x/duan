<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Http\Requests\CouponRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class CouponController extends Controller
{
    public function store(CouponRequest $request)
    {
        dd($request->all());
        $cart = Session()->get('cart');
        if (session('cart')) {
            $total = 0;
            foreach (session('cart') as $id => $c) {
                $total += $c['price'] * $c['quantity'];
            }
        }

        $coupon = Coupon::where('code', $request->coupon_code)->first();
//        if (!$coupon) {
//            return back()->with('errCoupon', 'Ma giam gia khong ton tai');
//        }
        if ($total < $coupon->minimum) {
            return back()->with('errPrice', "Đơn hàng phải trên $coupon->minimum VNĐ để được ưu đãi");
        } else {
            session()->put('coupon', [
                'id'=>$coupon->id,
                'name' => $coupon->code,
                'discount' => $coupon->percent_off,
                'minimun' => $coupon->minimum,
            ]);
            return back()->with('successCoupon', 'Ap dung thanh cong ma giam gia');
        }
    }

    public function destroy()
    {
        session()->forget('coupon');

        return back()->with('removeCoupon', 'Hủy mã giảm giá thành công');
    }
}
