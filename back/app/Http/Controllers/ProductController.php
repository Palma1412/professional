<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Requests\ProductRequest;

class ProductController extends Controller
{
    public function create(CreateProductRequest $request) 
    {
        $p = new Product();
        $p->name = $reaquest->name;
        $p->manufacturer = $reaquest->manufacturer;
        $p->price = $reaquest->price;
        $p->unit = $reaquest->unit;
        $p->short_description = $reaquest->short_description;
        $p->description = $reaquest->description;
        $p->image = $reaquest->image;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOrginalName();
            $imagePath = $image->storageAs('products', $imageName, 'public');
            $p->image = 'storage/' . $imagePath;
        }

        $p->save();
    }
}
