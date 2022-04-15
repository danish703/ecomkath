@extends('admin.layout.admin')
 @section('content')
    <h3>Add Category</h3>
    {!! Form::open(['route'=>'category.store','method'=>'post']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',null,['class'=>'form-control'])}} 
        </div>
        @csrf
        <div class="form-group">
            {{Form::Submit('Submit',['class'=>'btn btn-success'])}}
        </div>
    {!! Form::close() !!}
 @endsection

