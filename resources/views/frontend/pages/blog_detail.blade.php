@extends('frontend.layout.master')
@section('content')
 <div class="wrapper-breadcrums">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-24">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li class="home"> <a href="{{asset('/')}}" title="Go to Home Page"><span >Trang chủ</span></a> <span class="separator">/ </span>
                                        </li>
                                        <li class="blog"> <a href="{{asset('/tintuc')}}" title="Go to Blog"><span >Tin tức</span></a> <span class="separator">/ </span>
                                        </li>
                                        <li class="post"><strong>{{$blog_detail->title}}</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.wrapper-breadcrums -->

                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col2-left-layout">
                                <div class="row">
                                    <div class="col-sm-18 col-sm-push-6 em-col-main">
                                        
                                        <div class="em_post-item">
                                            <div class="post-title">
                                                <h2>{{$blog_detail->title}}</h2>
                                            </div>
                                            <div class="post-content">
                                                <p><span><?php echo $blog_detail->content;?></span>
                                                </p>
                                                
                                            </div>
                                            <div class="post-header">
                                                
                                                </p> <span class="post-time"><small class="time-stamp">{{$blog_detail->created_at}}</small></span>
                                            </div>
                                            
                                            <div class="comments">
                                                <div class="post-footer"> <span class="comment-count"> 3 Comments </span> <span class="separator">|</span> <span class="post-by">Posted by <span>admin</span></span>
                                                </div>
                                                <div class="article-comments">
                                                    <div id="comments-header">
                                                        <h3 class="form-title">Comments (3)</h3>
                                                    </div>
                                                    <div id="allcomments">
                                                        <div class="level1 comment-item">
                                                            <div class="wrapper-reply-comment">
                                                                <div class="comment-item-header"> <span class="comment-by"> Comment by <span>Ben Sherman</span> </span>
                                                                </div>
                                                                <div class="comment-body"> We are particularly excited about this transaction as Ben Sherman is consistent with our mission to acquire high quality brands with substantial global growth potential. The current management team under Oxford’s leadership has done a great job building on the core essence of the brand. We’ve received supportive messages from retailers across the globe that share our view of the growth opportunity ahead.</div> <small class="time-stamp"> Wednesday, Jul 22 2015, 02:59AM </small>
                                                                <div class="comment-button">
                                                                    <button class="button" name="reply" value="Post Reply"><span><span>Post reply</span></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div id="3_comment_box"></div>
                                                        </div><!-- /.level1 -->
                                                        <div class="level1 comment-item">
                                                            <div class="wrapper-reply-comment">
                                                                <div class="comment-item-header"> <span class="comment-by"> Comment by <span>Musgrave</span> </span>
                                                                </div>
                                                                <div class="comment-body"> s the fashion business as guilty as any other offender? Or is it actually better than most? We would love to hear your views, experiences and observations.</div> <small class="time-stamp"> Wednesday, Jul 22 2015, 02:57AM </small>
                                                                <div class="comment-button">
                                                                    <button class="button" name="reply" value="Post Reply"><span><span>Post reply</span></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div id="1_comment_box"></div>
                                                            <div class='level2 reply comment-item '>
                                                                <div class='comment-item-header'><span>Drappers</span>
                                                                    <div class='comment-status'> <small class='date'>Wednesday, Jul 22 2015, 02:58AM</small>
                                                                        <div class='comment-button'>
                                                                            <button name='reply' class='button' value='Reply'><span><span>Reply</span></span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='comment-body'>It will be interesting to see which firms seize the opportunity to lead by example and how many continue to duck and dive with deflections about staff discounts and other benefits or just ignore the debate. As ever, your views on the topic would be most welcome.</div>
                                                                <div id='2_comment_box'></div>
                                                            </div>
                                                        </div><!-- /.level1 -->
                                                    </div>
                                                    <div class="toolbar">
                                                        <div class="pager">
                                                            <p class="amount"> <strong>2 Item(s)</strong>
                                                            </p>
                                                        </div>
                                                    </div><!-- /.toolbar -->
                                                </div>
                                                <div class="form-comment-container"> <span id="new"><h3>Leave Your Comment</h3> </span>
                                                    <div id="0_comment_box" class="form-comment">
                                                        
                                                    </div><!-- /#0_comment_box -->
                                                </div><!-- /.form-comment-container -->
                                            </div><!-- /.comments -->
                                        </div>
                                    </div><!-- /.em-col-main -->

                                    <div class="col-sm-6 col-sm-pull-18 em-col-left em-sidebar">
                                       
                                         <div class="block em_block-recent-post em-line-01">
                                            <div class="block-title"> <strong><span>Các bài viết gần đây</span></strong>
                                            </div>
                                            <div class="block-content">
                                                <ul class="em-recent-post">
                                                @foreach($recent_blogs as $key => $recent_blog)
                                                    <li class="item">
                                                        <a href="{{asset('/blog_detail/'.$recent_blog->id.'/'.$recent_blog->alias)}}"> <img alt="" src="{{asset($recent_blog->image)}}" /> </a> <a class="post-title em-blog-title" href="blog-detail.html">{{$recent_blog->title}}</a>
                                                        <p class="intro">
                                                            <p><span>{{$recent_blog->description}}</span>
                                                            </p>
                                                        </p>
                                                        <div class="post-header">
                                                           
                                                            </p> <span class="post-time"><small class="time-stamp">{{$recent_blog->created_at}}</small></span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                                </ul>
                                            </div>
                                        </div><!-- /.block -->            
                                    </div><!-- /. em-sidebar -->
                                </div>
                            </div><!-- /.em-main-container -->
                        </div>
                    </div>
                </div>
@endsection