@extends('front-end.layouts.master')
@section('title')
{{$blog_detail->title}} | Laptop Phong Linh
@endsection
@section('content')
<!-- breadcrumb -->
        <div class="breadcrumb clearfix">
              <a class="home" href="{{asset('/')}}" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a class="home" href="{{asset('/khuyen-mai')}}" title="Blog">Khuyến mại</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span> {{$blog_detail->title}}</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                
               <!-- Popular Posts -->
                <div class="block left-module">
                    <p class="title_block">Khuyến mại gần đây</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered">
                            <div class="layered-content">
                                <ul class="blog-list-sidebar clearfix">
                                 @foreach($recent_blogs as $key => $recent_blog)
                                    <li>
                                        <div class="post-thumb">
                                            <a href="{{asset('/bai-viet/'.$recent_blog->alias)}}"><img src="{{$recent_blog->image}}" alt="Blog"></a>
                                        </div>
                                        <div class="post-info">
                                            <h5 class="entry_title"><a href="{{asset('/bai-viet/'.$recent_blog->alias)}}">{{$recent_blog->title}}</a></h5>
                                            <div class="post-meta">
                                                <span class="date"><i class="fa fa-calendar"></i> {{$recent_blog->created_at}}</span>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./Popular Posts -->
               
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <h1 class="page-heading">
                    <span class="page-heading-title2">{{$blog_detail->title}}</span>
                </h1>
                <article class="entry-detail">
                    <div class="entry-meta-data">
                        <span class="date"><i class="fa fa-calendar"></i> {{$blog_detail->created_at}}</span> 
                    </div>
                    <div class="entry-photo">
                        <img src="{{$blog_detail->image}}" alt="Blog">
                    </div>
                    <div class="content-text clearfix">
                        <p><?php echo $blog_detail->content;?></p>
                    </div>
                   
                </article>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
        
@endsection
@section('script')
@endsection