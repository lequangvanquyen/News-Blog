@extends('client.layout.master_layout')

@section('news')
    <div class="fh5co-hero fh5co-hero-2">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
            style="background-image: url({{ asset('client') }}/images/bg2.jpg);">
            <div class="desc animate-box">
                <h2></h2>
                <span>Sự phát triển của chúng tôi dựa vào các bạn <a href="http://frehtml5.co/" target="_blank"
                        class="fh5co-site-name"></a></span>
            </div>
        </div>
    </div>
    <div id="fh5co-about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>{{ $ctt->tieuDe }}</h3>
                    <p>{!! $ctt->tomTat !!}</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-md-12 animate-box">
                    <!-- <figure>
                           <img src="{{ asset('user/' . $ctt->urlHinh) }}" alt="Free HTML5 Bootstrap Template by code-projects.org" class="img-responsive">
                          </figure> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    <h3>{{ $ctt->tieuDe }}</h3>
                    <p>{!! $ctt->noiDung !!}</p>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-contact" class="animate-box">
        <div class="container">
            <form action="{{ route('comments') }}" method="POST">
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
                @csrf
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <div class="form-group">
                                    <input type="text" name="name"
                                        class="form-control p-2 border border-gray-300 rounded-md" placeholder="Name"
                                        required>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <input type="email" name="email"
                                        class="form-control p-2 border border-gray-300 rounded-md" placeholder="Email"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-4 text-xl font-semibold">Để lại bình luận của bạn</h2>
                    <div class="w-full mt-4">
                        <div class="form-group">
                            <textarea name="message" class="form-control p-2 border border-gray-300 rounded-md w-full" cols="30" rows="7"
                                placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <div class="form-group">
                            <input type="submit" value="Gửi bình luận của bạn"
                                class="btn btn-primary px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        </div>
                    </div>
                </div>
            </form>

            <!-- Hiển thị bình luận -->
            {{-- <div class="mt-6">
                <h3 class="text-lg font-semibold">Bình luận:</h3>
                @if ($comments->isNotEmpty())
                    @foreach ($comments as $comment)
                        <div class="border border-gray-300 p-4 mb-4 rounded-md">
                            <p class="font-bold">{{ $comment->hoTen }}</p>
                            <p class="text-gray-600">{{ $comment->email }}</p>
                            <p class="mt-2">{{ $comment->noiDung }}</p>
                            <p class="text-gray-400 text-sm mt-2">{{ $comment->ngayDang->format('d-m-Y H:i') }}</p>
                        </div>
                    @endforeach
                @else
                    <p>Chưa có bình luận nào.</p>
                @endif
            </div> --}}
        </div>
    </div>
@endsection
