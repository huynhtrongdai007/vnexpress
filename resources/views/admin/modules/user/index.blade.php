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
            <th>avatar</th>
            <td>Name</td>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Address</th>
            <td>Active</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
             @php
            $stt = 0;
        @endphp
         @foreach ($data as $item) 
            @php
                $stt++;
            @endphp   
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$stt}}</td>
            
            <td>
             @php
                 $avatar = $item->avatar;
             @endphp 
              @if ($avatar)
              <img height="80" src="{{ asset('uploads/users/'.$avatar)}}" alt="">
              @else
              <img height="80" src="{{ asset('assets/admin/images/no-avatar.png')}}" alt="">
              @endif
            </td>
            <td>{{$item->name}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->gender == 0 ? 'Nam' : 'N???'}}</td>
            <td>{{$item->address}}</td>
            <td>
                
              @if($item->active==1)
              <input type="checkbox" data-url="{{ route('admin.user.untive', ['id'=>$item->id]) }}"  class="status_off " checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
              @else
               <input type="checkbox" data-url="{{ route('admin.user.active', ['id'=>$item->id]) }}" class="status_on" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
              @endif
            
            </td>
            <td>
                <a href="{{ route('admin.user.edit', ['id'=>$item->id]) }}" class="btn btn-info">Edit</a> | 
                <a  data-url="{{ route('admin.user.destroy', ['id'=>$item->id]) }}"  href="" class="action_delete btn btn-danger">Delete</a>
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
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection