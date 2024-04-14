<!doctype html>
<html lang="en">
    
<head>
        <title>My Portfolio</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Maha Personal cv/resume template for professional and personal website." />
        <meta name="keywords" content="creative, cv, designer,  online cv, online resume, powerful portfolio, professional, professional resume, responsive, resume, vcard " />
        <meta name="developer" content="Md. Siful Islam">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- FAV AND ICONS   -->
        <link rel="shortcut icon" href="asset/images/favicon.ico">
        <link rel="shortcut icon" href="asset/images/apple-icon.png">
        <link rel="shortcut icon" sizes="72x72" href="asset/images/apple-icon-72x72.png">
        <link rel="shortcut icon" sizes="114x114" href="asset/images/apple-icon-114x114.png">
        
        <!-- Google Font-->
        <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="asset/icons/font-awesome-4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="asset/plugins/css/bootstrap.min.css">
        <!-- Animate CSS-->
        <link rel="stylesheet" href="asset/plugins/css/animate.css">
        <!-- Owl Carousel CSS-->
        <link rel="stylesheet" href="asset/plugins/css/owl.css">
        <!-- Fancybox-->
        <link rel="stylesheet" href="asset/plugins/css/jquery.fancybox.min.css">
        <!-- Custom CSS-->
        <link rel="stylesheet" href="asset/css/styles.css">
        <link rel="stylesheet" href="asset/css/responsive.css">
        
        <!-- Colors -->
        <link rel="alternate stylesheet" href="asset/css/colors/blue.css" title="blue">
        <link rel="stylesheet" href="asset/css/colors/defauld.css" title="defauld">
        <link rel="alternate stylesheet" href="asset/css/colors/green.css" title="green">
        <link rel="alternate stylesheet" href="asset/css/colors/blue-munsell.css" title="blue-munsell">
        <link rel="alternate stylesheet" href="asset/css/colors/orange.css" title="orange">
        <link rel="alternate stylesheet" href="asset/css/colors/purple.css" title="purple">
        <link rel="alternate stylesheet" href="asset/css/colors/slate.css" title="slate">
        <link rel="alternate stylesheet" href="asset/css/colors/yellow.css" title="yellow">
    </head>
    <body class="dark-vertion black-bg">
        <!-- Start Loader -->
        <div class="section-loader">
            <div class="loader">
                <div></div>
                <div></div> 
            </div>
        </div>
        <!-- End Loader -->
        
        <!--
        ===================
           NAVIGATION
        ===================
        -->
        <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav wow fadeInUp" id="mh-header">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg mh-nav nav-btn">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#mh-home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-about">About</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-skills">Skills</a>
                                </li>                                
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-experience">Resume</a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                                </li>                               
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-webinar">Webinar</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-contact">Contact</a>
                                </li>
                            @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                    @endauth
                                </div>
                            @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        
        <!--
        ===================
            HOME 
        ===================
        -->
        <section class="mh-home" id="mh-home">
            <div class="home-ovimg">
                <div class="container">
                    <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
                        <div class="col-sm-6">
                            <div class="mh-header-info">
                                <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <span>Hello I'm</span>
                                </div>
                                @foreach($admin as $user)
                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->name }}</h2>
                                <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">{{ $user->job }}</h4>
                                
                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">{{ $user->email }}</a></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:">+63{{ $user->phone }}</li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address>{{ $user->address }}</address></li>
                                </ul>
                                
                                <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                    <li><a href="{{ $user->fb_link }}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $user->linkedin_link }}"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="{{ $user->github_link }}"><i class="fa fa-github"></i></a></li>
                                    <li><a href="{{ $user->instagram_link }}"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <div class="img-border">
                                    @if($user->avatar)
                                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Default Profile Picture" class="img-fluid">
                                    @else
                                        <img src="{{ asset('assets/img/user1.jpg') }}" alt="Default Profile Picture" class="img-fluid">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
        
        <!--
        ==================
            ABOUT
        =================
        -->
        <section class="mh-about" id="mh-about">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <img src="asset/images/background.JPG" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-inner">
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">About Me</h2>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->description }}</p>
                            <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"><i></i> <strong>Birthday:</strong> <span>{{ $user->birthday }}</span></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><i></i> <strong>Age:</strong> <span>{{ $user->age }}</span></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><i></i> <strong>Gender:</strong> <span>{{ $user->gender }}</span></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i></i> <strong>Phone:</strong> <span>+{{ $user->phone }}</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"><i></i> <strong>Address:</strong> <span>{{ $user->address }}</span></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><i></i> <strong>Email:</strong> <span>{{ $user->email }}</span></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><i></i> <strong>Religion:</strong> <span>{{ $user->religion }}</span></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i></i> <strong>Status:</strong> <span>{{ $user->status }}</span></li>
                                </ul>
                            </div>
                            </div>
                            <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <ul>
                                    @foreach($skills as $skill)
                                    <li><span>{{ $skill->skill_name }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        
        <!--
        ===================
           SKILLS
        ===================
        -->
        <section class="mh-skills-tag" id="mh-skills">
        <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12">
            <div class="section-title text-center col-sm-12">
                <h2>Skills</h2>
            </div>
                <div class="row">
                    @foreach ($skills as $index => $skill)
                        <div class="col-md-4">
                            <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <div class="each-skills">
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">{{ $skill->skill_name }}</div>
                                                <div class="percentagem-num">{{ $skill->percent }}</div>
                                            </div>
                                            <div class="progressBar" data-progress="{{ $skill->percent }}">
                                                <div class="percentagem"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (($index + 1) % 3 == 0)
                            <div class="clearfix visible-md visible-lg"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

        <!--
        ===================
           EXPERIENCES
        ===================
        -->
        <section class="mh-experince" id="mh-experience">
            <div class="bolor-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-education">
                                 <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                                <div class="mh-education-deatils">
                                    <!-- Education Institutes-->
                                    @foreach($educationals as $educational)
                                    <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                        <h4>{{ $educational->school_type }} From <a href="#">{{ $educational->school_name }}</a></h4>
                                        <div class="mh-eduyear">{{ $educational->date }}</div>
                                        <p>{{ $educational->description }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-work">
                                 <h3>Work Experience</h3>
                                <div class="mh-experience-deatils">
                                    <!-- Education Institutes-->
                                    @foreach($experiences as $experience)
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <h4>{{ $experience->job_title }} at<a href="#"> {{ $experience->company }}</a></h4>
                                        <div class="mh-eduyear">{{ $experience->date }}</div>
                                        <span>Responsibility:</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i> {{ $experience->responsibility }}</li>
                                        </ul>
                                    </div> 
                                    @endforeach                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           PORTFOLIO
        ===================
        -->
        <section class="mh-portfolio" id="mh-portfolio">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <h3>Recent Portfolio</h3>
                    </div>
                    <div class="part col-sm-12">
                        <div class="portfolio-nav col-sm-12" id="filter-button">
                            <ul>
                                <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"> <span>Works</span></li>
                            </ul>
                        </div>
                        <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <div class="portfolioContainer row">
                            @foreach($works as $work)
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui mockup">
                                    <figure>
                                        <img src="{{ asset('storage/' . $work->logo ) }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-link" ><a href="{{ $work->link }}"></a></i>
                                            <h5 class="title">{{ $work->name }}</h5>
                                            <span class="sub-title">{{ $work->type }}   </span>
                                        </figcaption>
                                    </figure>
                                </div>
                            @endforeach
                            </div> <!-- End: .grid .project-gallery -->
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .part -->
                </div> <!-- End: .row -->
            </div>
        </section>
        
        <!--
        ===================
           BLOG
        ===================
        -->
        <section class="mh-blog" id="mh-blog">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>Featured Posts</h3>
                    </div>
                    @foreach($blogs as $blog)
                    <div class="col-sm-12 col-md-4">
                         <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <img src="{{ asset('storage/' . $blog->blog_img ) }}" alt="" class="img-fluid">
                            <div class="blog-inner">
                                <h2><a href="#">{{ $blog->title }}</a></h2>
                                <div class="mh-blog-post-info">
                                    <ul>
                                        <li><strong>Post On</strong><a href="#">{{ $blog->date }}</a></li>
                                        <li><strong>By</strong><a href="#">{{ $blog->author }}</a></li>
                                    </ul>
                                </div>
                                <p>{{ $blog->content }}</p>
                                <a href="{{ $blog->link }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>        
        
        <!--
        ===================
           Webinar
        ===================
        -->

        <section class="mh-blog" id="mh-webinar">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>Webinar/Seminar</h3>
                    </div>
                    @foreach($webinars as $webinar)
                    <div class="col-sm-12 col-md-4">
                         <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <img src="{{ asset('storage/' . $webinar->webinar_img ) }}" alt="" class="img-fluid">
                            <div class="blog-inner">
                                <h2><a href="#">{{ $webinar->agenda }}</a></h2>
                                <div class="mh-blog-post-info">
                                    <ul>
                                        <li><strong>Post On</strong><a href="#">{{ $webinar->date }}</a></li>
                                        <li><strong>By</strong><a href="#">{{ $webinar->host_name }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>    

        <!--
        ===================
           TESTIMONIALS
        ===================
        -->
        <!-- <section class="mh-testimonial" id="mh-testimonial">
            <div class="home-v-img">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Client Reviews</h3>
                        </div>
                        <div class="col-sm-12 wow fadeInUp" id="mh-client-review" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="asset/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="asset/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>                    
                            
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="asset/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="asset/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="asset/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>                    
                            
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="asset/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         -->
        <!--
        ===================
           FOOTER 1
        ===================
        -->
        <footer class="mh-footer mh-footer-3" id="mh-contact">
            <div class="container-fluid">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>Contact Me</h3>
                    </div>
                    <div class="map-image image-bg col-sm-12">
                        <div class="container mt-30">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mh-footer-address">
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item dark-bg shadow-1 media wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                            <div class="each-icon">
                                            @foreach($admin as $item)
                                                <i class="fa fa-location-arrow"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Address</h4>
                                                <address>
                                                      {{ $item->address }}  <br> 
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                            <div class="each-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Email</h4>
                                                <a href="#">{{ $item->email }}</a><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                            <div class="each-icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Phone</h4>
                                                <a href="#">+{{ $item->phone }}</a><br>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <form action="" onclick="maintenance()" method="post" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                                           <div id="msgSubmit" class="h3 text-center hidden"></div>
                                           <div class="row">
                                               <div class="col-md-6 col-sm-12">
                                                   <input name="first_name" class="contact-name form-control" id="name" type="text" placeholder="First Name" required>
                                               </div>
                                               <div class="col-md-6 col-sm-12">
                                                   <input name="last_name" class="contact-email form-control" id="L_name" type="text" placeholder="Last Name" required>
                                               </div>
                                               <div class="col-sm-12">
                                                   <input name="email" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                                               </div>
                                               <div class="col-sm-12">
                                                   <textarea name="message" class="contact-message" id="message" rows="6" placeholder="Your Message" required></textarea>
                                               </div>
                                               <!-- Subject Button -->
                                               <div class="btn-form col-sm-12">
                                                   <button type="submit" class="btn btn-fill btn-block" id="form-submit">Send Message</button>
                                               </div>
                                           </div>
                                       </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!--
    ==============
    * JS Files *
    ==============
    -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <!-- jQuery -->
    <script src="asset/plugins/js/jquery.min.js"></script>
    <!-- popper -->
    <script src="asset/plugins/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="asset/plugins/js/bootstrap.min.js"></script>
    <!-- owl carousel -->
    <script src="asset/plugins/js/owl.carousel.js"></script>
    <!-- validator -->
    <script src="asset/plugins/js/validator.min.js"></script>
    <!-- wow -->
    <script src="asset/plugins/js/wow.min.js"></script>
    <!-- mixin js-->
    <script src="asset/plugins/js/jquery.mixitup.min.js"></script>
    <!-- circle progress-->
    <script src="asset/plugins/js/circle-progress.js"></script>
    <!-- jquery nav -->
    <script src="asset/plugins/js/jquery.nav.js"></script>
    <!-- Fancybox js-->
    <script src="asset/plugins/js/jquery.fancybox.min.js"></script>
    <!-- isotope js-->
    <script src="asset/plugins/js/isotope.pkgd.js"></script>
    <script src="asset/plugins/js/packery-mode.pkgd.js"></script>
    <!-- Map api -->
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCRP2E3BhaVKYs7BvNytBNumU0MBmjhhxc"></script>
    <!-- Custom Scripts-->
    <script src="asset/js/map-init.js"></script>
    <script src="asset/js/js.js"></script>
    <script src="asset/js/custom-scripts.js"></script>
    

    <!-- ****************
      After neccessary customization/modification, Please minify 
      JavaScript/jQuery according to http://browserdiet.com/en/ for better performance
    **************** -->
    <ul class="styles">
        <li><a href="#" onclick="setActiveStyleSheet('blue'); return false;" title="Blue">
            <div class="blue"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('purple'); return false;" title="Purple">
            <div class="purple"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('blue-munsell'); return false;" title="Blue Munsell">
            <div class="blue-munsell"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('orange'); return false;" title="Orange">
            <div class="orange"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('slate'); return false;" title="Slate">
            <div class="slate"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('green'); return false;" title="Green">
            <div class="green"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('yellow'); return false;" title="Yellow">
            <div class="yellow"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('red'); return false;" title="Red">
            <div class="red"></div></a>
        </li>
    </ul>
    </div>
    </div>
</body>

</html>