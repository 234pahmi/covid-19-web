<!doctype html>
<html lang="en">
  <head>
    <title>COVID-19</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col"></div> --}}
            <div class="col-md-6">
                <form action="{{url('/')}}" method="get">
                    <div class="input-group mb-3 mt-3">
                        <select class="custom-select form-control select2" name="country">
                        <option value="" holder>Pilih Negara</option>
                        @foreach ($country as $result)
                            <option value="{{$result}}">{{$result}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit"class="btn btn-primary btn-block">Cari Data</button>
                    </div>
                </form>
                <div class="card">
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1584036533827-45bce166ad94?ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" alt="">
                    <div class="card-body">
                        <h4 class="card-title">COVID-19</h4>
                        <p class="card-text">Virus Corona atau COVID-19, menurut situs resmi World Health Organization (WHO), adalah penyakit menular yang disebabkan oleh Coronavirus. Virus ini ditemukan pertama kali di Wuhan, China.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center"><h6>Negara</h6><h4><b>{{ $listData["country"] }}</b></h4></li>
                        <li class="list-group-item text-center text-info"><h6>Terkonfirmasi</h6><h4><b>{{ $listData["confirmed"] }}</b></h4></li>
                    </ul>
                    <div class="card-body">
                        <table class="table table-hover text-center">
                            <tr>
                                <th><h6 class="text-danger">Meninggal</h6></th>
                                <th><h6 class="text-success">Sembuh</h6></th>
                            </tr>
                            <tr>
                                <td><h4 class="text-danger"><b>{{ $listData["deaths"] }}</b></h4></td>
                                <td><h4 class="text-success"><b>{{ $listData["recovered"] }}</b></h4></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <h6>Terakhir Update : <b>{{ $listData["lastUpdate"] }}</b></h6>
                    </div>
                </div>
            </div>
            {{-- <div class="col"></div> --}}
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.select2').select2();
        });
    </script>
  </body>
</html>


