@extends('frontend.article')
@section('content')
@foreach($article as $item)

               <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date">{{$item->created_at}}</span>
                                    <span><i class="fa fa-user"></i> <a href="#">ADMIN</a></span>
                                    
                                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">Comments</a></span>   
                                </div>
                            </div>
 
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="{{asset('assets/download/'.$item->image)}}"  width="280px" alt="" /></a>
                                <h2><a href="blog-item.html">{{$item->title}}</a></h2>
                                <h3><?php
                               if(strlen($item->content)>=200){
                           echo substr($item->content,0,199);
                                       }else{
                                       echo $item->content;
                                       }
                                      ?></h3>
<a class="btn btn-primary readmore" href="{{url('single/'.$item->id)}}">Read More <i class="fa fa-angle-right"></i></a></div>
                        
                        
@endforeach

<center>{!! $article->render() !!}</center>

@endsection


