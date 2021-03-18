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
                        <label for="">Title</label>
                        <input type="text" required value="{{old('title')}}" name="title" placeholder=".col-md-1" class="form-control">
                    </div>
                  
                 
                    <div class="col-md-4 form-group">
                        <label for=""></label>
                        <select name="hot_new" class="form-control">
                            <option value="1">Hot</option>
                            <option value="0">No</option>
                        </select>
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
                    <div class="col-md-4 form-group">
                        <select name="id_type_of_news" class="form-control">
                            <option value="">Select Type Of News</option>
                            @foreach ($type_of_news as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                 
                    <div class="col-md-4 form-group">
                        <input required type="file" value="{{old('avatar')}}" name="avatar" class="form-control">
                    </div>

                   
                <div class="col-md-12 form-group">
                        <label for="">Description</label>
                        <textarea required name="description" rows="10" placeholder="Description" class="form-control tinymce_editor_init"></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="">Content</label>
                        <textarea required name="content" rows="30" placeholder="Content" class="form-control tinymce_editor_init"></textarea>
                    </div>
                   
                    <div class="col-md-4 form-group lm-auto">
                        <label for=""></label>
                        <input type="submit" value="Add"  class="btn btn-primary form-control ">
                    </div> 
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
</div>

@endsection