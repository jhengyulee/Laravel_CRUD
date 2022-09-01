<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- blade語法 --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">  
    
</head>
<body>


    <div class="container">
        <h2>Final Exam Score</h2>
        <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
        <button type="button" class="btn btn-success mb-3" onclick="location.href=`{{route('students.create')}}`">Add</button>
        {{-- <a href="{{route('students.create')}}" class="btn btn-success">add</a> --}}
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Chinese</th>
              <th>English</th>
              <th>Math</th>
              <th>Edit/Delete</th>
            </tr>
          </thead>
          <tbody>
         
          @foreach ($data as $student) 

           <tr>
             <td>{{$student->id}}</td>
             <td>{{$student->name}}</td>
             <td>{{$student->chinese}}</td>
             <td>{{$student->english}}</td>
             <td>{{$student->math}}</td>
             <td><button type="button" class="btn btn-warning" onclick="location.href=`{{route('students.edit',['student'=>$student->id])}}`">Edit</button></td>
             <td><button type="button" class="btn btn-danger" onclick="location.href=`{{route('students.destroy',['student'=>$student->id])}}`">Delete</button></td>
           </tr>
          
          @endforeach
         
          </tbody>
        </table>
      </div>
</body>
</html>