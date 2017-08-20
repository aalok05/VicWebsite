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
                 <h2> Users</h2>
    
                </h3>
            </div>

            </div>
          </div>

    

    <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $users->name }}
            </div>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $users->email }}
            </div>
        </div>
        

    </div>



@endsection