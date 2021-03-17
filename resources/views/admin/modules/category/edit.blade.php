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
                  <form action="{{ route('admin.category.update',['id'=>$category->id]) }}" method="POST">
                    @csrf
                    <div class="col-md-4 form-group">
                        <label for="">Name Category</label>
                        <input type="text" required value="{{$category->name}}" name="name" placeholder=".col-md-1" class="form-control">
                    </div>
                 
                    <div class=" form-group">
                        <label for=""></label>
                        <input type="submit" value="Add"  class="btn btn-primary">
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