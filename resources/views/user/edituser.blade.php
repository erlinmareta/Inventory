@extends('template')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row"></div>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit User</h4>
                  <p class="card-description">
                Form edit user</p>
                @foreach($user as $s)
                <form action="/user/update" method="post">
                    {{ csrf_field() }}
                  <form class="forms-sample">
                    <div class="form-group">
                    <input type="hidden" name="id" value="{{ $s->id }}">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $s->name }}" required="required">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $s->email }}" required="required">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ $s->password }}" required="required">
                    </div>
                  
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  @endforeach
                </div>
              </div></div>
            </div>
            @endsection