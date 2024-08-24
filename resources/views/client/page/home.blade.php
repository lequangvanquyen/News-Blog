@extends('client.layout.master_layout');
@section('news')
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
            style="background-image: url({{ asset('client') }}/images/bg.jpg);">
            <div class="desc animate-box">
                <h2>CẬP NHẬT BÀI VIẾT MỖI NGÀY</h2>
                <span>Theo dõi chúng tôi tại <a href="http://frehtml5.co/" target="_blank"
                        class="fh5co-site-name">Newshour.org</a></span>
                <span><a class="btn btn-primary" href="/blog">Xem tất cả bài viết</a></span>
            </div>
        </div>

    </div>
    <!-- end:header-top -->
    {{-- <div id="fh5co-work-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Chọn Loại Bài Viết</h3>
                    <p>Hãy chọn thể loại mà bạn yêu thích để xem các bài viết mới nhất.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="fh5co-grid animate-box img-box1"
                        style="background: url({{ asset('client/images/cate1.jpg') }});">
                        <a class="image-popup text-center" href="#">
                            <div class="prod-title">
                                <h3>THỂ THAO</h3>
                                <span>Tổng hợp bài viết mới về thể thao trong nước và ngoài nước</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="fh5co-grid animate-box"
                        style="background-image: url({{ asset('client') }}/images/cate2.jpg);">
                        <a class="image-popup text-center" href="#">
                            <div class="prod-title">
                                <h3>SỨC KHỎE</h3>
                                <span>Cung cấp Những kiến thức về sức khỏe</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="fh5co-grid animate-box"
                        style="background-image: url({{ asset('client') }}/images/cate3.jpg);">
                        <a class="image-popup text-center" href="#">
                            <div class="prod-title">
                                <h3>ĐỜI SỐNG </h3>
                                <span>Sống một cuộc đời lạc quan, tích cực...</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="fh5co-grid animate-box"
                        style="background-image: url({{ asset('client') }}/images/cate4.jpg);">
                        <a class="image-popup text-center" href="#">
                            <div class="prod-title">
                                <h3>DU LỊCH</h3>
                                <span>Khám phá thế giới</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>BÀI VIẾT MỚI NHẤT</h3>
                    <p>Hiển thị bài viết mới nhất.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                @foreach($data as $tin)
					<div class="col-lg-4 col-md-4" >
						<div class="fh5co-blog animate-box">
							<a href="{{ route('ct_tt_by_dm', ['id' => $tin->id]) }}"><img class="img-responsive" src="{{asset('user/'.$tin->urlHinh)}}" alt=""></a>
							<div class="image-popup" href="#">
								<div class="prod-title">
									<h3><a href="{{route('ct_tt_by_dm',['id'=>$tin->id])}}">{{$tin->tieuDe}}</a></h3>
									<span class="posted_by">Tác giả: {{$tin->tacGia}}</span>
									<span class="comment">Ngày đăng: {{$tin->created_at}}</span>
									<p>{{$tin->tomTat}}</p>
									<a href="{{ route('ct_tt_by_dm', ['id' => $tin->id]) }}" class="btn btn-primary">Xem Thêm</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach


            </div>
        </div>
    </div>
    <!-- fh5co-work-section -->
    <div id="fh5co-services-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>What We Do</h3>
                    <p>Chúng tôi cập nhật tin tức nóng hổi, chính xác và kịp thời để độc giả luôn nắm bắt được những diễn
                        biến mới nhất của thời sự, kinh tế, giải trí, thể thao...</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-browser"></i></span>
                        <h3>Đời sống</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-mobile"></i></span>
                        <h3>Điện thoại</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-tools"></i></span>
                        <h3>Mỹ thuật</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-video"></i></span>
                        <h3>Nghệ thuật</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-search"></i></span>
                        <h3>Công nghệ</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-cloud"></i></span>
                        <h3>Thể thao</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fh5co-services-section -->
    <div id="fh5co-content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>What Others Say</h3>
                    <p>Tin tức cập nhật chính xác, khách quan và kịp thời</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="fh5co-testimonial text-center animate-box">
                        <figure>
                            <img src="{{ asset('client/images/1.jpg') }}" alt="user">
                        </figure>
                        <blockquote>
                            <p>“Sáng tạo chỉ là kết nối mọi thứ. Khi bạn hỏi những người sáng tạo rằng họ đã làm điều gì đó
                                như thế nào, họ sẽ cảm thấy hơi tội lỗi vì họ không thực sự làm điều đó, họ chỉ nhìn thấy
                                điều gì đó. Nó dường như rõ ràng với họ sau một thời gian.”</p>
                        </blockquote>
                        <span>Steve Jobs, Apple Inc.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fh5co-content-section -->
@endsection
