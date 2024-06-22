<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Material;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function products()
    {
        $dataPartner = Partner::all();
        $dataCategory = Category::all();
        $dataMaterial = Material::all();
        

        return view('admin.product', [
            'title' => 'Products',
            'dataPartner' => $dataPartner,
            'dataCategory' => $dataCategory,
            'dataMaterial' => $dataMaterial,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['id'] = Str::uuid();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        Material::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'ID_category' => $data['ID_category'],
            'ID_partner' => $data['ID_partner'],
            'image' => $data['image'],
            'description' => $data['description'],
            'price' => $data['price'],
            'stock' => $data['stock'],
            'unit' => $data['unit'],
        ]);

        return redirect()->route('admin.products')->with('success', 'Product has been added successfully!');

    }

    public function show($idProduct)
    {
        // show product
    }

    public function edit($idProduct)
    {
        $data = Material::find($idProduct);
        $dataPartner = Partner::all();
        $dataCategory = Category::all();

        return view('admin.edit', [
            'title' => 'Edit Product',
            'product' => $data,
            'dataPartner' => $dataPartner,
            'dataCategory' => $dataCategory,
        ]);
    }

    public function update(Request $request, $idProduct)
    {
        $dataUpdate = $request->all();
        $data = Material::find($idProduct);
        
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            if ($data->image) {
                $image_path = public_path('images') . '/' . $data->image;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
                $dataUpdate['image'] = $imageName;
            } 
        }else {
            $dataUpdate['image'] = $data->image;
        }

        $data->update([
            'name' => $dataUpdate['name'],
            'slug' => Str::slug($dataUpdate['name']),
            'ID_category' => $dataUpdate['ID_category'],
            'ID_partner' => $dataUpdate['ID_partner'],
            'description' => $dataUpdate['description'],
            'image' => $dataUpdate['image'],
            'price' => $dataUpdate['price'],
            'stock' => $dataUpdate['stock'],
            'unit' => $dataUpdate['unit'],
        ]);

        return redirect()->route('admin.products')->with('success', 'Product has been updated successfully!');
    }


    public function destroy($idProduct)
    {
        // remove product image
        $data = Material::find($idProduct);
        $image_path = public_path('images') . '/' . $data->image;
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        Material::destroy($idProduct);

        return redirect()->route('admin.products')->with('success', 'Product has been deleted successfully!');
    }
}
