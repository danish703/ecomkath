@extends('admin.layout.admin')
 @section('content')
<h3>Category List</h3>
 <table class="table">
   <thead>
       <th>Title</th>
       <th>Action</th>
   </thead>
    <tbody>
        @foreach($products as $ca)
            <tr>
                <td>{{$ca->name}}</td>
                <td>Edit | Delete </td>
            </tr>
        @endforeach
    </tbody>
 </table>
 
 @endsection

