@extends('admin.client.layout.master_layout')

@section('news_admin')
    <div id="page-content">
        <ul id="nav-info" class="clearfix">
            <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i></a></li>
            <li class="active"><a href="#">Cập Nhật Bài viết</a></li>
        </ul>

        <form action="{{ route('capnhat_bv', ['id' => $tin->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input class="form-control form-control-lg" type="text" value="{{ old('tieuDe', $tin->tieuDe) }}"
                name="tieuDe" placeholder="Tiêu đề" aria-label=".form-control-lg example">

            <br>
            <textarea id="example-textarea" name="tomTat" placeholder="Tóm tắt" class="form-control" rows="3">{{ old('tomTat', $tin->tomTat) }}</textarea>
            <br>

            <div class="form-group">
                <label class="control-label col-md-2" for="example-textarea-editor">Nội dung bài viết</label>
                <div class="col-md-10">
                    <textarea id="example-textarea-ckeditor" name="noiDung" class="ckeditor" rows="10">{{ old('noiDung', $tin->noiDung) }}</textarea>
                </div>
            </div>

            <label class="control-label col-md-12" for="example-select">Chọn Loại</label>
            <div class="col-md-2">
                <select id="example-select" name="idLT" class="form-control">
                    @foreach ($show as $show_data)
                        <option value="{{ $show_data->id }}" {{ $show_data->id == $tin->idLT ? 'selected' : '' }}>
                            {{ $show_data->ten }}</option>
                    @endforeach
                </select>
            </div>

            <br><br>

            <input class="form-control form-control-lg col-md-12" value="{{ old('tacGia', $tin->tacGia) }}" type="text"
                name="tacGia" placeholder="Tác giả" aria-label=".form-control-lg example">

            <div class="row">
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-file">Ảnh đại diện bài viết</label>
                    <div class="col-md-4">
                        <input type="file" id="example-file" name="Hinh" class="form-control">
                        <br>
                        @if ($tin->urlHinh)
                            <img src="{{ asset('user/' . $tin->urlHinh) }}"
                                style="width:200px; height:auto; max-height:100px; object-fit:cover;">
                        @endif
                    </div>
                </div>
            </div>

            <div class="list-btn">
                <button type="submit" class="btn btn-outline-primary">Cập Nhật</button>
            </div>
        </form>
    </div>
@endsection
