@extends('client.layout.master_layout')
@section('news')
<form action="" method="get">
	@csrf
<div class="fh5co-hero fh5co-hero-2">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url({{asset('client')}}/images/bg4.jpg);">
				<div class="desc animate-box">
					<h2>BÀI VIẾT CỦA CHÚNG TÔI</h2>
					<span>Đọc bài viết mới tại đây<a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">-newshour.org</a></span>
				</div>
			</div>

		</div>
		<!-- end:header-top -->
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>{{$show->ten}}</h3>
						<p >{{$show->noidung}}</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
                    @foreach($data as $inf_tin)
				<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="{{asset('user/'.$inf_tin->urlHinh)}}" alt=""></a>
							<div class="image-popup" href="#">
								<div class="prod-title">
									<h3><a href="{{route('ct_tt_by_dm',['id'=>$inf_tin->id])}}">{{$inf_tin->tieuDe}}</a></h3>
									<span class="posted_by">{{$inf_tin->tacGia}}</span>
									<span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
									<p>{{$inf_tin->tomTat}}</p>
									<a href="{{route('ct_tt_by_dm',['id'=>$inf_tin->id])}}" class="btn btn-primary">Xem Thêm</a>
								</div>
							</div> 
						</div>
					</div>
                    @endforeach
					
				</div>
			</div>
		</div>
		</form>
@endsection