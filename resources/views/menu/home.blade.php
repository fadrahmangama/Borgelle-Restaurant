<!doctype html>
<html lang="en">

<head>
<title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo asset('css/cssoman.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo asset('css/cssdzifii.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo asset('css/csshasbi.css')?>" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Caveat">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather+Sans">
</head>

<body>
    <header>
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
            <div class="row h-50" id="hitam">
            <div class="col-md-3" id="logo">
                <img src="{{ URL::to('/img/logo.png') }}">
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
                <a href='/logout'><button type="button" class="login-button" >Log out</button></a>
            </div>
            </div>
        </div>
    </header>
    <section class="header">
        <div class="row h-25">
            <div class="col-md-6" style="background-color:  white;" id="satu">
              <div class="tulisan">
              <b><h2>ENJOY <span style="color:rgba(255, 135, 71, 1);">OUR</span></h2><br> 
                <h2>DELICIOUS FOOD</h2></b>
              </div>
              <button type="button" class="btn btn-warning"><a href="/menu">Order Now</a></button>
            </div>
            <div class="col-md-6" style="background-image: linear-gradient(to right, rgba(255,255,0,0), rgba(255, 135, 71, 1));;" id="dua">
              <img src="{{ URL::to('/img/idbokgmw-removebg-preview.png') }}">
            </div>
        </div>
    </section>
    <section class="booking">
        <div class="row h-50">
            <div class="col-md-1" style="background-color: white;"></div>
            <div class="col-md-10" style="background-color: white;">
              <p class="onlineBooking">Online Booking</p>
              <p class="tableBooking">Table <span style="color:rgba(255, 135, 71, 1)">Booking</span></p>
              <form>
                <select>
                  <option>4 Orang</option>
                  <option>3 Orang</option>
                  <option>2 Orang</option>
                  <option>1 Orang</option>
                </select>
                <input type="date" name="date">
                <select>
                  <option>07:24 PM</option>
                  <option>07:24 PM</option>
                  <option>07:24 PM</option>
                  <option>07:24 PM</option>
                </select>
                <br>
                <button type="button"><a href="/menu">Book Table</a></button>
              </form>
            </div>
            <div class="col-md-1" style="background-color: white;"></div>
          </div>
    </section>
    <section class="promo" style="background-color: peachpuff">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="promo-header">
                    <h1>CHECK OUT
                        <span>PROMO</span>
                    </h1>
                </div>
                <div class="promo-wrapper">
                    <div class="slides">
                        <span id="slide-1"></span>
                        <span id="slide-2"></span>
                        <span id="slide-3"></span>

                        <div class="promo-images">
                            <img src="{{ URL::to('/img/10.png') }}">
                        </div> 
                        <div class="promo-images">
                            <img src="{{ URL::to('/img/10.png') }}">
                        </div> 
                        <div class="promo-images">
                            <img src="{{ URL::to('/img/10.png') }}">  
                        </div> 
                        
                    </div>
                    
                    <div class="navigation">
                        <a href="#slide-1">1</a>
                        <a href="#slide-2">2</a>
                        <a href="#slide-3">3</a>
                    </div>
                </div>                  
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
    <section class="pop-menu">
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 kolom2" style="margin-top: 15px; margin-bottom: 25px;">
            <div class="col-md-8 kolom-kiri" style="margin-left: 35px;">
                <div class="row" style="height: 50%;margin-left: 3px; margin-bottom: 12px;">
                    <div class="col-md-8 deh" style="background-color: gold;">
                        <div class="kol1" style="padding-top: 10px;">
                            <h3>Daging Enak Halal</h3>
                            <p>Sale off 20% only this week</p>
                            <button type="button" class="btn btn-danger"><a href="/menu">ORDER NOW</a></button>
                        </div>
                        <img src="{{ URL::to('/img/mam1.png') }}" alt="" class="d-flex align-items-start" style="margin-left: 300px;">
                    </div>
                    <div class="col-md-4" style="background: peachpuff;">
                        <div class="kol2 d-flex align-items-end flex-column mb-3" style="padding-top: 10px;">
                            <div><h3>Burger Halal</h3></div>
                            <div><a href="/menu">ORDER NOW</a></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 50%; margin-left: 3px;">
                    <div class="col-md-4" style="background-color: rgba(255, 135, 71,1)">
                        <div class="kol3 d-flex align-items-start flex-column mb-3" style="padding-top: 200px;">
                            <div><h3>Soto Enak Halal</h3></div>
                            <div><a href="/menu">ORDER NOW</a></div>
                        </div>
                    </div>
                    <div class="col-md-4" style="background-color: peachpuff;">
                        <div class="kol4" style="padding-top: 10px;">
                            <div class="d-flex justify-content-center"><h3>Ayam Enak Halal</h3></div>
                            <div class="d-flex justify-content-center"><a href="/menu">ORDER NOW</a></div>
                        </div>
                    </div>
                    <div class="col-md-4" style="background-color: rgba(255, 135, 71,1);">
                        <div class="kol5 d-flex align-items-end flex-column mb-3" style="padding-top: 200px;">
                            <div><h3>Kentang Halal</h3></div>
                            <div><a href="/menu">ORDER NOW</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 kolom-kanan d-flex align-items-center flex-column" style="margin-left: 20px;">
                <div class="pop-menu-header">
                    <h1>POPULAR <span>MENU</span>
                    </h1>
                </div>
                <div class="pop-menu-tulisan">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque nibh quis lacus lacinia interdum. In quis pharetra dolor. Pellentesque vitae sodales felis, eu suscipit turpis. Duis congue bibendum urna, eget varius mauris molestie non. Ut porta tempor nunc, a mattis diam tincidunt eget. Etiam sit amet lobortis nunc. Aliquam condimentum posuere sollicitudin. Donec ac orci lacinia, sollicitudin nisl et, iaculis augue. Nullam vitae ultricies massa. Sed tincidunt porta sodales. Curabitur et pharetra quam. Maecenas quis nibh nisi. Etiam varius augue vel pharetra eleifend.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        </div>
    </section>
    <section class="feedback">
        <div class="row">
            <div class="col-md-1" style="background-color: peachpuff;"></div>
            <div class="col-md-10" style="background-image: url('https://img.freepik.com/free-photo/top-view-table-full-food_23-2149209253.jpg?w=1380&t=st=1699281252~exp=1699281852~hmac=15000add57707260e692f89e7279cb57f4842b48968774c956ba8077070580fa'); object-fit: cover; overflow: hidden;">
            <table style="margin: auto">
                <tr>
                    <td>
                        <div class="review-box">
                            <div class="review-header">
                                <img class="reviewer-photo" src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?size=626&ext=jpg&ga=GA1.1.1865730493.1699250448&semt=ais" alt="Foto Reviewer">
                                <h3>John Jones</h3>
                            </div>
                            <div class="rating">
                                4.5/5
                            </div>
                            <div class="review-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis urna nec ex faucibus egestas. Fusce id justo at nulla posuere tincidunt.</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="review-box">
                            <div class="review-header">
                                <img class="reviewer-photo" src="https://img.freepik.com/premium-photo/young-man-shirt-isolated-white-background_185193-74626.jpg?size=626&ext=jpg&ga=GA1.1.1865730493.1699250448&semt=ais" alt="Foto Reviewer">
                                <h3>Clifford</h3>
                            </div>
                            <div class="rating">
                                5/5
                            </div>
                            <div class="review-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis urna nec ex faucibus egestas. Fusce id justo at nulla posuere tincidunt.</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            </div>
            <div class="col-md-1" style="background-color: peachpuff;"></div>
        </div>
    </section>
    <section class="news">
        <div class="row">
            <div class="col-md-1" style="background-color:  #101010;">a</div>
            <div class="col-md-10" style="background-color:#101010;">
                <div class="news-header">
                    <p>Blog & News</p>
                </div>

                <div class="slider-container" style="margin: auto;">
                    <div class="slider-content">
                        <div class="slider-item">
                        <div class="slider-box">
                                <img class="slider-box-item" src="https://img.freepik.com/premium-photo/view-cooked-prepared-crawfish_23-2150426264.jpg?size=626&ext=jpg" alt="Gambar 1"> <br />
                                Diskon Spesial Khusus Seafood!
                            </div>
                            <div class="slider-box">
                                <img class="slider-box-item" src="https://image.shutterstock.com/image-photo/mushroom-pasta-pappardelle-cream-sauce-260nw-2300009971.jpg" alt="Gambar 2"> <br />
                                Menu Baru: Homemade Pasta Mushroom
                            </div>
                            <div class="slider-box">
                                <img class="slider-box-item" src="https://img.freepik.com/free-photo/thai-food-tom-yum-kung-river-prawn-spicy-soup_1150-35451.jpg?size=626&ext=jpg&ga=GA1.1.1865730493.1699250448&semt=sph" alt="Gambar 3" height="300px" width="200px"> <br />
                                Trip to Asia: Tom Yum
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="slider-box">
                                <img class="slider-box-item" src="https://img.freepik.com/premium-photo/tasty-pizza-with-various-flavored-ingredients-dark_118454-402.jpg?size=626&ext=jpg" alt="Gambar 4" height="300px" width="200px"> <br />
                                A Day in Europe: Italian Pizza with Mushroom & Pepper
                            </div>
                            <div class="slider-box">
                                <img class="slider-box-item" src="https://img.freepik.com/premium-photo/indian-style-meat-dish-mutton-gosht-masala-lamb-rogan-josh-served-bowl-selective-focus_466689-53452.jpg?size=626&ext=jpg" alt="Gambar 5" height="300px" width="200px"> <br />
                                Comeback Menu: Indian-styled Mutton Curry
                            </div>
                            <div class="slider-box">
                                <img class="slider-box-item" src="https://img.freepik.com/free-photo/healthy-salad-transparent-jar_23-2148747469.jpg?size=626&ext=jpg&ga=GA1.1.1865730493.1699250448&semt=sph" alt="Gambar 6" height="300px" width="200px"> <br />
                                Healthy Corner: Salad (How to make one)
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
            <div class="col-md-1" style="background-color: #101010;">a</div>
        </div>
    </section>
    <!--<footer>a</footer>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>