<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Product;

class MenuController extends Controller
{
    public function index()
    {
        $Products = Product::all();
        $data = [
            'Products' => $Products,
        ];
        return view('menu.index', $data);
    }

    public function menu_add(Request $request)
    {
        return view('menu.add');
    }

    public function menu_add_process(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'harga' => 'required',
                'gambar' => 'image',
            ],
        );

        if ($request->file('gambar')) {
            $image = $request->file('gambar');
            $nameImage = $image->getClientOriginalName(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/storage/', $nameImage);
            $validatedData['gambar'] = $nameImage;
        }
        Product::create($validatedData);
        session()->flash('msg', "<strong>Berhasil.</strong> <br> Menu berhasil ditambahkan");
        session()->flash('msg_status', 'success');
        return redirect("/menu");
    }

    public function menu_update(Product $Products)
    {
        $data = [
            'products' => $Products,
        ];
        // dd($data);
        return view('menu.update', $data);
    }

    public function menu_update_process(Request $request)
    {
        $id = $request->input('id');

        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'harga' => 'required',
                'gambar' => 'image',
            ],
        );

        if ($request->file('gambar')) {
            $Products = Product::where('id', $id)->first();
            
            $image = $request->file('gambar');
            $nameImage = $image->getClientOriginalName(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/storage/', $nameImage);
            $validatedData['gambar'] = $nameImage;
        }

        Product::where('id', $id)->update($validatedData);
        session()->flash('msg', "<strong>Berhasil.</strong> <br> Menu berhasil diubah");
        session()->flash('msg_status', 'success');
        return redirect("/menu");
    }
    public function menu_delete(Request $request, Product $Products)
    {
        Product::where('id', $Products->id)->delete();
        session()->flash('msg', "<strong>Berhasil.</strong> <br> Menu berhasil dihapus");
        session()->flash('msg_status', 'success');
        return redirect('/menu');
    }
}
