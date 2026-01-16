<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Models\Requests\OrderRequest;

class OrderController extends Controller
{
    public function create(createOrderRequest $request) 
    {
        $p = new Order();
        $p->user_id = $request->user_id;
        $p->product_id = $request->product_id;
        $p->discount = $request->discount;
        $p->quantity = $request->quantity;
        $p->amount = $request->amount;
        $p->status = $request->status;

        $p->save();
    }
}
