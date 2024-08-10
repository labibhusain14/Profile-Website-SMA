<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Proyek Konsultasi 4">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://www.sman13bdg.sch.id/wp-content/uploads/2021/05/LOGO.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/lightbox.css">

    <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".out");

            loader.classList.add("out--hidden");

            loader.addEventListener("transitionend", () => {
                document.body.removeChild(loader);
            });
        });
    </script>

</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">


                        <!-- ***** Logo Start ***** -->
                        <a href="" class="logo2">
                            <img src="https://www.dbl.id/uploads/school/7019/813-SMAN_13_BANDUNG.png" alt="Bootstrap"
                                width="100" height="75">
                        </a>
                        <a href="index.html" class="logo">
                            SMAN 13 Bandung
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/">Home</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Profile</a>
                                <ul class="sub-menu">
                                    <li><a href="/profile">Profile</a></li>
                                    <li><a href="/kepsek">Headmaster</a></li>
                                    <li><a href="/teacher">Teacher</a></li>
                                    <!-- <li><a href="/teacher-and-staff">Guru & Staff</a></li> -->
                                </ul>
                            </li>

                            <li><a href="/news">News</a></li>
                            <li><a href="/ekskul">Extracuricular</a></li>
                            <li><a href="/#achievment">Achievement</a></li>
                            <li><a href="/#contact">Contact</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/js/isotope.min.js"></script>
    <script src="/assets/js/owl-carousel.js"></script>
    <script src="/assets/js/lightbox.js"></script>
    <script src="/assets/js/tabs.js"></script>
    <script src="/assets/js/video.js"></script>
    <script src="/assets/js/slick-slider.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



</body>

</html>
