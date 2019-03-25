<!DOCTYPE html>
<html lang="en">

<head>
    <title>Globalsupplying</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
    <!--  <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-rtl.min.css')); ?>"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Cairo:600" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/instafeed.min.js')); ?>"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="container">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a class="nav-link" href="/">
                                Home
                            </a>

                        </li>
                        <li class="">
                            <a class="nav-link" href="/">
                                About Us
                            </a>

                        </li>

                        <!--           <li class="">
                            <a class="nav-link" href="/reserve-consultant">
                                خدمات الاستشارات

                            </a>

                        </li> -->


                        



                        <li class="">
                            <a class="nav-link" href="/">
                                News
                            </a>

                        </li>



                        <li class="">
                            <a class="nav-link" href="/">
                                Our Products
                            </a>

                        </li>
                        <li class="">
                            <a class="nav-link" href="/contact-ar">
                                Contact Us
                            </a>

                        </li>
                        <li class="">
                            <a class="nav-link" href="/">
                                عربي
                            </a>

                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <hr>


        <?php echo $__env->yieldContent('content'); ?>

        <!-- Footer -->
        <footer class="text-center">
            <div>
                <p class="pull-left" style="padding:10px">IdeasOwners

                    <a href="https://www.instagram.com/mubarakalesmail/" target="_blank" title="Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </p>



                <a class="up-arrow pull-right" href="#myPage" style="padding:10px" data-toggle="tooltip" title="TO TOP">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a><br><br>

            </div>
        </footer>
    </div>
    <script type="text/javascript">
        var feed = new Instafeed({
            get: 'user',
            userId: '201923325',
            limit: '8',
            resolution: 'low_resolution',
            accessToken: '201923325.1677ed0.1bd411c16d6948a8914cae259664e804',
            template: '  <div class="col-sm-3"><a href="{{link}}"><img src="{{image}}" class="img-thumbnail img-responsive"/></a> </div>'
        });
        feed.run();
    </script>
    <script>
        $(document).ready(function() {
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>

</body>

</html> 