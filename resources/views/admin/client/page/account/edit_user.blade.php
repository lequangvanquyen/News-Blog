@extends('admin.client.layout.master_layout')

@section('news_admin')
    <div id="page-content">
        <ul id="nav-info" class="clearfix">
            <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i></a></li>
            <li class="active"><a href="">Cập Nhật Người Dùng</a></li>
        </ul>


        <form action="{{ route('capnhat_user', ['id' => $user->id]) }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="name">Tên người dùng</label>
                <input id="name" class="form-control form-control-lg" type="text" name="name"
                    value="{{ old('name', $user->name) }}" placeholder="Tên người dùng">
                @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input id="email" class="form-control form-control-lg" type="email" name="email"
                    value="{{ old('email', $user->email) }}" placeholder="Email">
                @error('email')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="idgroup">Vai trò</label>
                <input id="idgroup" class="form-control form-control-lg" type="number" name="idgroup"
                    value="{{ old('idgroup', $user->idgroup) }}" placeholder="Vai Trò">
                @error('idgroup')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="list-btn mt-4">
                <button type="submit" class="btn btn-outline-primary">Cập Nhật</button>
            </div>
        </form>
    </div>
@endsection
