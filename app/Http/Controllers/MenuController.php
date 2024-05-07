<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('menu.home');
    }

    public function index()
    {
        $menus = Menu::get();
        return view('menu.index', ['list' => $menus,
        'title' => 'Tambah', 
        'method' => 'POST', 
        'action' => 'menu'
        ]);
    }


    public function store(Request $request)
    {
        $user = Auth::user();
		$menu = new Menu();
        $menu->orderName = $user->name;
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->quantity = $request->quantity;
        $user->orders()->save($menu);
        return redirect('/menu')->with('msg', 'Tambah berhasil');
    }

    public function show($id)
    {
        return Menu::find($id);
    }

    public function edit($orderName, $id)
    {
        $menu = Menu::where('orderName', $orderName)->find($id);

        if (!$menu) {
            abort(404);
        }

        return view('menu.form', 
        [ 'title' => 'Edit',
        'method' => 'POST', 
        'action' => "menu/$id",
        'data' => Menu::find($id)],
        compact('menu'));
    }

    public function update(Request $request, $orderName, $id)
    {
        $menu = Menu::where('orderName', $orderName)->find($id);

        if (!$menu) {
            abort(404);
        }


        $menu->update(['quantity' => $request->input('quantity')]);
        return redirect('/menu')->with('msg', 'Edit berhasil');
    }

    public function destroy($id)
    {
        Menu::destroy($id);
        // atau
        /* $menu = Menu::find($id);
        $menu->delete(); */
        return redirect('/menu')->with('msg', 'Hapus berhasil');
    }
    
}
