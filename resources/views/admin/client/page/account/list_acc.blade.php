@extends('admin.client.layout.master_layout')
@section('news_admin')
    <div id="page-content">
        <ul id="nav-info" class="clearfix">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li class="active"><a href="">Danh Sách Tài Khoản</a></li>
        </ul>
        <table class="table table-condensed" id="danhsach">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Mã</th>
                    <th class="hidden-xs hidden-sm">Họ và Tên</th>
                    <th class="hidden-xs hidden-sm">Email</th>
                    <th class="hidden-xs hidden-sm">Thời gian tạo</th>
                    <th class="hidden-xs hidden-sm">Vai trò</th>
                    <th class="cell-small text-center"><i class="fa fa-bolt"></i> Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $i => $user)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            @if ($user->idgroup == 1)
                                Quản trị
                            @else
                                Người dùng
                            @endif
                        </td>

                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('capnhat', ['id' => $user->id]) }}" data-toggle="tooltip" title=""
                                    class="btn btn-xs btn-success" data-original-title="Sửa"><i
                                        class="fa fa-pencil"></i></a>
                                <form action="{{ route('xoa', ['id' => $user->id]) }}" method="POST"
                                    style="display:inline;"
                                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa người dùng này?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger" data-toggle="tooltip"
                                        title="Xóa">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
