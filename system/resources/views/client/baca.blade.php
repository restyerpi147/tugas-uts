<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Erpi Blogger</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{url('public')}}/assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('public')}}/assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{url('public')}}/assets/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('public')}}/assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{url('public')}}/assets/images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="{{url('/')}}"><img src="{{url('public')}}/assets/images/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active">
                                 <a href="{{url('/')}}">Home</a>
                              </li>
                              <li>
                                 <a href="{{url('/')}}">About</a>
                              </li>
                              <li>
                                 <a href="{{url('/')}}">Contact us</a>
                              </li>
                              <li>
                                 <a href="{{url('login')}}">Login</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <!-- revolution slider -->
      
<div class="Blog-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="Blogheading">
               <h3>Blog </h3>
            </div>
         </div>
      </div>
   </div>
</div>



      <!-- section --> 
      <div class="section layout_padding blog_blue_bg light_silver">
         <div class="container">
            
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="full">
                     <div class="big_blog">
                        <img class="img-responsive" src="{{url('public')}}/assets/images/blog_1.png" alt="#" />
                     </div>
                     <div class="blog_cont_2">
                        <h3>{{$blog->judul}}</h3>
                        <p class="sublittle">Penulis : {{$blog->penulis}} | Tanggal : {{$blog->created_at}}</p>
                        <p>
                           {!! nl2br($blog->isi) !!}
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->

<!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4 style="border-bottom: solid #333 1px;">Komentar</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  @foreach($list_komentar as $komentar)
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <img src="{{url('public')}}/assets/images/c_1.png" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3>{{$komentar->nama}}</h3>
                              <h4>Email : {{$komentar->email}} | Di post pada {{$komentar->created_at}}</h4>
                              <p>
                                 {!! nl2br($komentar->isi) !!}
                              </p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#">Reply</a>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12 margin_top_30">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4>Post : Your Comment</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form action="{{url('komentar', $blog->id)}}" method="post">
                        @csrf
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="nama" placeholder="Name" required="" />
                                    <input type="email" name="email" placeholder="Email" required="" />
                                 </div>
                                 <div class="col-md-6">
                                    <textarea placeholder="Comment" name="isi" required=""></textarea>
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                       <button>Send</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      
      <!-- footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <a href="#"><img src="images/footer_logo.png" alt="#" /></a>
                  <ul class="contact_information">
                     <li><span><img src="{{url('public')}}/assets/images/location_icon.png" alt="#" /></span><span class="text_cont">London 145<br>United Kingdom</span></li>
                     <li><span><img src="{{url('public')}}/assets/images/phone_icon.png" alt="#" /></span><span class="text_cont">987 654 3210<br>987 654 3210</span></li>
                     <li><span><img src="{{url('public')}}/assets/images/mail_icon.png" alt="#" /></span><span class="text_cont">demo@gmail.com<br>support@gmail.com</span></li>
                  </ul>
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="footer_links">
                     <h3>Quick link</h3>
                     <ul>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Features</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Evens</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Markrting</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Instagram</h3>
                     <ol>
                        <li><img class="img-responsive" src="{{url('public')}}/assets/images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="{{url('public')}}/assets/images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="{{url('public')}}/assets/images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="{{url('public')}}/assets/images/footer_blog.png" alt="#" /></li>
                     </ol>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Contact us</h3>
                     <form action="index.html">
                        <fieldset>
                           <div class="field">
                              <input type="text" name="name" placeholder="Your Name" required="" />
                           </div>
                           <div class="field">
                              <input type="email" name="email" placeholder="Email" required="" />
                           </div>
                           <div class="field">
                              <input type="text" name="subject" placeholder="Subject" required="" />
                           </div>
                           <div class="field">
                              <textarea placeholder="Message"></textarea>
                           </div>
                           <div class="field">
                              <div class="center">
                                 <button class="reply_bt">Send</button>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{url('public')}}/assets/js/jquery.min.js"></script>
      <script src="{{url('public')}}/assets/js/popper.min.js"></script>
      <script src="{{url('public')}}/assets/js/bootstrap.bundle.min.js"></script>
      <script src="j{{url('public')}}/assets/s/jquery-3.0.0.min.js"></script>
      <script src="j{{url('public')}}/assets/s/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="{{url('public')}}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{url('public')}}/assets/js/custom.js"></script>
   </body>
</html>