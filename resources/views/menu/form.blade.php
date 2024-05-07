<!DOCTYPE html>
<html>
<head>
    <title>Form {{ $title }} Pesanan</title>
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-
        zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
        crossorigin="anonymous">
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.
        js" integrity="sha384-
        fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" 
        crossorigin="anonymous"></script>
</head>
<body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%">
        <div class="col-3">
            <h4>Form {{ $title }} Pesanan</h4>
            <form class="border" style="padding:20px" method="POST" action="/menu/{{ $menu->orderName }}/{{ $menu->id }}">
                @csrf
                @method($method)
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="quantity" class="form-control" 
                        value="{{ $menu->quantity }}" />
                </div>
                <div style="text-align:center">
                    <button class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
