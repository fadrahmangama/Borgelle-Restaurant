<!DOCTYPE html>
<html>

<head>
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-
zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.
js" integrity="sha384-
fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<link href="<?php echo asset('css/tubesWebpro.css')?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo asset('css/aboutUs.css')?>" rel="stylesheet" type="text/css" />
</head>

<body style="width:95%">
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
    <div class="row justify-content-center" style="margin-top:13%">
        <div class="col-4">
            <span class="float-left">{{ session('msg') }}</span>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>User</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
                @foreach($list as $d)
                <tr>
                    <td>{{ $d->orderName }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->price }}</td>
                    <td>{{ $d->quantity }}</td>
                    <td>{{ $d->quantity * $d->price }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>