<?php

namespace App\Http\Controllers\Shop;

use App\Models\Address;
use App\Models\Commodity;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{


    /**
     * OrderController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth.wechat');
        $this->middleware('auth.access');
    }

    public function index() {
        return 'order.index';
    }


    /**
     * 依据前台post消息创建订单
     *
     * @param Request $request
     * @return \Response
     */
    public function generateConfig(Request $request)
    {
        dd($request->all());
        $customer = \Helper::getCustomer();

        $items = $request->input('cart');

        $order = new Order();

        foreach ($items as $item) {
            $commodity = Commodity::find($item['id']);
            $order->addCommodity($commodity);
        }

        $address = Address::find($request->input('address_id'));
        $customer->orders()->save($order);

        return response()->json([
            'success' => true
        ]);
    }

    public function pay(Request $request)
    {
        //todo pay
    }
}
