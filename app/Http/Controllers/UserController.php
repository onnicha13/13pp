<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use Illuminate\Support\Facades\log;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // ประกาศใช้ Auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    // หน้าแรก -----------------------------------------------------------------------------------
    public function home2()
    {
        return view('home2');
    }

    // จังหวัด (CRUD) -----------------------------------------------------------------------------------
    public function table()
    {
        $data = Province::orderBy('id', 'DESC')->limit(10)->get();
        return view('table', [
            'data' => $data
        ]);
    }
    public function table_insert(Request $request)
    {
        // dd($request);
        $insert = new Province;
        $insert->province = $request->province;
        $insert->amphoe = $request->amphoe;
        $insert->district = $request->district;
        $insert->zipcode = $request->zipcode;

        if ($insert->save()) {
            return back()->with('Success', 'เพิ่มข้อมูลสำเร็จ');
        } else {
            return back()->with('Error', 'เพิ่มข้อมูลไม่สำเร็จ');
        }
    }
    public function table_edit(Request $request)
    {
        $edit = Province::where('id', $request->id)->first();
        return view('table_edit', [
            'edit' => $edit
        ]);
    }
    public function table_update(Request $request)
    {
        // dd($request);
        $update = Province::find($request->id);
        $update->province = $request->province;
        $update->amphoe = $request->amphoe;
        $update->district = $request->district;
        $update->zipcode = $request->zipcode;

        if ($update->save()) {
            return redirect()->route('table')->with('Success', 'แก้ไขข้อมูลสำเร็จ');
        } else {
            return back()->with('Error', 'ไม่สามารถแก้ไขได้');
        }
    }
    public function table_delete(Request $request)
    {
        $delete = Province::where('id', $request->id)->delete();

        if ($delete) {
            return redirect()->route('table')->with('Success', 'ลบข้อมูลสำเร็จ');
        } else {
            return back()->with('Error', 'ไม่สามารถลบข้อมูลได้');
        }
    }


    // Dashboard -----------------------------------------------------------------------------------
    public function dashboard()
    {
        return view('dashboard');
    }


    // Upload File -----------------------------------------------------------------------------------
    public function form_upload()
    {

        return view('form_upload');
    }
    public function form_upload_insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'mimes:doc,docx,xls,xlsx,pdf|max:2048'
        ]);
        return back()->withInput()->with('Success', 'Upload Successfully');
    }


    // Upload Image -----------------------------------------------------------------------------------
    public function form_image()
    {
        return view('form_image');
    }
    public function form_image_insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        return back()->withInput()->with('Success', 'Upload Successfully');
    }

    // Relate Province -----------------------------------------------------S------------------------------
    public function form_relate()
    {
        return view('form_relate');
    }
    public function form_relate_insert(Request $request)
    {
        return back()->withInput()->with('Success', 'Insert Successfully');
    }
}
