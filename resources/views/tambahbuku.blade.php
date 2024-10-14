<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Data</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <div class="container2">
            <h4 class="judul">Tambah Data buku</h4>
            <div class="card">
                <div class="card-header">
                <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('buku') }}'">Kembali</button>
                </div>
                <div class="card-body">
                    <form  method="POST" action="{{url('buku')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="txtnama" class="col-sm-2 col-form-label">Nama Buku</label>
                            <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm @error('txtnama') is-invalid @enderror" id="txtnama" name="txtnama" value="{{ old('txtnama') }}">
                            @error('txtnama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtjenis" class="col-sm-2 col-form-label">Jenis Buku</label>
                            <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm @error('txtjenis') is-invalid @enderror" id="txtjenis" name="txtjenis" value="{{ old('txtjenis') }}">
                            @error('txtjenis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtpenerbit" class="col-sm-2 col-form-label">Penerbit Buku</label>
                            <div class="col-sm-6">
                            <input type="text" name="txtpenerbit" id="txtpenerbit" class="form-control form-control-sm @error('txtpenerbit') is-invalid @enderror" value="{{ old('txtpenerbit') }}">
                            @error('txtpenerbit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txttahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
                            <div class="col-sm-6">
                            <input type="number" name="txttahun" id="txttahun" class="form-control form-control-sm @error('txttahun') is-invalid @enderror" value="{{ old('txttahun') }}">
                            @error('txttahun')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-6">
                            <button type="submit" class="btn btn-sm btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>