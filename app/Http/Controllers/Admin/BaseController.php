<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BaseController extends Controller
{
    public function index(){

        $produk = Produk::count();
        $user = User::where('role', '2')->count();

        $user2 = User::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as count')
        )
        ->groupBy('date')
        ->get();
        return view('template.base',compact('produk', 'user', 'user2'));
    }


    public function dataUser(){
        $user = User::where('role', '2')->get();
        return view('Admin.DataUser.indexUser', compact('user'));
    }
    public function dataAdmin(){
        $user = User::where('role', '1')->get();
        return view('Admin.DataUser.indexAdmin', compact('user'));
    }
    public function deleteUser(Request $request){
        $user = User::findorFail($request->id);
        // Storage::delete('$user->image');
        $user->delete();

        return redirect()->route('data.user')->with('Delete', 'Berhasil Menghapus Data');
    }
}
