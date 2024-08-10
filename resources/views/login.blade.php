<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://www.sman13bdg.sch.id/wp-content/uploads/2021/05/LOGO.png">

    <title>Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

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

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/Vidprofil.mp4" type="video/mp4" />
        </video>

        <div class="login-page flex-column">
            @if(Session::has('status'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="container-login">
                <img src="https://www.dbl.id/uploads/school/7019/813-SMAN_13_BANDUNG.png">
                <h1>Login</h1>
                <form method="POST" action="">
                    @csrf
                    <div class="control">
                        <label for="name">Name</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="control">
                        <label for="psw">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <!-- <span><input type="checkbox">Remember me</span> -->
                    <div class="control">
                        <input type="submit" value="Login">
                    </div>
                </form>
                <div class="forgot">
                    <a href="#">Forgot Password ?</a>
                </div>
            </div>
        </div>
    </section>
    <div class="out">
        <div class="fade-in">
            <div class="loading_page">
                <div class="one common"></div>
                <div class="two common"></div>
                <div class="three common"></div>
                <div class="four common"></div>
                <div class="five common"></div>
                <div class="six common"></div>
                <div class="seven common"></div>
                <div class="eight common"></div>
            </div>
            <div class="bar">
                <div class="progress"></div>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- <script>
        $(body).on("load", function() {
            setTimeout(function() {
                $(".out").fadeOut("slow");
            }, 1000); // delay selama 10 detik sebelum animasi loading page disembunyikan
        });
    </script> -->
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

</body>

</html>