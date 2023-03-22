<?php

namespace App\Http\Controllers;

use App\Models\Membermodel;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {

        $member = Membermodel::all();
        return view('member.index', [
            'member' => $member
        ]);
    }

    public function create()
    {
        return view('member.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_member' => 'required',
            'nama_lengkap' => 'required',
            'alamat' => 'required'
        ]);
        $array = $request->only([
            'kode_member',
            'nama_lengkap',
            'alamat'
        ]);
        $member = Membermodel::create($array);
        return redirect()->route('member.index')
            ->with('success_message', 'Berhasil menambah member baru');
    }

    public function edit($id)
    {
        $member = Membermodel::findOrFail($id);
        return view('member.edit', [
            'member' => $member
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_member' => 'required',
            'nama_lengkap' => 'required',
            'alamat' => 'required'
        ]);
        $array = $request->only([
            'kode_member',
            'nama_lengkap',
            'alamat'
        ]);
        $member = Membermodel::findOrFail($id);
        $member->update($array);
        return redirect()->route('member.index')
            ->with('success_message', 'Berhasil mengubah member');
    }
}
