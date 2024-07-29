<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Bill;
use App\Models\Cart;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckoutForm()
    {
        if(!session()->get('user_id')) {
            return back()->with('error', 'Vui Lòng đăng nhập để thanh toán!');
        }
        return view('checkout');
    }

    public function store(Request $request)
    {
       
        if(!session()->get('user_id')){
            return back()->with('error', 'Vui Lòng đăng nhập để thanh toán!');
        }
      
        $total = $request->input('total');
       
        $billingName = $request->input('billing_name');
        $billingEmail = $request->input('billing_email');
        $billingPhone = $request->input('billing_phone');
        $billingAddress = $request->input('billing_address');

        // Kiểm tra xem có chọn gửi đến địa chỉ khác không
        $shipToDifferentAddress = $request->has('ship_to_different_address');

        // Nếu có chọn gửi đến địa chỉ khác
        if ($shipToDifferentAddress) {
            $shippingName = $request->input('shipping_name');
            $shippingEmail = $request->input('shipping_email');
            $shippingPhone = $request->input('shipping_phone');
            $shippingAddress = $request->input('shipping_address');
        } else {
            // Gán giá trị địa chỉ giao hàng bằng địa chỉ thanh toán
            $shippingName = $billingName;
            $shippingEmail = $billingEmail;
            $shippingPhone = $billingPhone;
            $shippingAddress = $billingAddress;
        }

        // Lưu thông tin khách hàng vào bảng 'bills'
       

        for($i = 0; $i < count(Session::get('cart')) ; $i++) {
            $bill = new Bill();
            $bill->user_id = session()->get('user_id');
            $bill->product_id = Session::get('cart')[$i]['product_id'];
            $bill->total = $total;
            $bill->billing_name = $billingName;
            $bill->billing_email = $billingEmail;
            $bill->billing_phone = $billingPhone;
            $bill->billing_address = $billingAddress;
            $bill->shipping_name = $shippingName;
            $bill->shipping_email = $shippingEmail;
            $bill->shipping_phone = $shippingPhone;
            $bill->shipping_address = $shippingAddress;
            $bill->save();
    }
        // Lưu thông tin sản phẩm vào bảng 'cart'
        $cart = session()->get('cart', []);
        foreach ($cart as $index => $item) {
            $cartItem = new Cart();
            $cartItem->product_id = $item['product_id'];;
            $cartItem->name = $item['name'];
            $cartItem->img = $item['img'];
            $cartItem->quantity = $item['quantity'];
            $cartItem->price = $item['price'];
            $cartItem->bill_id = $bill->id;
            $cartItem->save();
        }

        // Xóa giỏ hàng sau khi đã thanh toán thành công
        session()->forget('cart');

        // Redirect hoặc trả về thông báo thành công
        return redirect()->route('checkout.success')->with('success', 'Đặt hàng thành công!');
    }

    public function success()
    {
        // Sử dụng session flash để hiển thị thông báo
        session()->flash('success_message', 'Thanh toán thành công!');

        // Hoặc sử dụng redirect với thông báo
        return redirect()->back()->with('success_message', 'Thanh toán thành công!');
    }
}