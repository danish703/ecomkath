@extends('admin.layout.admin')
 @section('content')
    <h3>Add Category</h3>
    {!! Form::open(['route'=>'product.store','method'=>'post','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',null,['class'=>'form-control'])}} 
        </div>
        @csrf
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description',null,['class'=>'form-control'])}} 
        </div>
        
        <div class="form-group">
            {{Form::label('size','Size')}}
            {{Form::Select('size',['small'=>'Small','medium'=>'Medium','large'=>'Large'],null,['class'=>'form-control'])}} 
        </div>
        <div class="form-group">
            {{Form::label('image','Image')}}
            {{Form::File('image',null,['class'=>'form-control'])}} 
        </div>
        <div class="form-group">
            {{Form::label('Category','category')}}
            {{Form::Select('category_id',$categories,null,['class'=>'form-control'])}} 
        </div>


        <div class="form-group">
            {{Form::Submit('Submit',['class'=>'btn btn-success'])}}
        </div>
    {!! Form::close() !!}
 @endsection

