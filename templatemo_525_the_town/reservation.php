<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dull Genius</title>
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
</head>

<body>
    <!-- Hero section -->
    <section id="hero" class="text-white tm-font-big tm-parallax">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">
            <div class="container">
                <div class="tm-next">
                    <a href="#hero" class="navbar-brand">Dull Genius</a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#work">Renting service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="text-center tm-hero-text-container">
            <div class="tm-hero-text-container-inner">
                <h2 class="tm-hero-title">Dull Genius</h2>
                <p class="tm-hero-subtitle">

                    <br />
                </p>
            </div>
        </div>

        <div class="tm-next tm-intro-next">
            <a href="#work" class="text-center tm-down-arrow-link">
                <i class="fas fa-3x fa-caret-down tm-down-arrow"></i>
            </a>
        </div>
    </section>

    <section id="work" class="tm-section-pad-top">
        <div class="container tm-container-gallery">
            <div class="row">
                <div class="text-center col-12">
                    <h2 class="tm-text-primary tm-section-title mb-4"><strong>renting rules </strong></h2>
                    <p class="mx-auto tm-work-description">
                        <strong>1. One person can borrow up to three board games at a time.</br> </strong>
                        <strong>2. Each board game has a different rental fee. Take a closer look.</br> </strong>
                        <strong>3. If the board game is broken, the borrower should compensate.</br> </strong>
                        <strong>4. You can pay the rental fee when you come to pick up the board game.</br> </strong>
                        <strong>5. Enjoy the game.</br> </strong>
                    </p>
                    </br>
                    <style>
  table {
    width: 100%;
    border-top: 1px solid #444444;
    border-collapse: collapse;
  }
  th, td {
    border-bottom: 1px solid #444444;
    padding: 10px;
    text-align: center;
  }
  th {
    background-color: #bbdefb;
  }
  td {
    background-color: #e3f2fd;
  }
