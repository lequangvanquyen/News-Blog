@extends('admin.client.layout.master_layout')

@section('news_admin')
    <div id="page-content">
        <ul id="nav-info" class="clearfix">
            <li><a href="{{ url('admin/category/list') }}"><i class="fa fa-home"></i></a></li>
            <li class="active"><a href="#">Thêm Danh Mục</a></li>
        </ul>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('them_dm') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="ten">Tên danh mục:</label>
                <input id="ten" class="form-control form-control-lg" type="text" name="ten"
                    placeholder="Tên danh mục" aria-label=".form-control-lg example" value="{{ old('ten') }}">
            </div>
            <div class="form-group">
                <label for="noidung">Nội dung:</label>
                <input id="noidung" class="form-control form-control-lg" type="text" name="noidung"
                    placeholder="Nội dung" aria-label=".form-control-lg example" value="{{ old('noidung') }}">
            </div>
            <div class="list-btn">
                <button type="submit" class="btn btn-outline-primary">Thêm Mới</button>
            </div>
        </form>
    </div>
@endsection
