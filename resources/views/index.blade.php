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
                        <h1>Tasks</h1>
    <div class="bg row justify-content-center m-0">
        <div class="col col-8">
            
            <a href="{{route('tasks.create')}}"class="btn btn-dark w-100"><h4>Create Task</h4></a>
        </div>
    </div>

    <div class="bg-main row m-0 mt-5">
        <div class="col col-12" style="height: 500px; overflow:auto;">
            @foreach ($tasks as $row)
                
            
                <div class="bg row mt-5">
                    <div class="col col-12">
                        

                        <div class="row justify-content-between" >
                            <div class="bg-sec col col-5 text-center align-self-center">
                                <h4>Title: {{$row->title}}</h4>
                            </div>

                            <div class="bg-sec col col-5 text-center align-self-center">
                                <h4>Status: {{$row->is_completed?'Completed' : 'Pending'}}</h4>
                            </div>
                        </div>
            
                        <div class="bg-sec row justify-content-center mt-3">
                            <div class="col col-12">
                                <h4>{{$row->description}}</h4>
                            </div>
                        </div>

                        <div class="bg-sec row mt-5">
                            <div class="col col-6">
                                <a href="{{route('tasks.edit', $row->id)}}" class="btn btn-dark w-100"><h5>Edit</h5></a>
                            </div>
                            <div class="col col-6">
                                <form action="{{route('tasks.destroy', $row->id)}}" method="post" class="m-0">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger w-100"><h5>Delete</h5></button>

                                </form>
                            </div>
                        </div>

                        
                        

                    </div>
                </div>
            @endforeach
            


        </div>
    </div>
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