<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    //  =======================Product fetch==========================
    public function index()
    {
        $data = Product::all();
        return view('backend.product.index', compact('data'));
    }


    //  =======================Product create==========================
    function create()
    {
        return view('backend.product.create');
    }

    public function imageUpload(Request $request)
    {
        $request->validate([
            'pname' => 'required|string|max:255',
            'bname' => 'required|string|max:255',
            'pimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        $imageName = time() . '.' . $request->pimage->extension();
        $request->pimage->move(public_path('images'), $imageName);

        Product::create([
            'product_name' => $request->pname,
            'brand_name' => $request->bname,
            'image' => $imageName,
        ]);
        // toastr
        return redirect()->route('product_index')->with('message', 'Data created successfully!');
    }


    //  =======================Product show==========================
    function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.product.show', compact('product'));
    }


    //  =======================Product Update==========================

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'pname' => 'required|string|max:255',
            'bname' => 'required|string|max:255',

            //update khetre image validation deya jabe na karon tasara proty bari imgae update kortei hobe
            //'pimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        $imageName = '';
        $deleteOldImage = 'images/' . $product->image;

        if ($image = $request->file('pimage')) {
            if (file_exists($deleteOldImage)) {
                File::delete($deleteOldImage);
            }

            $imageName = time() . '.' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('images', $imageName);
        } else {
            $imageName = $product->image;
        }

        Product::where('id', $id)->update([
            'product_name' => $request->pname,
            'brand_name' => $request->bname,
            'image' => $imageName,
        ]);

        return redirect()->route('product_index')->with('message', 'Product updated successfully.');
    }



    //  =======================Product delete==========================

    public function destroy($id)
    {
        $product = Product::find($id);
        $imagePath = public_path('images/' . $product->image);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $product->delete();
        return redirect()->route('product_index')->with('message', 'Product deleted successfully.');
    }
}
