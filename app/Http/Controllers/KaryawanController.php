<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Karyawan;

class KaryawanController extends Controller{
    

    public function add(Request $request)
    {
        $this->validate($request,[
            'nip'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'no_telp'=>'required',
        ]);

        $nip = $request->nip;
        $nama = $request->nama;
        $email = $request->email;
        $no_telp = $request->no_telp;


        $add = Karyawan::create([
            'nip'=> $nip,
            'nama' => $nama,
            'email'=> $email,
            'no_telp'=> $no_telp,
        ]);

        if($add)
        {
            return response()->json([
                'status' => "Berhasil menambahkan data karyawan",
                'data'=> $add
            ]);
        }else{
            return response()->json([
                'status' => "Gagal menambahkan data karaywan",
                'data' => null
            ]);
        }
    }


    public function update (Request $request, $id)
    {
        $this->validate($request,[
            'nip'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'no_telp'=>'required',
        ]);

        $nip = $request->nip;
        $nama = $request->nama;
        $email = $request->email;
        $no_telp = $request->no_telp;

        $karyawan = Karyawan::find($id);

        $update = $karyawan->update([
            'nip'=> $nip,
            'nama' => $nama,
            'email'=> $email,
            'no_telp'=> $no_telp,
        ]);

        if($update)
        {
            return response()->json([
                'status' => "Berhasil menambahkan data karyawan",
                'data'=> $karyawan
            ]);
        }else{
            return response()->json([
                'status' => "Gagal menambahkan data karaywan",
                'data' => null
            ]);
        }
    }

    public function delete($id)

    {
        $karyawan = Karyawan::find($id);
        $delete = $karyawan->delete();

        if($delete)
        {
            return response()->json([
                'status' => "Berhasil menambahkan data karyawan",
                'data'=> $karyawan
            ]);
        }else{
            return response()->json([
                'status' => "Gagal menambahkan data karaywan",
                'data' => null
            ]);
        }
    }
}


?>