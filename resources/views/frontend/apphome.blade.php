
@extends('frontend.home')
<!--ini bisa di tambahkan pengumuman -->

@section('content')
@foreach($new as $item)
<div class="item">
                      <div class="testimonials-post">
                        <span class="fa fa-quote-left"></span>
                        
                        <h6>{{$item->title}}</h6>
                        <p> <?php
                          if(strlen($item->content)>=300){
              echo substr($item->content,0,299);
              }else{
              echo $item->content;
              }
            ?>
                  </p>
                 <!-- <div class="read-more">
                    <a href="{{url('single/'.$item->id)}}">Read more</a>
                  </div></p> -->
                      </div>
                    </div>

@endforeach
@endsection

<!-- ini untuk posting article terbaru di Home-->

@section('content1')
@foreach($article as $item)
 <div class="col-md-4">
                <div class="blog-item">
                  <a href="blog-single.html"><img src="{{asset('assets/download/'.$item->image)}}" alt=""></a>
                  <h3><center><a href="">{{$item->title}}</a></h3></center> 
                  <span><a href="">Diposting Admin</a> / <a href="">{{$item->created_at}}</a>
                  <p>
                    <?php
                          if(strlen($item->content)>=150){
              echo substr($item->content,0,149);
              }else{
              echo $item->content;
              }
            ?>
                  </p>
                  <div class="read-more">
                    <a href="{{url('single/'.$item->id)}}">Read more</a>
                  </div>
                </div>
              </div>
@endforeach
@endsection



