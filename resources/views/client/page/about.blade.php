@extends('client.layout.master_layout');
@section('news')
<div class="fh5co-hero fh5co-hero-2">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url({{asset('client')}}/images/bg2.jpg);">
				<div class="desc animate-box">
					<h2>GIỚI THIỆU VỀ CHÚNG TÔI </h2>
					<span>Sự phát triển của chúng tôi dựa vào các bạn <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">-newshoure.ogr</a></span>
				</div>
			</div>
		</div>
		<!-- end:header-top -->
		<div id="fh5co-about">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>About Us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-12 animate-box">
						<figure>
							<img src="{{ asset('client/images/about-image.jpg') }}" alt="Free HTML5 Bootstrap Template by code-projects.org" class="img-responsive">
						</figure>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box">
						<h3>Simple &amp; Humble Beginning</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut rerum perspiciatis, debitis pariatur atque vitae sed blanditiis nobis sint, reprehenderit quas, natus corrupti! Ipsum cum possimus corporis aut architecto! Delectus enim adipisci quidem possimus voluptates! Aut ut aliquid molestias laudantium.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- END fh5co-about -->
		<div id="fh5co-content-section" class="fh5co-section-gray">
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
								<img src="{{asset('client/images/user-1.jpg')}}" alt="user">
							</figure>
							<blockquote>
								<p>“Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.”</p>
							</blockquote>
							<span>Steve Jobs, Apple Inc.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fh5co-content-section -->
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>What We Do</h3>
						<p>Chúng tôi cập nhật tin tức nóng hổi, chính xác và kịp thời để độc giả luôn nắm bắt được những diễn biến mới nhất của thời sự, kinh tế, giải trí, thể thao...</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-browser"></i></span>
							<h3>Web Development</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-mobile"></i></span>
							<h3>Mobile Apps</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-tools"></i></span>
							<h3>UX Design</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-video"></i></span>
							<h3>Video Editing</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-search"></i></span>
							<h3>SEO Ranking</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-cloud"></i></span>
							<h3>Cloud Based Apps</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END fh5co-services-section -->

@endsection
