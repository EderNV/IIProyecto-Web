


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
        <link rel="stylesheet"  href="{{ URL::asset('boostrap/css/bootstrap.css') }}">

        <title>Create User</title>

        <!-- Fonts -->
        
    </head>
    <body>
       
        
      <div class="container" >
       <h1>Datos</h1>

      <a href="create" class="btn btn-info">Registrar</a>
       <table class="table table-striped">

       <thead>
         <th>ID</th>
         <th>Nombre</th>
         <th>Correo</th>
         <th>Tipo</th>

       </thead>
       <tbody>
         @foreach($Usuario as $Usuario)
         <tr>
         <td>{{$Usuario->id}}</td>
         <td>{{$Usuario->name}}</td>
         <td>{{$Usuario->email}}</td>
         <td>
            @if($Usuario->type=="admin")
              <span class="label label-danger">{{$Usuario->type}}</span>
            @else
            <span class="label label-primary">{{$Usuario->type}}</span>
            @endif
         </td>

         <td>
           <a href="{{route(admin.user.destroy),$Usuario->id}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
         </td>
</tr>
         @endforeach

       </tbody>

         
       </table>
      
      
        </div>
     
        
    </body>
</html>
