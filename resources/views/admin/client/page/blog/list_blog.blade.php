@extends('admin.client.layout.master_layout')

@section('news_admin')
    <div id="page-content">
        <ul id="nav-info" class="clearfix">
            <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i></a></li>
            <li class="active"><a href="#">Danh Sách Bài Viết</a></li>
        </ul>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-condensed" id="danhsach">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Mã</th>
                    <th class="hidden-xs hidden-sm">Tiêu Đề</th>
                    <th class="hidden-xs hidden-sm">Loại Bài Viết</th>
                    <th class="hidden-xs hidden-sm">Người Viết</th>
                    <th class="hidden-xs hidden-sm">Ngày Đăng</th>
                    <th class="hidden-xs hidden-sm">Giới Thiệu Ngắn</th>
                    <th class="hidden-xs hidden-sm">Ảnh bài viết</th>
                    <th class="cell-small text-center"><i class="fa fa-bolt"></i> Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $i => $tin)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td>{{ $tin->id }}</td>
                        <td>{{ $tin->tieuDe }}</td>
                        <td>{{ $tin->tendm }}</td>
                        <td>{{ $tin->tacGia }}</td>
                        <td>{{ $tin->created_at->format('d/m/Y H:i') }}</td>
                        <td>{{ $tin->tomTat }}</td>
                        <td>
                            <img src="{{ asset('user/' . $tin->urlHinh) }}"
                                style="width:200px; height:auto; max-height:100px; object-fit:cover;">
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('capnhat_blog', ['id' => $tin->id]) }}" class="btn btn-xs btn-success"
                                    data-toggle="tooltip" title="Sửa">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('xoa_bv', ['id' => $tin->id]) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger" data-toggle="tooltip"
                                        title="Xóa"><i class="fa fa-times"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