</style>
                    <table style="width:100%" border="1" bordercolor="gray" width="500" height="300" align="center">
                        <tr bgcolor="blue" align="center">
                        <tr>
                            <th>Check Box</th>
                            <th>number </th>
                            <th>Board game</th>
                            <th>Number of players</th>
                            <th>price </th>
                            <th>State</th>
                        </tr>

                        <?php
		$conn = mysqli_connect(
 		 'localhost',
  	 	 'admin',
 		 'Name0413',
		 'Dull_Genius');
		  $sql = "SELECT * FROM BoardGames";
	       	  $result = mysqli_query($conn, $sql);
		  $i = 1;
		  while( $row = mysqli_fetch_array($result) ){
			echo '<tr>';
			echo '<td><input type="checkbox" name="checked" value="$i"></th>';
			echo '<td>'.$i.'</th>';
			echo '<td>'.$row['title'].'</td>';
			echo '<td>'.$row['num_of_players'].'</td>';
			echo '<td>'.$row['price'].'</td>';
			echo '<td>'.$row['status'].'</td>';
			echo '</tr>';
			$i++;
		  }

	  ?>



                    </table>
                    </br>
                    </br>
                    </br>
                    <p>
                        이름: <input type="text" name="name" size=40><br>
                        </br>
                        학번: <input type="text" name="stdid" size=40><br>
                        <p>
                            </br>
                            </br>
                            </br>
                            </br>

                            </br>
                            </br>
                            </br>
                            </br>
                            <a href="index.php" class="tm-intro-text tm-btn-primary">return</a>
                            &nbsp;
                            <button type="button" onclick="test()" >submit</button>
                            </br>
                            </br>
                            </br>
                            </br>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
        <div class="container tm-container-contact">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-4 tm-section-title">Contact Us</h2>
                    <div class="mb-5 tm-underline">
                        <div class="tm-underline-inner"></div>
                    </div>
                    <p class="mb-5">
                        if do you want to ask about the website or having any problem, please contact us. we will respond as soon as possible.
                        <br>
                        We always welcome new recruits. the Recruitment of new members usually takes place at the beginning of the semester.
                    </p>
                </div>

                <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
                    <a href="tel:01097782590" class="tm-contact-item-link">
                        <i class="fas fa-3x fa-phone mr-4"></i>
                        <span class="mb-0">010-9778-2590</span>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
                    <a href="mailto:22000120@handong.edu" class="tm-contact-item-link">
                        <i class="fas fa-3x fa-envelope mr-4"></i>
                        <span class="mb-0">22000120@handong.edu</span>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
                    <a href="https://www.google.com/maps" class="tm-contact-item-link">
                        <i class="fas fa-3x fa-map-marker-alt mr-4"></i>
                        <span class="mb-0">Handong Global University</span>
                    </a>
                </div>
            </div>
        </div>
        <footer class="text-center small tm-footer">
            <p class="mb-0">
                Copyright &copy; 2021 Dull Genius

                - Design: <a rel="nofollow" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
            </p>
        </footer>
    </section>

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function getOffSet() {
            var _offset = 450;
            var windowHeight = window.innerHeight;

            if (windowHeight > 500) {
                _offset = 400;
            }
            if (windowHeight > 680) {
                _offset = 300
            }
            if (windowHeight > 830) {
                _offset = 210;
            }

            return _offset;
        }

        function setParallaxPosition($doc, multiplier, $object) {
            var offset = getOffSet();
            var from_top = $doc.scrollTop(),
                bg_css = 'center ' + (multiplier * from_top - offset) + 'px';
            $object.css({
                "background-position": bg_css
            });
        }

        // Parallax function
        // Adapted based on https://codepen.io/roborich/pen/wpAsm        
        var background_image_parallax = function($object, multiplier, forceSet) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            // $object.css({"background-attatchment" : "fixed"});

            if (forceSet) {
                setParallaxPosition($doc, multiplier, $object);
            } else {
                $(window).scroll(function() {
                    setParallaxPosition($doc, multiplier, $object);
                });
            }
        };

        var background_image_parallax_2 = function($object, multiplier) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            $object.css({
                "background-attachment": "fixed"
            });
            $(window).scroll(function() {
                var firstTop = $object.offset().top,
                    pos = $(window).scrollTop(),
                    yPos = Math.round((multiplier * (firstTop - pos)) - 186);

                var bg_css = 'center ' + yPos + 'px';

                $object.css({
                    "background-position": bg_css
                });
            });
        };

        $(function() {
            // Hero Section - Background Parallax
            background_image_parallax($(".tm-parallax"), 0.30, false);
            background_image_parallax_2($("#contact"), 0.80);

            // Handle window resize
            window.addEventListener('resize', function() {
                background_image_parallax($(".tm-parallax"), 0.30, true);
            }, true);

            // Detect window scroll and update navbar
            $(window).scroll(function(e) {
                if ($(document).scrollTop() > 120) {
                    $('.tm-navbar').addClass("scroll");
                } else {
                    $('.tm-navbar').removeClass("scroll");
                }
            });

            // Close mobile menu after click 
            $('#tmNav a').on('click', function() {
                $('.navbar-collapse').removeClass('show');
            })

            // Scroll to corresponding section with animation
            $('#tmNav').singlePageNav();

            // Add smooth scrolling to all links
            // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 400, function() {
                        window.location.hash = hash;
                    });
                } // End if
            });

            // Pop up
            $('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            // Gallery
            $('.tm-gallery').slick({
                dots: true,
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 2,
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
    <script>
    function test() {
      console.log("ok");
        var obj_length = document.getElementsByName("checked").length;
        var n = 0;
        for (var i=0; i<obj_length; i++) {
            if (document.getElementsByName("checked")[i].checked == true) {
                n++;
            }
        }
        if(n > 3) alert("Please choose less than 3 board games");
        else alert("Please choose more than 3 board games");
        // {
        //   for (var i=0; i<obj_length; i++) {
        //     if (document.getElementsByName("checked")[i].checked == true) {
                
        //     }
        //   }
        // }
    }
</script>
</body>

</html>