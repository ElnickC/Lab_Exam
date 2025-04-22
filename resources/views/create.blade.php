<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col col-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h1>Create Task:</h1>
    <form action="{{route('tasks.store')}}" method="post" class="m-0 mt-3">
        @csrf
        <div class="row justify-content-center">
            <div class="col col-12">
                <label for="title"><h4>Title:</h4></label>
                <input type="text" name="title" class="form-control" value="{{old('title')}}">
                @error('title')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col col-12">
                <label for="description"><h4>Description:</h4></label>
                <textarea name="description" id="description" rows="2" class="form-control">{{old('description')}}</textarea>
                @error('description')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col col-6">
                <button type="submit" class="btn btn-secondary w-100"><h5>Add</h5></button>
            </div>
            <div class="col col-6">
                <a href="{{route('tasks.index')}}" class="btn btn-dark w-100"><h5>Cancel</h5></a>
            </div>
        </div>
    </form>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>