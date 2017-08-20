
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
                 Users
    
                </h3>
            </div>

            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
              <thead style="background-color:lightsteelblue">
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>  
              </tr>
              </thead>
            
             
    @foreach ($users as $users)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $users->name }}</td>
        <td>{{ $users->email }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('users.show',$users->id) }}">View</a>
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $users->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
              
          </table>


                </div>
              </div>
            </div>
          </div>




@endsection