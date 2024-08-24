@extends('admin.client.layout.master_layout')
@section('news_admin')
    <div id="page-content">
        <ul id="nav-info" class="clearfix">
            <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i></a></li>
            <li class="active"><a href="">Danh Sách Danh Mục</a></li>
        </ul>
        <table class="table table-condensed" id="danhsach">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Mã</th>
                    <th class="text-nowrap hidden-xs hidden-sm">Tên Danh Mục</th>
                    <th class="hidden-xs hidden-sm">Ghi Chú</th>
                    <th class="cell-small text-center"><i class="fa fa-bolt"></i> Chức Năng</th>
                </tr>
            </thead>

            <tbody>
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
                @foreach ($data as $i => $loaitin)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td>{{ $loaitin->id }}</td>
                        <td class="text-nowrap">{{ $loaitin->ten }}</td>
                        <td>{{ $loaitin->noidung }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('capnhat', ['id' => $loaitin->id]) }}" class="btn btn-xs btn-success"
                                    data-toggle="tooltip" title="Sửa"><i class="fa fa-pencil"></i></a>
                                <form action="{{ route('xoa_dm', ['id' => $loaitin->id]) }}" method="POST"
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
