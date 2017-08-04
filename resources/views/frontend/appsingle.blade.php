@extends('frontend.singlearticle')

@section('content')

 					<img src="{{asset('assets/download/'.$article->image)}}" width="100%" alt="">
                    <div class="blog-single-content"> 
                    <h3><center><a href="">{{$article->title}}</a></center></h3>
                    <span><a href="#">Di posting Admin</a> / <a href="">{{{$article->created_at}}}</a>
                    <p>{!!$article->content!!}</p>
 		
@endsection

