@extends('admin.master_layout')
@section('content')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Category List</h2>
        <div class="block">        
            <table class="data display datatable" id="example">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Họ Tên</th>
                    <th>Username</th>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>Giới Tính</td>
                    <td>Ngày Sinh</td>
                    <td>Active</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr class="odd gradeX">
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->gender == 0 ? 'Nam' : 'Nữ'}}</td>
                    <td>{{$item->birthday}}</td>
                    <td>{{$item->active}}</td>
                    <td><a href="{{ route('admin.user.edit', ['id'=>$item->id]) }}">Edit</a> || 
                        <a class="action_delete" data-url="{{ route('admin.user.destroy', ['id'=>$item->id]) }}" href="">Delete</a></td>
                </tr>
               
                @endforeach
               
            </tbody>
        </table>
       </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
setupLeftMenu();

$('.datatable').dataTable();
setSidebarHeight();
});


</script>
@endsection