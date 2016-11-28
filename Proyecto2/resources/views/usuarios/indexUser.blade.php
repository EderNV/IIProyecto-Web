@extends('layouts.app')

@section('content')
       
        
      <div class="container" >
      @include('flash::message')
       <h1>Lista de Usuarios</h1>

       <table class="table table-striped">

       <thead>
         <th>ID</th>
         <th>Nombre</th>
         <th>Correo</th>
         <th>Tipo</th>
         @if($usuario=="admin")
          <th>Acciones</th>
          @endif

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

         @if($usuario=="admin")
         <td>
           <a href="{{route('user.edit' ,$Usuario->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
           <a href="{{route('admin.user.destroy' ,$Usuario->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
           
         </td>
         @endif
</tr>
         @endforeach
       </tbody>
       </table>
      

      
        </div>
@endsection
