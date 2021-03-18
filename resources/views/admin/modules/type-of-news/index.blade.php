@extends('admin.master_layout')
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Responsive Table
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>STT</th>
            <th>Name</th>
            <th>Category</th>
            <td>Active</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
             @php
            $stt = 0;
        @endphp
         @foreach ($type_of_news as $item) 
            @php
                $stt++;
            @endphp   
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->categorys->name}}</td>
            <td>{{$item->active}}</td>
            <td>
                <a href="{{ route('admin.type-of-news.edit', ['id'=>$item->id]) }}" class="btn btn-info">Edit</a> | 
                <a  data-url="{{ route('admin.type-of-news.destroy', ['id'=>$item->id]) }}"  href="" class="action_delete btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {!! $type_of_news->links() !!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection