{{-- User Profile page --}}
@extends('layouts.app')
@section('content')
<div id="content-page" class="content-page">
    <div class="container">
       <div class="row">
          <div class="col-sm-12">
             <div class="iq-card">
                <div class="iq-card-body profile-page p-0">
                   <div class="profile-header">
                      <div class="cover-container">
                         <img src="/images/page-img/profile-bg1.jpg" alt="profile-bg" class="rounded img-fluid">
                         <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                            <li><a href="javascript:void();"><i class="ri-pencil-line"></i></a></li>
                            <li><a href="javascript:void();"><i class="ri-settings-4-line"></i></a></li>
                         </ul>
                      </div>
                      <div class="user-detail text-center mb-3">
                         <div class="profile-img">
                            <img src="/images/user/11.png" alt="profile-img" class="avatar-130 img-fluid" />
                         </div>
                         <div class="profile-detail">
                            <h3 class="">{{ Auth::user()->username }}</h3>
                         </div>
                      </div>
                      <div class="profile-info p-4 d-flex align-items-center justify-content-between position-relative">
                         <div class="social-links">
                            <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                               <li class="text-center pr-3">
                                  <a href="#"><img src="/images/icon/08.png" class="img-fluid rounded" alt="facebook"></a>
                               </li>
                               <li class="text-center pr-3">
                                  <a href="#"><img src="/images/icon/09.png" class="img-fluid rounded" alt="Twitter"></a>
                               </li>
                               <li class="text-center pr-3">
                                  <a href="#"><img src="/images/icon/10.png" class="img-fluid rounded" alt="Instagram"></a>
                               </li>
                               <li class="text-center pr-3">
                                  <a href="#"><img src="/images/icon/11.png" class="img-fluid rounded" alt="Google plus"></a>
                               </li>
                               <li class="text-center pr-3">
                                  <a href="#"><img src="/images/icon/12.png" class="img-fluid rounded" alt="You tube"></a>
                               </li>
                               <li class="text-center pr-3">
                                  <a href="#"><img src="/images/icon/13.png" class="img-fluid rounded" alt="linkedin"></a>
                               </li>
                            </ul>
                         </div>
                         <div class="social-info">
                            <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                               <li class="text-center pl-3">
                                  <h6>Posts</h6>
                                  <p class="mb-0">{{ Auth::user()->posts->count() }}</p>
                               </li>
                               <li class="text-center pl-3">
                                  <h6>Post Liked</h6>
                                  <p class="mb-0">{{ Auth::user()->likes->count()}}</p>
                               </li>
                               <li class="text-center pl-3">


                                 <h6>Your liked posts</h6>
                                 {{-- Get the total Auth user likes count --}}
                                 {{-- @if ($user->likes == Auth::user()->id)

                                 <p class="mb-0">{{ Auth::user()->likedPosts->count() }}</p>
                                 @endif --}}
                                 {{-- <p class="mb-0"></p> --}}
                             </li>
                         </ul>

                         </div>
                      </div>
                   </div>
                </div>
             </div>
             @if (session('success'))
                             <div class="alert alert-success" role="alert">
                                 {{ session('success') }}
                             </div>
                         @endif
                         {{-- clear the flash message --}}
                         @php
                             session()->forget('message');
                         @endphp

             <div class="iq-card">
                <div class="iq-card-body p-0">
                   <div class="user-tabing">
                      <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                         <li class="col-sm-3 p-0">
                            <a class="nav-link active" data-toggle="pill" href="{{ route('profile') }}">Timeline</a>
                         </li>
                         <li class="col-sm-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#about">About</a>
                         </li>
                         <li class="col-sm-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#friends">friends</a>
                         </li>
                         <li class="col-sm-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#photos">Photos</a>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-12">
             <div class="tab-content">
                <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                   <div class="iq-card-body p-0">
                      <div class="row">
                         <div class="col-lg-4">
                            <div class="iq-card">
                               <div class="iq-card-body">
                                  <a href="#">
                                     <span
                                     class="badge badge-pill badge-primary font-weight-normal ml-auto mr-1"
                                     ><i
                                        class="ri-star-line">
                                     </i>
                                     </span> 27 Items for you
                                  </a>
                               </div>
                            </div>
                            <div class="iq-card">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">Life Event</h4>
                                  </div>
                                  <div class="iq-card-header-toolbar d-flex align-items-center">
                                     <p class="m-0"><a href="javacsript:void();"> Create </a></p>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                  <div class="row">
                                     <div class="col-sm-12">
                                        <div class="event-post position-relative">
                                           <a href="javascript:void();"><img src="/images/page-img/07.jpg" alt="gallary-image" class="img-fluid rounded"></a>
                                           <div class="job-icon-position">
                                              <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line"></i></div>
                                           </div>
                                           <div class="iq-card-body text-center p-2">
                                              <h5>Started New Job at Apple</h5>
                                              <p>January 24, 2019</p>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-sm-12">
                                        <div class="event-post position-relative">
                                           <a href="javascript:void();"><img src="/images/page-img/06.jpg" alt="gallary-image" class="img-fluid rounded"></a>
                                           <div class="job-icon-position">
                                              <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line"></i></div>
                                           </div>
                                           <div class="iq-card-body text-center p-2">
                                              <h5>Freelance Photographer</h5>
                                              <p>January 24, 2019</p>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="iq-card">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">Photos</h4>
                                  </div>
                                  <div class="iq-card-header-toolbar d-flex align-items-center">
                                     <p class="m-0"><a href="javacsript:void();">Add Photo </a></p>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                  <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="/images/page-img/g1.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="/images/page-img/g2.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="/images/page-img/g3.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="/images/page-img/g4.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="/images/page-img/g5.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="/images/page-img/g6.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-0"><a href="javascript:void();"><img src="/images/page-img/g7.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-0"><a href="javascript:void();"><img src="/images/page-img/g8.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-0"><a href="javascript:void();"><img src="/images/page-img/g9.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                  </ul>
                               </div>
                            </div>
                            <div class="iq-card">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">Friends</h4>
                                  </div>
                                  <div class="iq-card-header-toolbar d-flex align-items-center">
                                     <p class="m-0"><a href="">Create Group</a></p>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                  <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                        <a href="javascript:void();">
                                        <img src="/images/user/05.jpg" alt="gallary-image" class="img-fluid" /></a>
                                        <h6 class="mt-2">Anna Rexia</h6>
                                     </li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                        <a href="javascript:void();"><img src="/images/user/06.jpg" alt="gallary-image" class="img-fluid" /></a>
                                        <h6 class="mt-2">Tara Zona</h6>
                                     </li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                        <a href="javascript:void();"><img src="/images/user/07.jpg" alt="gallary-image" class="img-fluid" /></a>
                                        <h6 class="mt-2">Polly Tech</h6>
                                     </li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                        <a href="javascript:void();"><img src="/images/user/08.jpg" alt="gallary-image" class="img-fluid" /></a>
                                        <h6 class="mt-2">Bill Emia</h6>
                                     </li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                        <a href="javascript:void();"><img src="/images/user/09.jpg" alt="gallary-image" class="img-fluid" /></a>
                                        <h6 class="mt-2">Moe Fugga</h6>
                                     </li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                        <a href="javascript:void();"><img src="/images/user/10.jpg" alt="gallary-image" class="img-fluid" /></a>
                                        <h6 class="mt-2">Hal Appeno </h6>
                                     </li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                        <a href="javascript:void();"><img src="/images/user/07.jpg" alt="gallary-image" class="img-fluid" /></a>
                                        <h6 class="mt-2">Zack Lee</h6>
                                     </li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                        <a href="javascript:void();"><img src="/images/user/06.jpg" alt="gallary-image" class="img-fluid" /></a>
                                        <h6 class="mt-2">Terry Aki</h6>
                                     </li>
                                     <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                        <a href="javascript:void();"><img src="/images/user/05.jpg" alt="gallary-image" class="img-fluid" /></a>
                                        <h6 class="mt-2">Greta Life</h6>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-8">
                             <div id="post-modal-data" class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Create Post</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                                    <div class="d-flex align-items-center">
                                       <div class="user-img">
                                          <img src="/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                       </div>
                                       {{-- Create the create form for the posts--}}

                                       <form class="post-text ml-3 w-100" action="posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                                         @csrf
                                             <input type="text" class="form-control rounded" placeholder="Write your message here..."
                                                 name="body" style="border:none;">
                                             <input type="text" class="form-control rounded" placeholder="Write a title for the post..."
                                                 name="title" style="border:none;">
                                             <input type="file" class="iq-bg-primary rounded p-2 pointer mr-3" src="/images/small/07.png"
                                                 name="image" id="image">
                                          <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                         </form>
                                    </div>
                                    <hr>
                                    {{-- <ul class="post-opt-block d-flex align-items-center list-inline m-0 p-0">
                                       <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#">
                                         <form action="/posts/{{ $post->id }}/media" method="POST" enctype="multipart/form-data">
                                           @csrf
                                           <input type="file" name="image" id="image">
                                           <button type="submit" src="/images/small/07.png" style="background-color:transparent" class="d-block w-100  border-t-neutral-50">Upload</button>

                                    </ul> --}}
                                 </div>
                              </div>
                            {{-- Post Page Starts --}}
                            <div class="iq-card">
                                @if (!$post->count())
                                    {{-- welcome message--}}
                                    <div class="iq-card-body" >
                                        <img src="/images/page-img/sunset1.jpg" alt="profile-bg" class="rounded img-fluid mb-4">
                                        <h1 class="text-center">Welcome to your timeline</h1>
                                        <p class="text-center">This is your timeline, where you'll see posts from your friends, family and groups.</p>
                                    </div>

                                @else
                                    <div class="iq-card-body">
                                        @foreach ($posts as $post)
                                            <div class="post-item">
                                            <div class="user-post-data p-3">
                                                <div class="d-flex flex-wrap">
                                                    <div class="media-support-user-img mr-3">
                                                        <img class="rounded-circle img-fluid" src="/images/user/1.jpg" alt="">
                                                    </div>
                                                    <div class="media-support-info mt-2">
                                                        <h5 class="mb-0 d-inline-block"><a href="#" class="">{{ $post->user->name }}</a></h5>
                                                        <p class="ml-1 mb-0 d-inline-block">Add New Post</p>
                                                        <p class="mb-0">{{ $post->created_at->format('l j F '). '-'}} {{ $post->created_at->ago()}} </p>
                                                    </div>
                                                    <div class="iq-card-post-toolbar">
                                                        <div class="dropdown">
                                                        <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                        <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu m-0 p-0">
                                                            <a class="dropdown-item p-3" href="#">
                                                                <div class="d-flex align-items-top">
                                                                    <div class="icon font-size-20"><i class="ri-save-line"></i></div>
                                                                    <div class="data ml-2">
                                                                    <h6>Save Post</h6>
                                                                    <p class="mb-0">Add this to your saved items</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                                <div class="d-flex align-items-top">
                                                                    <div class="icon font-size-20"><i class="ri-pencil-line"></i></div>
                                                                    <div class="data ml-2">
                                                                    <h6>Edit Post</h6>
                                                                    <p class="mb-0">Update your post and saved items</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                                <div class="d-flex align-items-top">
                                                                    <div class="icon font-size-20"><i class="ri-close-circle-line"></i></div>
                                                                    <div class="data ml-2">
                                                                    <h6>Hide From Timeline</h6>
                                                                    <p class="mb-0">See fewer posts like this.</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                                <div class="d-flex align-items-top">
                                                                    <div class="icon font-size-20"><i class="ri-delete-bin-7-line"></i></div>
                                                                    <div class="data ml-2">
                                                                    <h6>Delete</h6>
                                                                    <p class="mb-0">Remove thids Post on Timeline</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                                <div class="d-flex align-items-top">
                                                                    <div class="icon font-size-20"><i class="ri-notification-line"></i></div>
                                                                    <div class="data ml-2">
                                                                    <h6>Notifications</h6>
                                                                    <p class="mb-0">Turn on notifications for this post</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-post">
                                                    <a href="{{ route('posts.show', $post->slug) }}">
                                                        <h4>{{ $post->title }}</h4>
                                                    </a>
                                                <a href="{{ route('show', $post->slug) }}"><img src="/images/page-img/p1.jpg" alt="post-image" class="img-fluid w-100" /></a>
                                            </div>
                                            <div class="comment-area mt-3">
                                                {{-- Like button section --}}
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="like-block position-relative d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                @if (!$post->likes->contains('user_id', Auth::user()->id))
                                                            <div class = "like-data">
                                                                <div class ="dropdown">

                                                                    <form action="{{ route('like', $post->id) }}" method="post">
                                                                        @csrf
                                                                        <button type="submit" class = "btn btn-primary">
                                                                            <a class="ml-2 mr-2" href="#" data-toggle="tooltip" data-placement="top" style=" border:none; color:transparent;"
                                                                                title="like" data-original-title="Like">
                                                                            </a>
                                                                            {{ $post->likes->count() }}
                                                                            Like

                                                                        </button>
                                                            {{-- <div class="like-data"> --}}
                                                                {{-- <div class="dropdown"> --}}
                                                                    {{-- <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                                    <img src="images/icon/01.png" class="img-fluid" alt="">
                                                                    </span> --}}
                                                                    {{-- <div class="dropdown-menu">
                                                                        <a class="ml-2 mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like"><img src="images/icon/01.png" class="img-fluid" alt=""></a>
                                                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Love"><img src="images/icon/02.png" class="img-fluid" alt=""></a>
                                                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Happy"><img src="images/icon/03.png" class="img-fluid" alt=""></a>
                                                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt=""></a>
                                                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Think"><img src="images/icon/05.png" class="img-fluid" alt=""></a>
                                                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sade"><img src="images/icon/06.png" class="img-fluid" alt=""></a>
                                                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt=""></a>
                                                                    </div> --}}
                                                                {{-- </div> --}}
                                                            {{-- </div> --}}
                                                                    </div>
                                                                </div>
                                                            </form>
                                                                    @else
                                                                    <span>You liked this post</span>


                                                                    @endif

                                                            <div class="total-like-block ml-2 mr-3">
                                                                <div class="dropdown">
                                                                    {{-- <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                                    140 Likes
                                                                    </span> --}}
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Max Emum</a>
                                                                        <a class="dropdown-item" href="#">Bill Yerds</a>
                                                                        <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                                        <a class="dropdown-item" href="#">Tara Misu</a>
                                                                        <a class="dropdown-item" href="#">Midge Itz</a>
                                                                        <a class="dropdown-item" href="#">Sal Vidge</a>
                                                                        <a class="dropdown-item" href="#">Other</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>

                                                            <div class="total-comment-block">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                                20 Comment
                                                                </span>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Max Emum</a>
                                                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                                                    <a class="dropdown-item" href="#">Other</a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="share-block d-flex align-items-center feather-icon mr-3">
                                                        <a href="javascript:void();"><i class="ri-share-line"></i>
                                                        <span class="ml-1">99 Share</span></a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <ul class="post-comments p-0 m-0">
                                                    <li class="mb-2">
                                                        <div class="d-flex flex-wrap">
                                                        <div class="user-img">
                                                            <img src="/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                        </div>
                                                        <div class="comment-data-block ml-3">
                                                            <h6>Monty Carlo</h6>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                                                <a href="javascript:void();">like</a>
                                                                <a href="javascript:void();">reply</a>
                                                                <a href="javascript:void();">translate</a>
                                                                <span> 5 min </span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex flex-wrap">
                                                        <div class="user-img">
                                                            <img src="/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                        </div>
                                                        <div class="comment-data-block ml-3">
                                                            <h6>Paul Molive</h6>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                                                <a href="javascript:void();">like</a>
                                                                <a href="javascript:void();">reply</a>
                                                                <a href="javascript:void();">translate</a>
                                                                <span> 5 min </span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                                    <input type="text" class="form-control rounded">
                                                    <div class="comment-attagement d-flex">
                                                        <a href="javascript:void();"><i class="ri-link mr-3"></i></a>
                                                        <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                                                        <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                        @endforeach
                                  @endif
                                  {{-- Post Item end --}}
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="about" role="tabpanel">
                   <div class="iq-card">
                      <div class="iq-card-body">
                         <div class="row">
                            <div class="col-md-3">
                               <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                                  <li>
                                     <a class="nav-link active" data-toggle="pill" href="#basicinfo">Contact and Basic Info</a>
                                  </li>
                                  <li>
                                     <a class="nav-link" data-toggle="pill" href="#family">Family and Relationship</a>
                                  </li>
                                  <li>
                                     <a class="nav-link" data-toggle="pill" href="#work">Work and Education</a>
                                  </li>
                                  <li>
                                     <a class="nav-link" data-toggle="pill" href="#lived">Places You've Lived</a>
                                  </li>
                                  <li>
                                     <a class="nav-link" data-toggle="pill" href="#details">Details About You</a>
                                  </li>
                               </ul>
                            </div>
                            <div class="col-md-9 pl-4">
                               <div class="tab-content">
                                  <div class="tab-pane fade active show" id="basicinfo" role="tabpanel">
                                     <h4>Contact Information</h4>
                                     <hr>
                                     <div class="row">
                                        <div class="col-3">
                                           <h6>Email</h6>
                                        </div>
                                        <div class="col-9">
                                           <p class="mb-0">Bnijohn@gmail.com</p>
                                        </div>
                                        <div class="col-3">
                                           <h6>Mobile</h6>
                                        </div>
                                        <div class="col-9">
                                           <p class="mb-0">(001) 4544 565 456</p>
                                        </div>
                                        <div class="col-3">
                                           <h6>Address</h6>
                                        </div>
                                        <div class="col-9">
                                           <p class="mb-0">United States of America</p>
                                        </div>
                                     </div>
                                     <h4 class="mt-3">Websites and Social Links</h4>
                                     <hr>
                                     <div class="row">
                                        <div class="col-3">
                                           <h6>Website</h6>
                                        </div>
                                        <div class="col-9">
                                           <p class="mb-0">www.bootstrap.com</p>
                                        </div>
                                        <div class="col-3">
                                           <h6>Social Link</h6>
                                        </div>
                                        <div class="col-9">
                                           <p class="mb-0">www.bootstrap.com</p>
                                        </div>
                                     </div>
                                     <h4 class="mt-3">Basic Information</h4>
                                     <hr>
                                     <div class="row">
                                        <div class="col-3">
                                           <h6>Birth Date</h6>
                                        </div>
                                        <div class="col-9">
                                           <p class="mb-0">24 January</p>
                                        </div>
                                        <div class="col-3">
                                           <h6>Birth Year</h6>
                                        </div>
                                        <div class="col-9">
                                           <p class="mb-0">1994</p>
                                        </div>
                                        <div class="col-3">
                                           <h6>Gender</h6>
                                        </div>
                                        <div class="col-9">
                                           <p class="mb-0">Female</p>
                                        </div>
                                        <div class="col-3">
                                           <h6>interested in</h6>
                                        </div>
                                        <div class="col-9">
                                           <p class="mb-0">Designing</p>
                                        </div>
                                        <div class="col-3">
                                           <h6>language</h6>
                                        </div>
                                        <div class="col-9">
                                           <p class="mb-0">English, French</p>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="tab-pane fade" id="family" role="tabpanel">
                                     <h4 class="mb-3">Relationship</h4>
                                     <ul class="suggestions-lists m-0 p-0">
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Add Your Relationship Status</h6>
                                           </div>
                                        </li>
                                     </ul>
                                     <h4 class="mt-3 mb-3">Family Members</h4>
                                     <ul class="suggestions-lists m-0 p-0">
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Add Family Members</h6>
                                           </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><img src="/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Paul Molive</h6>
                                              <p class="mb-0">Brothe</p>
                                           </div>
                                           <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><img src="/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Anna Mull</h6>
                                              <p class="mb-0">Sister</p>
                                           </div>
                                           <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><img src="/images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Paige Turner</h6>
                                              <p class="mb-0">Cousin</p>
                                           </div>
                                           <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                        </li>
                                     </ul>
                                  </div>
                                  <div class="tab-pane fade" id="work" role="tabpanel">
                                     <h4 class="mb-3">Work</h4>
                                     <ul class="suggestions-lists m-0 p-0">
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Add Work Place</h6>
                                           </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><img src="/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Themeforest</h6>
                                              <p class="mb-0">Web Designer</p>
                                           </div>
                                           <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><img src="/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                           <div class="media-support-info ml-3">
                                              <h6>iqonicdesign</h6>
                                              <p class="mb-0">Web Developer</p>
                                           </div>
                                           <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><img src="/images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                           <div class="media-support-info ml-3">
                                              <h6>W3school</h6>
                                              <p class="mb-0">Designer</p>
                                           </div>
                                           <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                        </li>
                                     </ul>
                                     <h4 class="mb-3">Professional Skills</h4>
                                     <ul class="suggestions-lists m-0 p-0">
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Add Professional Skills</h6>
                                           </div>
                                        </li>
                                     </ul>
                                     <h4 class="mt-3 mb-3">College</h4>
                                     <ul class="suggestions-lists m-0 p-0">
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Add College</h6>
                                           </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><img src="/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Lorem ipsum</h6>
                                              <p class="mb-0">USA</p>
                                           </div>
                                           <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                        </li>
                                     </ul>
                                  </div>
                                  <div class="tab-pane fade" id="lived" role="tabpanel">
                                     <h4 class="mb-3">Current City and Hometown</h4>
                                     <ul class="suggestions-lists m-0 p-0">
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><img src="/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Georgia</h6>
                                              <p class="mb-0">Georgia State</p>
                                           </div>
                                           <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><img src="/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Atlanta</h6>
                                              <p class="mb-0">Atlanta City</p>
                                           </div>
                                           <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                        </li>
                                     </ul>
                                     <h4 class="mt-3 mb-3">Other Places Lived</h4>
                                     <ul class="suggestions-lists m-0 p-0">
                                        <li class="d-flex mb-4 align-items-center">
                                           <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                           <div class="media-support-info ml-3">
                                              <h6>Add Place</h6>
                                           </div>
                                        </li>
                                     </ul>
                                  </div>
                                  <div class="tab-pane fade" id="details" role="tabpanel">
                                     <h4 class="mb-3">About You</h4>
                                     <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.</p>
                                     <h4 class="mt-3 mb-3">Other Name</h4>
                                     <p>Bini Rock</p>
                                     <h4 class="mt-3 mb-3">Favorite Quotes</h4>
                                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="friends" role="tabpanel">
                   <div class="iq-card">
                      <div class="iq-card-body">
                         <h2>Friends</h2>
                         <div class="friend-list-tab mt-2">
                            <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                               <li>
                                  <a class="nav-link active" data-toggle="pill" href="#all-friends">All Friends</a>
                               </li>
                               <li>
                                  <a class="nav-link" data-toggle="pill" href="#recently-add">Recently Added</a>
                               </li>
                               <li>
                                  <a class="nav-link" data-toggle="pill" href="#closefriends">Close friends</a>
                               </li>
                               <li>
                                  <a class="nav-link" data-toggle="pill" href="#home">Home/Town</a>
                               </li>
                               <li>
                                  <a class="nav-link" data-toggle="pill" href="#following">Following</a>
                               </li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                  <div class="iq-card-body p-0">
                                     <div class="row">
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Petey Cruiser</h5>
                                                       <p class="mb-0">15  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Anna Sthesia</h5>
                                                       <p class="mb-0">50  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton02" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton02">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Paul Molive</h5>
                                                       <p class="mb-0">10  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton03" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Gail Forcewind</h5>
                                                       <p class="mb-0">20  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton04" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton04">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Paige Turner</h5>
                                                       <p class="mb-0">12  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton05" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>b Frapples</h5>
                                                       <p class="mb-0">6  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton06" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton06">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/13.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Walter Melon</h5>
                                                       <p class="mb-0">30  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton07" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton07">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/14.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Barb Ackue</h5>
                                                       <p class="mb-0">14  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton08" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton08">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Buck Kinnear</h5>
                                                       <p class="mb-0">16  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton09" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton09">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Ira Membrit</h5>
                                                       <p class="mb-0">22  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton10" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton10">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Shonda Leer</h5>
                                                       <p class="mb-0">10  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton11" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton11">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>ock Lee</h5>
                                                       <p class="mb-0">18  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton12" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton12">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Maya Didas</h5>
                                                       <p class="mb-0">40  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton13" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton13">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Rick O'Shea</h5>
                                                       <p class="mb-0">50  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton14" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton14">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Pete Sariya</h5>
                                                       <p class="mb-0">5  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton15" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton15">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Monty Carlo</h5>
                                                       <p class="mb-0">2  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton16" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton16">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Sal Monella</h5>
                                                       <p class="mb-0">0  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton17" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton17">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Sue Vaneer</h5>
                                                       <p class="mb-0">25  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton18" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton18">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Cliff Hanger</h5>
                                                       <p class="mb-0">18  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton19" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton19">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Barb Dwyer</h5>
                                                       <p class="mb-0">23  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton20" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton20">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Terry Aki</h5>
                                                       <p class="mb-0">8  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton21" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton21">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/13.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Cory Ander</h5>
                                                       <p class="mb-0">7  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton22" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton22">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/14.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Robin Banks</h5>
                                                       <p class="mb-0">14  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton23" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton23">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Jimmy Changa</h5>
                                                       <p class="mb-0">10  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton24" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton24">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Barry Wine</h5>
                                                       <p class="mb-0">18  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton25" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton25">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Poppa Cherry</h5>
                                                       <p class="mb-0">16  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton26" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton26">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Zack Lee</h5>
                                                       <p class="mb-0">33  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton27" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton27">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Don Stairs</h5>
                                                       <p class="mb-0">15  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton28" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton28">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Peter Pants</h5>
                                                       <p class="mb-0">12  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton29" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton29">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Hal Appeno </h5>
                                                       <p class="mb-0">13  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton30" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton30">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="tab-pane fade" id="recently-add" role="tabpanel">
                                  <div class="iq-card-body p-0">
                                     <div class="row">
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Otto Matic</h5>
                                                       <p class="mb-0">4  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton31" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton31">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Moe Fugga</h5>
                                                       <p class="mb-0">16  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton32" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton32">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Tom Foolery</h5>
                                                       <p class="mb-0">14  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton33" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton33">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Bud Wiser</h5>
                                                       <p class="mb-0">16  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton34" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton34">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Polly Tech</h5>
                                                       <p class="mb-0">10  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton35" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton35">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Holly Graham</h5>
                                                       <p class="mb-0">8  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton36" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton36">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Tara Zona</h5>
                                                       <p class="mb-0">5  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton37" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton37">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Barry Cade</h5>
                                                       <p class="mb-0">20  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton38" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton38">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="tab-pane fade" id="closefriends" role="tabpanel">
                                  <div class="iq-card-body p-0">
                                     <div class="row">
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Bud Wiser</h5>
                                                       <p class="mb-0">32  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton39" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton39">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Otto Matic</h5>
                                                       <p class="mb-0">9  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton40" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton40">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Peter Pants</h5>
                                                       <p class="mb-0">2  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton41" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton41">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Zack Lee</h5>
                                                       <p class="mb-0">15  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton42" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton42">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Barry Wine</h5>
                                                       <p class="mb-0">36  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton43" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton43">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Robin Banks</h5>
                                                       <p class="mb-0">22  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton44" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton44">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Cory Ander</h5>
                                                       <p class="mb-0">18  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton45" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton45">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Moe Fugga</h5>
                                                       <p class="mb-0">12  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton46" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton46">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Polly Tech</h5>
                                                       <p class="mb-0">30  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton47" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton47">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Hal Appeno</h5>
                                                       <p class="mb-0">25  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton48" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton48">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="tab-pane fade" id="home" role="tabpanel">
                                  <div class="iq-card-body p-0">
                                     <div class="row">
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Paul Molive</h5>
                                                       <p class="mb-0">14  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton49" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton49">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Paige Turner</h5>
                                                       <p class="mb-0">8  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton50" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton50">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Barb Ackue</h5>
                                                       <p class="mb-0">23  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton51" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton51">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Ira Membrit</h5>
                                                       <p class="mb-0">16  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton52" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton52">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Maya Didas</h5>
                                                       <p class="mb-0">12  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton53" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton53">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="tab-pane fade" id="following" role="tabpanel">
                                  <div class="iq-card-body p-0">
                                     <div class="row">
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Maya Didas</h5>
                                                       <p class="mb-0">20  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton54" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton54">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Monty Carlo</h5>
                                                       <p class="mb-0">3  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton55" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton55">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Cliff Hanger</h5>
                                                       <p class="mb-0">20  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton56" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton56">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>b Ackue</h5>
                                                       <p class="mb-0">12  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton57" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton57">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Bob Frapples</h5>
                                                       <p class="mb-0">12  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton58" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton58">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Anna Mull</h5>
                                                       <p class="mb-0">6  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton59" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton59">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>ry Wine</h5>
                                                       <p class="mb-0">15  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton60" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton60">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Don Stairs</h5>
                                                       <p class="mb-0">12  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton61" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton61">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Peter Pants</h5>
                                                       <p class="mb-0">8  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton62" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton62">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Polly Tech</h5>
                                                       <p class="mb-0">18  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton63" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton63">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Tara Zona</h5>
                                                       <p class="mb-0">30  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton64" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton64">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Arty Ficial</h5>
                                                       <p class="mb-0">15  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton65" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton65">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Bill Emia</h5>
                                                       <p class="mb-0">25  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton66" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton66">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Bill Yerds</h5>
                                                       <p class="mb-0">9  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton67" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton67">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                           <div class="iq-friendlist-block">
                                              <div class="d-flex align-items-center justify-content-between">
                                                 <div class="d-flex align-items-center">
                                                    <a href="#">
                                                    <img src="/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                    </a>
                                                    <div class="friend-info ml-3">
                                                       <h5>Matt Innae</h5>
                                                       <p class="mb-0">19  friends</p>
                                                    </div>
                                                 </div>
                                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                       <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton68" data-toggle="dropdown" aria-expanded="true" role="button">
                                                       <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                       </span>
                                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton68">
                                                          <a class="dropdown-item" href="#">Get Notification</a>
                                                          <a class="dropdown-item" href="#">Close Friend</a>
                                                          <a class="dropdown-item" href="#">Unfollow</a>
                                                          <a class="dropdown-item" href="#">Unfriend</a>
                                                          <a class="dropdown-item" href="#">Block</a>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="photos" role="tabpanel">
                   <div class="iq-card">
                      <div class="iq-card-body">
                         <h2>Photos</h2>
                         <div class="friend-list-tab mt-2">
                            <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                               <li>
                                  <a class="nav-link active" data-toggle="pill" href="#photosofyou">Photos of You</a>
                               </li>
                               <li>
                                  <a class="nav-link" data-toggle="pill" href="#your-photos">Your Photos</a>
                               </li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                                  <div class="iq-card-body p-0">
                                     <div class="row">
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/61.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/62.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/63.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/64.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/65.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="tab-pane fade" id="your-photos" role="tabpanel">
                                  <div class="iq-card-body p-0">
                                     <div class="row">
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                           <div class="user-/images position-relative overflow-hidden">
                                              <a href="#">
                                              <img src="/images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                              </a>
                                              <div class="image-hover-data">
                                                 <div class="product-elements-icon">
                                                    <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                       <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                       <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                    </ul>
                                                 </div>
                                              </div>
                                              <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
@endsection




