<?php

namespace App\Http\Controllers;

use App\Models\loaitin;
use App\Models\tin;
use App\Models\User;
use Illuminate\Http\Request;

class ASMController extends Controller
{
    public function index()
    {
        $data = tin::orderBy('created_at', 'desc')
            ->limit(3)
            ->get(['id', 'tieuDe', 'tomTat', 'tacGia', 'created_at', 'urlHinh', 'ngayDang']);
        $data_cate = loaitin::all();
        return view('client.page.home', compact('data', 'data_cate'));
    }

    public function about()
    {
        $data_cate = loaitin::all();
        return view('client.page.about', ['data_cate' => $data_cate]);
    }

    public function contact()
    {
        $data_cate = loaitin::all();
        return view('client.page.contact', ['data_cate' => $data_cate]);
    }

    public function blog()
    {
        $data = tin::all();
        $data_cate = loaitin::all();
        return view('client.page.blog', ['data_cate' => $data_cate, 'data' => $data]);
    }

    public function new_blog()
    {
        $data_cate = loaitin::all();

        $data = tin::select('id', 'tieuDe', 'tomTat', 'urlHinh', 'ngayDang')
            ->orderBy('ngayDang', 'desc')
            ->limit(10)
            ->get();
        return view('client.page.home', compact('data', 'data_cate'));
    }

    public function index_admin()
    {
        return view('admin.client.page.home');
    }

    public function list_blog()
    {
        $data = tin::with('loaiTin')
            ->select('tins.*', 'loaitins.ten as tendm')
            ->join('loaitins', 'tins.idLT', '=', 'loaitins.id')
            ->orderBy('tins.created_at', 'desc')
            ->get();

        return view('admin.client.page.blog.list_blog', ['data' => $data]);
    }

    public function add_blog()
    {
        $show = loaitin::all();
        return view('admin.client.page.blog.add_blog', ['show' => $show]);
    }

    //cateeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
    public function add_cate()
    {
        return view('admin.client.page.cate.add_cate');
    }

    public function list_cate()
    {
        $data = loaitin::all();
        return view('admin.client.page.cate.list_cate', ['data' => $data]);
    }

    public function update_cate()
    {
        return view('admin.client.page.cate.update_cate');
    }

    //acccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc
    public function list_acc()
    {
        $data = User::all();
        return view('admin.client.page.account.list_acc', ['data' => $data]);
    }
    public function edit_user($id)
    {
        $user = User::find($id);
        if ($user === null) {
            return redirect()->route('list_acc')->with('error', 'Người dùng không tồn tại.');
        }
        return view('admin.client.page.account.edit_user', ['user' => $user]);
    }

    public function update_user(Request $request, $id)
    {
        $user = User::find($id);
        if ($user === null) {
            return redirect()->route('list_acc')->with('error', 'Người dùng không tồn tại.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'idgroup' => 'required|integer|in:0,1',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->idgroup = $request->input('idgroup');
        $user->save();

        return redirect()->route('list_acc')->with('success', 'Cập nhật người dùng thành công.');
    }

    public function delete_user($id)
    {
        $user = User::find($id);
        if ($user === null) {
            return redirect()->route('list_acc')->with('error', 'Người dùng không tồn tại.');
        }

        $user->delete();
        return redirect()->route('list_acc')->with('success', 'Xóa người dùng thành công.');
    }


    //Giao diện
    //lấy tin tức theo danh mục
    public function get_tt_by_dm($id)
    {
        $data = tin::where('idLT', $id)->get();
        $show = loaitin::find($id);
        $data_cate = loaitin::all();
        return view('client.page.blog_by_dm', compact('data', 'data_cate', 'show'));
    }

    //lấy chi tiết tin tuc của danh mục
    public function ct_tt_by_dm($id)
    {
        $ctt = tin::find($id);
        $data_cate = loaitin::all();
        $show = loaitin::find($id);
        if ($ctt == null) return redirect('/');
        return view('client.page.chitiet', compact('ctt', 'data_cate', 'show'));
    }
}
