<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade View Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Index View Grade</h1>
    <a href="grade/create" class="btn btn-primary">Tambah Kelas</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Edit | Hapus</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($grades as $no=>$item)
        <tr>
        <td>{{ ++$no }}</td>
        <td>{{ $item->grade }}</td>
        <td>{{ $item->amount  }}</td>
        <td>
    
        <form action="{{ route('grade.destroy', $item->id) }}" onsubmit="return confirm('Apakah Anda Yakin?')" method="POST">
        <a class="btn btn-primary" href="{{ route('grade.edit', $item->id) }}">Edit</a>
         @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>