<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Nilai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div style="height: 15px;"></div>
            <form action="/guru/cari" method="GET">
                <div class="row">
                    <strong>Pencarian : </strong>
                    <div style="width: 10px;"></div>
                    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Guru" value="{{ old('nama') }}" class="input-group-text">
                    <div style="width: 10px;"></div>
                    <input type="submit" value="cari" class="btn btn-primary">
                    <div style="width: 10px;"></div>
                    <a href="/guru/create" class="btn btn-primary">Tambah</a>
                </div>
            </form>
            <br>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama Guru</th>
                    <th>Mengajar</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $key => $dt)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $dt->nama }}</td>
                    <td>{{ $dt->mengajar }}</td>
                    <td>
                        <a href="/guru/edit/{{ $dt->id }}" class="btn btn-info">Update</a>
                        <a href="/guru/delete/{{ $dt->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</body>

</html>