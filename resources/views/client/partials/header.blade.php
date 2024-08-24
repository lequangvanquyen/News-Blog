<?php

use Illuminate\Support\Facades\Auth;
?>
<div id="fh5co-wrapper">
<div id="fh5co-page">   
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="/" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="/">News<span>Hour</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								
								<li class="">
									<a href="/">Trang Chủ</a>
								</li>
								@foreach($data_cate as $loaitin)
								<li><a href="/dm-by-id/{{$loaitin->id}}">{{$loaitin->ten}}</a></li>
								@endforeach
								<!-- <li><a href="/dm">Bài Viết</a></li> -->
								<li><a href="/tt">Giới Thiệu</a></li>
								<li><a href="/lh">Liên hệ</a></li>
								@if (Auth::check())
								<li>
									<a href="">
									<?=Auth::user()->name?>
								</a></li>
								<li><a class="" href="<?=Auth::logout();?>">Đăng Xuất</a></li>
								@else
								<li class="">
									<a class="" href="/login"><i class="bi bi-person-circle"></i>Đăng nhập</a>
									</li>
                        		@endif
                    
							</ul>
							
						</nav>
					</div>
				</div>
			</header>
			
		</div>