@extends('front-end.layouts.master')
@section('title')
Khuyến mại | Laptop Phong Linh
@endsection
@section('content')
 <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="{{asset('/')}}" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Khuyến mại</span>
        </div>
        <!-- ./breadcrumb -->
        <div class="row">
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
         <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <h2 class="page-heading">
                    <span class="page-heading-title2">Tin khuyến mại</span>
                </h2>
                
                <ul class="blog-posts">
                @foreach($allBlogs as $key => $val)
                    <li class="post-item">
                        <article class="entry">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="entry-thumb image-hover2">
                                        <a href="{{asset('/bai-viet/'.$val->alias)}}">
                                            <img src="{{$val->image}}" alt="Blog">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="{{asset('/bai-viet/'.$val->alias)}}">{{$val->title}}</a></h3>
                                        <div class="entry-meta-data">
                                            
                                            <span class="date"><i class="fa fa-calendar"></i> {{$val->created_at}}</span>
                                        </div>
                                        
                                        <div class="entry-excerpt">
                                            {{$val->description}}
                                        </div>
                                        <div class="entry-more">
                                            <a href="{{asset('/bai-viet/'.$val->alias)}}">Đọc thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </li>
                @endforeach    
                </ul>
                <div class="sortPagiBar clearfix">
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                            {!!$allBlogs->setPath('')->appends(Input::query())->render() !!}
                          </ul>
                        </nav>
                    </div>
                </div>
            </div> 
        </div>
        
@endsection
@section('script')
@endsection