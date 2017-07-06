@extends('main')


@section('title', '| Create Post')

@section('styles')

    {!! Html::style('css/parsley.css') !!}
 
@endsection


@section('content')

     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             
             <h1>Create New Post</h1>
             <hr>
             
             
             {!!Form::open(array('route' => 'posts.store', 'data-parsley-validate'=> ''))!!}
             
             <div class="form-group"> 
                   
                   {!! Form::label('title', 'Title:')!!}
                   {!! Form::text('title', null, ['class'=> 'form-control', 'required'=>''])!!}
                   
                </div>
             <div class="form-group"> 
                   
                   {!! Form::label('body', 'Body:')!!}
                   {!! Form::textarea('body', null, ['class'=> 'form-control', 'rows'=> 4, 'required'=>''])!!}
                   
                </div>
                
                <div class="form-group"> 
                   
                    {!! Form::submit('Create Post', ['class'=> 'btn btn-success btn-lg btn-block '])!!}
                   
                </div>
             
             {!! Form::close() !!}
             
             
             
             @include('includes.form_error')
             
         </div>
     </div>

@endsection


@section('scripts')

   {!! Html::script('js/parsley.min.js') !!}
  
@endsection