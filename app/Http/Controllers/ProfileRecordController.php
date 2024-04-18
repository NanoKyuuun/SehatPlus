<?php

namespace App\Http\Controllers;

use App\Models\Profile_record;
use App\Http\Requests\StoreProfile_recordRequest;
use App\Http\Requests\UpdateProfile_recordRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class ProfileRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function edit(Request $request): View{
        $user = auth()->user();
        $profileRecord = auth()->user()->profile_record;
        return view('profile_record.edit', compact('profileRecord'));
    }
    public function update(Request $request){
        $user = auth()->user();
        $profileRecord = auth()->user()->profile_record;
    // dd($request);
        $request->validate([
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required',
        ]);
        // dd($requestData);
        if ($profileRecord) {
            $profileRecord->update($request->all());
        } else {
            $profileRecord->create($request->all());
        }
    
        return redirect('/dashboard/profile-record')->with('success', 'Post has been updated!');
    }
    
}
