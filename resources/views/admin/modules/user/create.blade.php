@extends('admin.master_layout')
@section('title','Them User')
@section('content')
    
<div class="row">
    <div class="col-md-12">

        <div data-collapsed="0" class="panel">

            <div class="panel-heading">
                <div class="panel-title">
                    Them User
                </div>
            </div>

            <div class="panel-body">

                <div class="row">

                  <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-4 form-group">
                        <label for="">Name</label>
                        <input type="text" value="{{old('name')}}" name="name" placeholder=".col-md-1" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Username</label>
                        <input type="text" value="{{old('username')}}" name="username" placeholder=".col-md-1" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Password</label>
                        <input type="password" {{old('password')}} name="password" placeholder=".col-md-1" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Email</label>
                        <input type="email" {{old('email')}} name="email" placeholder=".col-md-1" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Phone</label>
                        <input type="number" {{old('phone')}} name="phone" placeholder=".col-md-1" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Gender</label>
                        <select class="form-control"  name="gender" id="">
                            <option>Select Gender</option>
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                        </select>
                    </div>
                 
                    <div class="col-md-4 form-group">
                        <label for="">Birthday</label>
                        <input type="date" value="{{old('birthday')}}" name="birthday" placeholder=".col-md-1" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Address</label>
                        <textarea class="form-control" name="address"></textarea>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="">Avatar</label>
                        <input type="file" value="{{old('avatar')}}" name="avatar" class="form-control">
                    </div>

                    <div class="col-md-4 form-group lm-auto">
                        <label for=""></label>
                        <input type="submit" value="Add"  class="btn btn-primary form-control ">
                    </div> 
                @php
                    $message = Session::get('message');  
                @endphp
                @if (isset($message))
                    <div class="alert alert-success">{{$message}}</div>               
                @endif
                  </form>
                </div>

            </div>

        </div>

    </div>
</div>

@endsection