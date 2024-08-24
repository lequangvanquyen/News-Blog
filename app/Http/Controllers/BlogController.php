<?php

namespace App\Http\Controllers;

use App\Models\loaitin;
use Illuminate\Http\Request;
use App\Models\tin;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function them_bv(Request $request)
    {
        $t = new tin;

        $t->tieuDe = $request->input('tieuDe');
        $t->tomTat = $request->input('tomTat');
        $t->noiDung = $request->input('noiDung');
        $t->idLT = $request->input('idLT');
        $t->tacGia = $request->input('tacGia');

        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();

            if (!in_array($duoi, ['jpg', 'png', 'jpeg'])) {
                return redirect()->route('list_blog')->with('error', 'Chỉ hỗ trợ các định dạng jpg, png, jpeg');
            }

            $name = Str::random(4) . "_" . $file->getClientOriginalName();
            $filePath = 'user/' . $name;

            $file->move(public_path('user'), $name);

            $t->urlHinh = $name;
        }

        $t->save();

        return redirect()->route('list_blog')->with('success', 'Bài viết đã được thêm thành công');
    }

    public function xoa_bv($id)
    {
        $t = tin::find($id);

        if ($t == null) {
            return redirect()->route('list_blog')->with('error', 'Bài viết không tồn tại.');
        }

        if ($t->urlHinh && file_exists(public_path('user/' . $t->urlHinh))) {
            unlink(public_path('user/' . $t->urlHinh));
        }

        $t->delete();

        return redirect()->route('list_blog')->with('success', 'Bài viết đã được xóa.');
    }

    public function capnhat_blog($id)
    {
        $t = tin::find($id);
        $show = loaitin::all();

        if ($t == null) {
            return redirect()->route('list_blog')->with('error', 'Bài viết không tồn tại.');
        }

        return view('admin.client.page.blog.update_blog', ['tin' => $t, 'show' => $show]);
    }



    public function capnhat_bv(Request $request, $id)
    {
        $t = tin::find($id);
        if ($t == null) return redirect()->route('list_blog')->with('error', 'Bài viết không tồn tại.');

        $t->tieuDe = $request->input('tieuDe');
        $t->tomTat = $request->input('tomTat');
        $t->noiDung = $request->input('noiDung');
        $t->idLT = $request->input('idLT');
        $t->tacGia = $request->input('tacGia');

        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if (!in_array($duoi, ['jpg', 'png', 'jpeg'])) {
                return redirect()->route('list_blog')->with('error', 'Chỉ hỗ trợ các định dạng jpg, png, jpeg');
            }
            $name = Str::random(4) . "_" . $file->getClientOriginalName();
            $file->move(public_path('user'), $name);
            $t->urlHinh = $name;
        }

        $t->save();
        return redirect()->route('list_blog')->with('success', 'Bài viết đã được cập nhật.');
    }
}
