<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function images()
    {
        $images = Images::where('status_aktif', '=', 'aktif')->get();
        return view('admin/images/images', compact('images'));
    }
    public function create()
    {
        $images = images::where('status_aktif', '=', 'aktif')->get();
        return view('admin/images/crud/create', compact('images'));
    }
    public function store(Request $request)
    {
        $foto_personalname = 'foto_personal.jpg';
        $foto_grupname = 'foto_grup.jpg';
        $foto_maternityname = 'foto_maternity.jpg';
        $foto_photoshootname = 'foto_photoshoot.jpg';
        $foto_paket1wisudawanname = 'foto_paket1wisudawan.jpg';
        $foto_paketgrup23wisudawanname = 'foto_paket2-3wisudawan.jpg';
        $foto_paketgrup45wisudawanname = 'foto_paket4-5wisudawan.jpg';
        $foto_pasfotoname = 'foto_pasfoto.jpg';
        $foto_contoh1name = 'foto_contoh1.jpg';
        $foto_contoh2name = 'foto_contoh2.jpg';
        $foto_contoh3name = 'foto_contoh3.jpg';
        $foto_contoh4name = 'foto_contoh4.jpg';
        $foto_contoh5name = 'foto_contoh5.jpg';
        $foto_contoh6name = 'foto_contoh6.jpg';
        $foto_contoh7name = 'foto_contoh7.jpg';
        $foto_contoh8name = 'foto_contoh8.jpg';
        $foto_contoh9name = 'foto_contoh9.jpg';
        
        
        try{
        $foto_personal = $request->file('foto_personal')->storeAs('images/foto_personal', $foto_personalname ,'public');
        $foto_grup = $request->file('foto_grup')->storeAs('images/foto_grup', $foto_grupname ,'public');
        $foto_maternity = $request->file('foto_maternity')->storeAs('images/foto_maternity', $foto_maternityname ,'public');
        $foto_photoshoot = $request->file('foto_photoshoot')->storeAs('images/foto_photoshoot', $foto_photoshootname, 'public');
        $foto_paket1wisudawan = $request->file('foto_paket1wisudawan')->storeAs('images/foto_paket1wisudawan', $foto_paket1wisudawanname, 'public');
        $foto_paketgrup23wisudawan = $request->file('foto_paketgrup23wisudawan')->storeAs('images/foto_paketgrup23wisudawan', $foto_paketgrup23wisudawanname, 'public');
        $foto_paketgrup45wisudawan = $request->file('foto_paketgrup45wisudawan')->storeAs('images/foto_paketgrup45wisudawan', $foto_paketgrup45wisudawanname, 'public');
        $foto_pasfoto = $request->file('foto_pasfoto')->storeAs('images/foto_pasfoto', $foto_pasfotoname, 'public');
        $foto_contoh1 = $request->file('foto_contoh1')->storeAs('images/foto_contoh1', $foto_contoh1name, 'public');
        $foto_contoh2 = $request->file('foto_contoh2')->storeAs('images/foto_contoh2', $foto_contoh2name, 'public');
        $foto_contoh3 = $request->file('foto_contoh3')->storeAs('images/foto_contoh3', $foto_contoh3name, 'public');
        $foto_contoh4 = $request->file('foto_contoh4')->storeAs('images/foto_contoh4', $foto_contoh4name, 'public');
        $foto_contoh5 = $request->file('foto_contoh5')->storeAs('images/foto_contoh5', $foto_contoh5name, 'public');
        $foto_contoh6 = $request->file('foto_contoh6')->storeAs('images/foto_contoh6', $foto_contoh6name, 'public');
        $foto_contoh7 = $request->file('foto_contoh7')->storeAs('images/foto_contoh7', $foto_contoh7name, 'public');
        $foto_contoh8 = $request->file('foto_contoh8')->storeAs('images/foto_contoh8', $foto_contoh8name, 'public');
        $foto_contoh9 = $request->file('foto_contoh9')->storeAs('images/foto_contoh9', $foto_contoh9name, 'public');
        
            Images::create([
                'foto_personal' => $foto_personal,
                'foto_grup' => $foto_grup,
                'foto_maternity' => $foto_maternity,
                'foto_photoshoot' => $foto_photoshoot,
                'foto_paket1wisudawan' => $foto_paket1wisudawan,
                'foto_paketgrup23wisudawan' => $foto_paketgrup23wisudawan,
                'foto_paketgrup45wisudawan' => $foto_paketgrup45wisudawan,
                'foto_pasfoto' => $foto_pasfoto,
                'foto_contoh1' => $foto_contoh1,
                'foto_contoh2' => $foto_contoh2,
                'foto_contoh3' => $foto_contoh3,
                'foto_contoh4' => $foto_contoh4,
                'foto_contoh5' => $foto_contoh5,
                'foto_contoh6' =>  $foto_contoh6,
                'foto_contoh7' => $foto_contoh7,
                'foto_contoh8' => $foto_contoh8,
                'foto_contoh9' => $foto_contoh9,
                'updated_at' => now(),
                'status_aktif' => 'aktif',
            ]);

        return redirect()->route('images');
    } catch (\Exception $e) {
    // Log the error with full details
    Log::error('Error storing image: '.$e->getMessage(), ['exception' => $e]);

    // Optionally, you can return an error response
    return back()->withErrors(['message' => 'Error storing image']);
}
    }
    public function edit(int $id)
    {
        $images = images::where('id', $id)->first();
        return view('admin/images/crud/edit', compact('images'));
    }
    public function update(Request $request, int $id)
    {
        $foto_personalname = 'foto_personal.jpg';
        $foto_grupname = 'foto_grup.jpg';
        $foto_maternityname = 'foto_maternity.jpg';
        $foto_photoshootname = 'foto_photoshoot.jpg';
        $foto_paket1wisudawanname = 'foto_paket1wisudawan.jpg';
        $foto_paketgrup23wisudawanname = 'foto_paket2-3wisudawan.jpg';
        $foto_paketgrup45wisudawanname = 'foto_paket4-5wisudawan.jpg';
        $foto_pasfotoname = 'foto_pasfoto.jpg';
        $foto_contoh1name = 'foto_contoh1.jpg';
        $foto_contoh2name = 'foto_contoh2.jpg';
        $foto_contoh3name = 'foto_contoh3.jpg';
        $foto_contoh4name = 'foto_contoh4.jpg';
        $foto_contoh5name = 'foto_contoh5.jpg';
        $foto_contoh6name = 'foto_contoh6.jpg';
        $foto_contoh7name = 'foto_contoh7.jpg';
        $foto_contoh8name = 'foto_contoh8.jpg';
        $foto_contoh9name = 'foto_contoh9.jpg';
        

        $foto_personal = $request->file('foto_personal')->storeAs('images/foto_personal', $foto_personalname ,'public');
        $foto_grup = $request->file('foto_grup')->storeAs('images/foto_grup', $foto_grupname ,'public');
        $foto_maternity = $request->file('foto_maternity')->storeAs('images/foto_maternity', $foto_maternityname ,'public');
        $foto_photoshoot = $request->file('foto_photoshoot')->storeAs('images/foto_photoshoot', $foto_photoshootname, 'public');
        $foto_paket1wisudawan = $request->file('foto_paket1wisudawan')->storeAs('images/foto_paket1wisudawan', $foto_paket1wisudawanname, 'public');
        $foto_paketgrup23wisudawan = $request->file('foto_paketgrup23wisudawan')->storeAs('images/foto_paketgrup23wisudawan', $foto_paketgrup23wisudawanname, 'public');
        $foto_paketgrup45wisudawan = $request->file('foto_paketgrup45wisudawan')->storeAs('images/foto_paketgrup45wisudawan', $foto_paketgrup45wisudawanname, 'public');
        $foto_pasfoto = $request->file('foto_pasfoto')->storeAs('images/foto_pasfoto', $foto_pasfotoname, 'public');
        $foto_contoh1 = $request->file('foto_contoh1')->storeAs('images/foto_contoh1', $foto_contoh1name, 'public');
        $foto_contoh2 = $request->file('foto_contoh2')->storeAs('images/foto_contoh2', $foto_contoh2name, 'public');
        $foto_contoh3 = $request->file('foto_contoh3')->storeAs('images/foto_contoh3', $foto_contoh3name, 'public');
        $foto_contoh4 = $request->file('foto_contoh4')->storeAs('images/foto_contoh4', $foto_contoh4name, 'public');
        $foto_contoh5 = $request->file('foto_contoh5')->storeAs('images/foto_contoh5', $foto_contoh5name, 'public');
        $foto_contoh6 = $request->file('foto_contoh6')->storeAs('images/foto_contoh6', $foto_contoh6name, 'public');
        $foto_contoh7 = $request->file('foto_contoh7')->storeAs('images/foto_contoh7', $foto_contoh7name, 'public');
        $foto_contoh8 = $request->file('foto_contoh8')->storeAs('images/foto_contoh8', $foto_contoh8name, 'public');
        $foto_contoh9 = $request->file('foto_contoh9')->storeAs('images/foto_contoh9', $foto_contoh9name, 'public');
        

        $model = Images::where('id', $id)->first();
        $model->update([
            'foto_personal' => $foto_personal,
            'foto_grup' => $foto_grup,
            'foto_maternity' => $foto_maternity,
            'foto_photoshoot' => $foto_photoshoot,
            'foto_paket1wisudawan' => $foto_paket1wisudawan,
            'foto_paketgrup23wisudawan' => $foto_paketgrup23wisudawan,
            'foto_paketgrup45wisudawan' => $foto_paketgrup45wisudawan,
            'foto_pasfoto' => $foto_pasfoto,
            'foto_contoh1' => $foto_contoh1,
            'foto_contoh2' => $foto_contoh2,
            'foto_contoh3' => $foto_contoh3,
            'foto_contoh4' => $foto_contoh4,
            'foto_contoh5' => $foto_contoh5,
            'foto_contoh6' =>  $foto_contoh6,
            'foto_contoh7' => $foto_contoh7,
            'foto_contoh8' => $foto_contoh8,
            'foto_contoh9' => $foto_contoh9,
            'updated_at' => now(),
            'status_aktif' => 'aktif',
        ]);
        return redirect()->route('images', $model->id);
    }
    public function history(){
        $images = images::where('status_aktif', '=', 'Nonaktif')->get();
        return view('admin/images/historyimages', compact('images'));
    }
    public function softdelete(int $id)
    {
        $images = Images::where('id', '=', $id)->first();
        $images->status_aktif = 'Nonaktif';
        $images->save();

        return redirect()->route('images');
    }
    public function restore(int $id){
        $images = images::where('id', '=', $id)->first();
        $images->status_aktif = 'Aktif';
        $images->save();

        return redirect()->route('images.history');
    }
    public function delete(int $id)
    {
        $images = images::where('id', '=', $id)->first();
        $images->delete();
        $directories = [
            'images/foto_grup',
            'images/foto_maternity',
            'images/foto_paket1wisudawan',
            'images/foto_paketgrup23wisudawan',
            'images/foto_paketgrup45wisudawan',
            'images/foto_pasfoto',
            'images/foto_personal',
            'images/foto_photoshoot'
        ];
        foreach ($directories as $directory) {
            if (Storage::disk('public')->exists($directory)) {
                Log::info('Deleting directory: ' . $directory);
                Storage::disk('public')->deleteDirectory($directory);
            } else {
                Log::info('Directory does not exist: ' . $directory);
            }
        }

        return redirect()->route('images.history');
    }
}
