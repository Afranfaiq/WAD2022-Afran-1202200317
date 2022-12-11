<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{

    public function index()
    {
        $cars=Car::orderBy('id','desc')->get();
        return view('user.listcar', compact('cars'));
    }

    public function create()
    {
        return view('user.add');
    }

    public function store(Request $request)
    {   
        $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                    . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);
        $user = User::find(Auth::id());
        
        car::create([
            'name' => $request -> name,
            'user_id' => $request -> user_id,
            'owner' => $request -> owner,
            'brand' => $request -> merk,
            'purchase_date' => $request -> tanggal,
            'description' => $request -> deskripsi,
            'image' => $imgName,
            'status' => $request -> status,
        ]);

        return redirect('/car');
    }

    public function edit($id)
    {
        $car = car::find($id);
        
        return view('car.edit', compact('car')); 
    }

    public function update(Request $request, $id)
    {
        $car = car::find($id);

        $imgName = $car->img_path;
        if ($request->img_path) {
            $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                        . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'), $imgName);
        }

        car::find($id)->update([
            'nama' => $request -> name,
            'harga' => $request -> price,
            'gambar' => $imgName
        ]);

        return redirect('/car');
    }

    public function destroy($id)
    {   

        car::find($id)->delete();

        return redirect('/car');  
    }
}
