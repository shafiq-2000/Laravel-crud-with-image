<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::all();
        return view('backend.category.index', compact('data')); //index file a foreach a $categories=$data hbe

        //     $data['categories']=Category::all();
        //    return view('backend.category.index',$data);  //index file a foreach a $data=$categories hbe


        // $data = Category::all();
        // return view('backend.category.index', ['categories' => $data]); //index file a foreach a $data=$categories hbe

    }

    //  ====================================Category create=======================================
    public function create()
    {
        return view('backend.category.create');
    }


    public function store(Request $request)
    {
        //validation
        $request->validate([
            'name1' => 'required|max:255',
            'email' => 'required|max:255',
            'description1' => 'required',
        ]);
        //option-1
        Category::create([
            'name' => $request->name1,
            'email' => $request->email,
            'description1' => $request->description1,

        ]);

        //option-1
        //return redirect()->route('categories.index')->with('show', 'category created successfully!');
        // toastr-2
        return redirect()->route('categories.index')->with('message', 'Data created successfully!');
    }



    //  ====================================Category show====================================

    public function show(Category $category)
    {
        //option-1
        return view('backend.category.show', compact('category'));

        //option-2
        // return view('backend.category.show',['category'=>$category]);

        //option-3
        //    $data['category']=$category;
        //    return view('backend.category.show',$data);
    }





    //  ====================================Category Update====================================

    public function edit(Category $category)
    {
        //option-1
        return view('backend.category.edit', compact('category'));

        //option-2
        // return view('backend.category.edit',['category'=>$category]);

        //option-3
        //    $data['category']=$category;
        //    return view('backend.category.edit',$data);
    }

    public function update(Request $request, Category $category)
    {
        // option-1

        Category::where('id', $category->id)->update([
            'name' => $request->name1,
            'email' => $request->email,
            'description1' => $request->description1,
        ]);
        return redirect()->route('categories.index');

        //option-2

        // $data['name'] = $request->name1;
        // $data['email'] = $request->email;
        // $data['description1'] = $request->description1;

        // $category->update($data);
        // return redirect()->route('categories.index');

    }




    //  ====================================Category delete====================================
    public function destroy(Category $category)
    {
        //session()->flash('success', 'User deleted successfully!');
        $category->delete();
        // toastr
        return redirect()->route('categories.index')->with('message', 'Data deleted successfully!');
    }
}
