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
                  <form action="{{ route('admin.type-of-news.store') }}" method="POST">
                    @csrf
                    <div class="col-md-4 form-group">
                        <label for="">Name Category</label>
                        <input type="text" required value="{{old('name')}}" name="name" placeholder=".col-md-1" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for=""></label>
                        <select name="id_cat" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categorys as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>       
                            @endforeach
                        </select>
                    </div> 
                </div>
                    <label for=""></label>
                    <input  type="submit" value="Add"  class="btn btn-primary">
            </form>
                @php
                $message = Session::get('message');  
                @endphp
                @if (isset($message))
                    <div class="alert alert-success">{{$message}}</div>               
                @endif
            </div>
        
        </div>

    </div>
</div>

@endsection