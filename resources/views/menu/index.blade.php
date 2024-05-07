<!DOCTYPE html>
<html>
	<head> 
        @extends('template') @section('title','Daftar Pesanan')
        <title>Daftar Menu</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-
zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
		<script src="{{ asset('assets/jquery.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.
js" integrity="sha384-
fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="<?php echo asset('css/menu.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset('css/cssoman.css')?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Caveat">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather+Sans">

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
    <section class="menu">
        <div class="container">
            <div class="judul mt-5 d-flex justify-content-center">
                <h1 class="ourmenu">Our Menu</h1>
            </div>
            <div class="d-flex justify-content-center">
                <h1 class="sub-judul">FOOD</h1>
            </div>
                <div class="row">
                <input type="hidden" name="_method" value="{{ $method }}" />
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Egg and Cheese Muffin' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:45000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="{{ URL::to('/img/mam1.png') }}" class="img-fluid"/>
                    <p>Egg and Cheese Muffin</p>
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Beef and Cheese Burger' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:65000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/free-photo/tasty-burger-isolated-white-background-fresh-hamburger-fastfood-with-beef-cheese_90220-1063.jpg?w=826&t=st=1699429642~exp=1699430242~hmac=c00f9e719886ddb8ce96c76e0c3f1477aa4d959740331ed9453b9fbdfadc3266" class="img-fluid" class="img-fluid"/>
                    <p>Beef and Cheese Burger</p>
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Hawaiian Pizza' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:70000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/free-photo/hawaiian-pizza_1203-2455.jpg?w=900&t=st=1699429690~exp=1699430290~hmac=c7994b3ffa571fe0a80ef1183a1aafb073d8a5a31607334ec79fc049c13a23de" class="img-fluid">
                    <p>Hawaiian Pizza</p>
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Chick n Chips' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:55000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/free-photo/fried-chicken-french-fries-white-plate_74190-4869.jpg?w=900&t=st=1699429703~exp=1699430303~hmac=ead267a417d39588f9bdd21dffca351deb52f5bd19ac3edc9a3db33147770d15" class="img-fluid">
                    <p>Chick n' Chips</p>
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Spaghetti' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:40000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/free-photo/comida-lifestyle-spaghetti-foodie-gastronomy_1350-47.jpg?w=900&t=st=1699429776~exp=1699430376~hmac=c51e97deda06afa066cdbc8828fb0920371de259c12caae32b41189245e398ba" class="img-fluid">
                    <p>Spaghetti</p>
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Chicken with Rice & Chips' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:35000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/premium-photo/rice-beans-french-fries-beef-steak_432566-1078.jpg?w=900" class="img-fluid">
                    <p>Chicken with Rice & Chips</p>
                    </form>
                </div>
                </form>
            </div>
            <div class="d-flex justify-content-center">
                <h1 class="sub-judul">DRINK</h1>
            </div>
            <div class="row">
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Iced Tea' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:15000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/free-photo/ice-falling-brown-drink_1194-1074.jpg?w=740&t=st=1699429869~exp=1699430469~hmac=7ea8b85d00069e73153e76bd48fb3f8bea2be1967a3ca8e3ef36d2ba4a0d6670" class="img-fluid">
                    <p>Iced Tea</p>
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Fresh Lemonade' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:15000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/free-photo/delicious-iced-tea_144627-27240.jpg?w=740&t=st=1699429871~exp=1699430471~hmac=5874575dc50e14f483ffe3dde7b87a718d7a7822db8efc107f3308b96db2deba" class="img-fluid">
                    <p>Fresh Lemonade</p>
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Fuzzy Cola' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:25000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/free-photo/fresh-cola-drink-glass_144627-16201.jpg?w=740&t=st=1699429875~exp=1699430475~hmac=c51e35b161b8beecfb6764b16d98404006f9d2acb0223bac942df68d90af03c7" class="img-fluid">
                    <p>Fuzzy Cola</p>
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Breezing Choco-Coffee' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:35000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/free-photo/cold-coffee_144627-22091.jpg?w=740&t=st=1699429948~exp=1699430548~hmac=48664685c4752b996151b6e65ab129ca2237b541a20cf5ae2e9d114b7b336d27" class="img-fluid">
                    <p>Breezing Choco-Coffee</p>
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Cold Latte' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:30000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/free-photo/cold-coffee_144627-22086.jpg?w=740&t=st=1699430022~exp=1699430622~hmac=3d12546e7b6d2295babe5dbfbc359a40cf51465c308d75fdbdb7e2a634f560c8" class="img-fluid">
                    <p>Cold Latte</p>
                    </form>
                </div>
                <div class="col-3 col-md-3 d-flex align-items-center flex-column">
                    <form style="padding:=10px" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ isset($data)?$data->name:'Citrus Cocktail' }}" />
                    <input type="hidden" name="price" value="{{ isset($data)?$data->price:60000 }}" />
                    <input type="hidden" name="quantity" value="{{ isset($data)?$data->quantity:1 }}" />
                    <input type="image" name="submit" value="1" type="submit"
                    src="https://img.freepik.com/free-photo/fresh-citrus-cocktail_144627-14637.jpg?w=740&t=st=1699430088~exp=1699430688~hmac=78e78526f93eb9304071c540b80aaeee3d2416ea6acbaa50160941342f4eda7e" class="img-fluid">
                    <p>Citrus Cocktail</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="row justify-content-center" style="margin-top:13%">
			<div class="col-4"> @section('content') <div class="col-4">
                <span class="float-left">{{ session('msg') }}</span>
                <a href="/menu/create" class="btn btn-secondary float-right">Tambah</a>
                <br />
                <br />
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Aksi</th>
                        </tr> @foreach(Auth::user()->orders as $menu) <tr>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->price }}</td>
                        <td>{{ $menu->quantity }}</td>
                        <td>{{ $menu->quantity * $menu->price }}</td>
                        <td>
                            <a href="/menu/{{ $menu->orderName }}/{{ $menu->id }}/edit" class="btn btn-primary">Edit</a>
                            <form method="post" action="/menu/{{ $menu->id }}" onsubmit="return confirm('Yakin hapus?')" style="display:inline"> @csrf @method('DELETE') <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr> @endforeach
                </table>
            </div> @endsection </div>
		</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
		
	</body>
</html>