@extends('layouts.master')

@section('content')
     <div class="container-fluid my-3">
          @if(session('success'))
               <div class="alert alert-success" role="alert">
                    {{ session('success') }}
               </div>
          @endif
          <table class="table table-bordered table-hover table-responsive-md">
               <thead class="thead-dark">
                    <tr align="center">
                         <th>Id</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>Address</th>
                         <th>Edit</th>
                         <th>Delete</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach($records as $record)
                         <tr align="center">
                              <td>{{ $record->id }}</td>
                              <td>{{ $record->name }}</td>
                              <td>{{ $record->email }}</td>
                              <td>{{ $record->phone }}</td>
                              <td>{{ $record->address }}</td>
                              <td>
                                   <a href="{{ url("edit/$record->id") }}" class="text-success"><i class="fas fa-edit"></i></a> 
                              </td>
                              <td>
                                   <a href="{{ url("delete/$record->id") }}" class="text-danger" onclick="return confirm('Are You Sure To Delete')"><i class="fas fa-trash-alt"></i></a>
                              </td>
                         </tr>
                    @endforeach
               </tbody>
          </table>

          {{ $records->links() }}

     </div>
@endsection