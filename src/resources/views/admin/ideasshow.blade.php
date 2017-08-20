@extends('layouts.adminmaster')
 
@section('content')
<br>
<br>
<br>

      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                 <h2> View Ideas</h2>
    
                </h3>
            </div>

            </div>
          </div>

    

@foreach($users as $users)
@if($users->id == $ideas->user_id)
    <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $users->name }}
            </div>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>College:</strong>
                {{ $ideas->college }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $ideas->title }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $ideas->body }}
            </div>
        </div>

    </div>
@endif
@endforeach

@endsection