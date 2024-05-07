<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Restaurant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="<?php echo asset('css/tubesWebpro.css')?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo asset('css/aboutUs.css')?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Caveat">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather+Sans">
</head>

<body>
  <div class="icon">
    <div class="row h-25">
      <div class="col-md-12">
        <a href="www.twitter.com"><img src="https://th.bing.com/th/id/OIP.KgLmbej5buXcs1tF_7Y1_gAAAA?pid=ImgDet&w=300&h=300&rs=1" alt="twitter" style="width:30px; margin: 0px 50px 0px 10px;" align="right"></a>
        <a href="www.facebook.com"><img src="https://th.bing.com/th/id/OIP.xdKs7OxN32gWCL03JYUf3QHaHa?pid=ImgDet&rs=1" alt="facebook" style="width:30px; margin-left:10px;" align = "right"></a>
        <a href="www.instagram.com"><img src="https://th.bing.com/th/id/OIP.incFBymNcooePgOaBQfdjgHaFj?pid=ImgDet&rs=1" alt="instagram" style="width:30px; margin:5px 0px 0px 10px;" align="right"></a>
      </div>
    </div>
  </div>
  <div class="head1">
    <div class="row h-50" id="">
      <div class="col-md-3" id="logo">
        <img src="{{ URL::to('/img/2-removebg-preview.png') }}">
      </div>
      <div class="col-md-6" id=navbar>
        <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/aboutUs">About Us</a></li>
        <li><a href="/menu">Menu</a></li>
        <li><a href="/home">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3" id=tambahan>
        <img src="https://th.bing.com/th/id/R.f29406735baf0861647a78ae9c4bf5af?rik=GKTBhov2iZge9Q&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_206976.png&ehk=gCH45Zmryw3yqyqG%2fhd8WDQ53zwYfmC8K9OIkNHP%2fNU%3d&risl=&pid=ImgRaw&r=0" alt="">
        <img src="https://i.pinimg.com/originals/32/ec/41/32ec417cc69bb561715e28850d947225.png" alt="basket">
        <button type="button" class="btn btn-light" >Log in</button>
      </div>
      </div>
    </div>
  </div>
  <div class="aboutUs">
      <div class="tulisan">
        <h1 style="font-family: Josefin+Sans;">About Us</h1>
        <h3>Home / About Us</h3>
      </div>
  </div>
  <div class="row tulis2">
    <div class="col-md-6 makanan">
      <img src="{{ URL::to('/img/mam1.png') }}">
    </div>
    <div class="col-md-6 tulisan">
      <h1 style="font-family: Josefin+Sans; color: black;">Find the Story Behind the Borgelle</h1>
      <p style="color:black;">Taste the experience of Borgelle expert to your food
      </p>
    </div>
  </div>

  <div class="row booking chef" style="text-align: center;">
    <p class="onlineBooking">Meet Our expert</p>
    <p class="tableBooking" style="margin-top: -60px;">Proffesional<span style="color:rgba(255, 135, 70, 1)"> Chef</span></p>
    <div class="slider-container">
      <div class="slider-content">
        <div class="slider-item">
          <div class="slider-box">
            <img class="slider-box-item" src="https://images.freeimages.com/images/premium/previews/2921/29216242-male-chef-portrait.jpg" alt="chef1"> <br>
            <h3>Mathij Sen Deo</h3>
            <p>It is a long established fact that a reader BBQ food Chicken</p>

          </div>
          <div class="slider-box">
            <img class="slider-box-item" src="https://images.freeimages.com/images/premium/previews/2921/29216242-male-chef-portrait.jpg" alt="chef1"> <br>
            <h3>Mathij Sen Deo</h3>
            <p>It is a long established fact that a reader BBQ food Chicken</p>

          </div>
        </div>
        <div class="slider-item">
          <div class="slider-box">
            <img class="slider-box-item" src="https://images.freeimages.com/images/premium/previews/2921/29216242-male-chef-portrait.jpg" alt="chef1"> <br>
            <h3>Mathij Sen Deo</h3>
            <p>It is a long established fact that a reader BBQ food Chicken</p>

          </div>
          <div class="slider-box">
            <img class="slider-box-item" src="https://images.freeimages.com/images/premium/previews/2921/29216242-male-chef-portrait.jpg" alt="chef1"> <br>
            <h3>Mathij Sen Deo</h3>
            <p>It is a long established fact that a reader BBQ food Chicken</p>

          </div>
        </div>
      </div>
    </div>
    <div class="slider-indicator" id="indicatorContainer">
                    <div class="indicator-ball" data-slide="0"></div>
                    <div class="indicator-ball" data-slide="1"></div>
                </div>

                <script>
                    const sliderContainer = document.querySelector('.slider-container');
                    const sliderContent = document.querySelector('.slider-content');
                    const indicatorBalls = document.querySelectorAll('.indicator-ball');
                    let currentSlide = 0;
                    updateIndicator(currentSlide);

                    // Event listener untuk mengklik bola indikator
                    indicatorBalls.forEach((ball) => {
                        ball.addEventListener('click', () => {
                            const slideIndex = ball.getAttribute('data-slide');
                            sliderContainer.scrollTo({
                                left: slideIndex * sliderContainer.clientWidth,
                                behavior: 'smooth'
                            });
                            updateIndicator(slideIndex);
                        });
                    });

                    function updateIndicator(currentSlide) {
                        indicatorBalls.forEach((ball, index) => {
                            if (index == currentSlide) {
                                ball.style.backgroundColor = '#E48A52';
                            } else {
                                ball.style.backgroundColor = '#999';
                            }
                        });
                    }
                </script>
  </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>