<?php

namespace App\Http\Controllers;

use App\Models\loaitin;
use Illuminate\Http\Request;

class CateController extends Controller
{
    public function them_dm(Request $request)
    {
        // Validate input
        $request->validate([
            'ten' => 'required|string|max:255',
            'noidung' => 'required|string',
        ]);

        // Create new category
        $ct = new loaitin;
        $ct->ten = $request->input('ten');
        $ct->noidung = $request->input('noidung');
        $ct->save();

        return redirect()->route('list_cate');
    }

    public function xoa_dm($id)
    {
        $ct = loaitin::find($id);
        if ($ct === null) {
            return redirect()->route('list_cate')->with('error', 'Danh mục không tồn tại.');
        }

        $ct->delete();
        return redirect()->route('list_cate');
    }

    public function capnhat($id)
    {
        $ct = loaitin::find($id);
        if ($ct === null) {
            return redirect()->route('list_cate')->with('error', 'Danh mục không tồn tại.');
        }

        return view("admin.client.page.cate.update_cate", ['danhmuc' => $ct]);
    }

    public function capnhat_dm(Request $request, $id)
    {
        $ct = loaitin::find($id);
        if ($ct === null) {
            return redirect()->route('list_cate')->with('error', 'Danh mục không tồn tại.');
        }

        // Validate input
        $request->validate([
            'ten' => 'required|string|max:255',
            'noidung' => 'required|string',
        ]);

        // Update category
        $ct->ten = $request->input('ten');
        $ct->noidung = $request->input('noidung');
        $ct->save();

        return redirect()->route('list_cate');
    }
}
