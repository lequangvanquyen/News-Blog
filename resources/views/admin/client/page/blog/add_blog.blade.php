@extends('admin.client.layout.master_layout')

@section('news_admin')
    <div id="page-content">
        <ul id="nav-info" class="clearfix">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li class="active"><a href="">Thêm Bài viết</a></li>
        </ul>

        <form action="{{ route('them_bv') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input class="form-control form-control-lg" type="text" name="tieuDe" placeholder="Tiêu đề"
                    aria-label=".form-control-lg example" required>
            </div>

            <div class="form-group">
                <textarea id="example-textarea" name="tomTat" placeholder="Tóm tắt" class="form-control" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label class="control-label" for="example-textarea-ckeditor">Nội dung bài viết</label>
                <textarea id="example-textarea-ckeditor" name="noiDung" class="ckeditor" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <label class="control-label" for="example-select">Chọn Loại</label>
                <select id="example-select" name="idLT" class="form-control" required>
                    @foreach ($show as $show_data)
                        <option value="{{ $show_data->id }}">{{ $show_data->ten }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input class="form-control form-control-lg" type="text" name="tacGia" placeholder="Tác giả"
                    aria-label=".form-control-lg example" required>
            </div>

            <div class="form-group">
                <label class="control-label" for="example-file">Ảnh đại diện bài viết</label>
                <input type="file" id="example-file" name="Hinh" class="form-control" required>
            </div>

            <div class="list-btn">
                <button type="submit" class="btn btn-outline-primary">Thêm Mới</button>
            </div>
        </form>
    </div>
@endsection
