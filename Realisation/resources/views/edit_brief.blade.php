<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/student.css">
    <link rel="icon" href="/icon.webp">
    <script src="https://kit.fontawesome.com/8b497b2419.js" crossorigin="anonymous"></script>
    <title>Edit Brief</title>
</head>
<body>

    
    <ul class="menu-bar">
        <li><a href="{{url('/')}}">Promotions</a></li>
        
        
        <li><a href="{{URL('briefs_index')}}    ">Briefs</a></li>
    </ul>
    <div class="container text-center border border-2 rounded">
        <br><h1 >Brief edit </h1><br><br>
        <table class="table">
            @foreach($data as $row)
            <form action="{{url("Brief")}}/{{$row->id}}/{{("update")}}" method="POST">
            @csrf
            <thead>
                <tr>
                    <th scope="col">Brief Name: </th>
                    <th scope="col"><input type="text" value="{{$row->brief_name}}" name="brief_name"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Creation date: </th>
                    <td><input type="date" value="{{$row->creation_date}}" name="creation_date"><br></td>
                    
                </tr>
                <tr>
                    <th scope="row">Delivery date: </th>
                    <td><input type="date" value="{{$row->livration_date}}" name="livration_date"><br></td>
                    
                </tr>
                
            </tbody>
            @endforeach
        </table>
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Update Brief</button>
            </form>
    </div>
    
    <table class="table table-primary table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Task Name </th>
                <th scope="col">Starting Date </th>
                <th scope="col">Finishing Date </th>
                <th scope="col">Description </th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($taskData as $entry)
            <tr>
                <td>{{$entry->task_name}}</td>
                <td>{{$entry->start_date}}</td>
                <td>{{$entry->finish_date}}</td>
                <td>{{$entry->description}}</td>
                <td>
                    <a href="{{url("task")}}/{{$entry->id}}/{{"edit"}}">
                        <button id="btn-edit">
                            <span><i class="fa-solid fa-pen-to-square"></i>Edit</span>
                        </button></a>
                    <a href="{{url("task")}}/{{$entry->id}}/{{"delete"}}">
                        <button id="btn-delete">
                            <span><i class="fa-regular fa-trash-can" id="mdi-delete-empty"></i>Delete</span>
                        </button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>