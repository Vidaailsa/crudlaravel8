<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-primary">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Vida</span>
      </div>
    </nav>
    <div>
        <div class="container">
            <div class="card border-dark mb-3">
                @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Berhasil!</strong> {{ session('msg') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card-header border-dark mb-3">
                    <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('buku/add') }}'">Add Data</button>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Jenis Buku</th>
                            <th>Penerbit Buku</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($databuku as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->jenis }}</td>
                            <td>{{ $row->penerbit }}</td>
                            <td>{{ $row->tahun }}</td>
                            <td>
                                <button onclick="window.location='{{ url('buku/'.$row->id) }}'" type="button" class="btn btn-sm btn-info" title="Edit Data">Edit</button>
                                <form onsubmit="return hapus('{{ $row->nama }}')" style="display: inline" action="{{ url('buku/'.$row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                  Delete
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
              </div>
        </div>
    </div>
    <footer>
      <p>2024</p>
    </footer>
    <script>
        function hapus(params) {
          pesan = confirm('yakin Anda ingin menghapus data ini?');
          if(pesan) return true;
          else return false;
        }
        
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>