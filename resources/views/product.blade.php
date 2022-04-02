<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('dashboard.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Project</label>
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                        <div class="text-danger">
                            {{ $errors->first('name') }}
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Url</label>
                        <input type="text" class="form-control" name="url" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                        <div class="text-danger">
                            {{ $errors->first('url') }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="image" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                        <div class="text-danger">
                            {{ $errors->first('image') }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                        <div class="text-danger">
                            {{ $errors->first('description') }}
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Url</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->url }}</td>
                            <td>
                                <img src="{{ asset('images/'.$item->image) }}" alt="" width="50">
                            </td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <form action="{{ route('dashboard.destroy', $item->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>