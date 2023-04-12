<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Reservasi</title>
  </head>
  <body>
    <center>
        <div class="container bg-secondary">
            <form method="POST" action="{{url('view-reservasi')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Bengkel</label>
                    <select class="form-control" name="bengkel" id="exampleFormControlSelect1">
                        @foreach ($store as $s)
                            <option value="{{$s->id}}">{{$s->store_name}}</option>
                        @endforeach
                    </select>

                    <label for="tgl">Tanggal Reservasi:</label>
                    <input type="date" class="form-control" id="tgl" name="tgl">

                    <label for="waktu">Waktu Datang:</label>
                    <input type="time" class="form-control" id="waktu" name="waktu">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>