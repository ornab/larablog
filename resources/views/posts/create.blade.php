@extends('main')


@section('title', '| Create Post')


@section('content')

     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             
             <h1>Create New Post</h1>
             <hr>
             
             
             {!!Form::open(array('route' => 'posts.store'))!!}
             
             <div class="form-group"> 
                   
                   {!! Form::label('title', 'Title:')!!}
                   {!! Form::text('title', null, ['class'=> 'form-control'])!!}
                   
                </div>
             <div class="form-group"> 
                   
                   {!! Form::label('body', 'Body:')!!}
                   {!! Form::textarea('body', null, ['class'=> 'form-control', 'rows'=> 4])!!}
                   
                </div>
                
                <div class="form-group"> 
                   
                    {!! Form::submit('Create Post', ['class'=> 'btn btn-success btn-lg btn-block '])!!}
                   
                </div>
             
             {!! Form::close() !!}
             
         </div>
     </div>

@endsection