<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index() {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('fuzzy/profile', compact('user'));
    }

    public function update(Request $request) {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->update($request->all());

        toast('Profil berhasil diperbarui','success');

        return redirect()->back();
    }

    public function updatePassword(Request $request) {
        $id = Auth::user()->id;
        $user = User::find($id);

        #validation
        $messagaes = [
            'pw_baru.required' => 'Masukkan password.',
            'pw_baru.confirmed' => 'Konfirmasi password tidak sama.'
        ];

        $validator = Validator::make($request->all(), [
            'pw_baru' => 'required|confirmed'
        ], $messagaes);

        if($validator->fails()) {
            toast(implode("\n", $validator->errors()->all()), 'error');

            return redirect()->back();
        }


        #cek password lama
        if(!Hash::check($request->input('pw'), $user->password)) {
            toast('Password salah','error');

            return redirect()->back();
        }

        $user->update(['password' => Hash::make($request->input('pw_baru'))]);

        toast('Password berhasil diganti','success');

        return redirect()->back();
    }
}
