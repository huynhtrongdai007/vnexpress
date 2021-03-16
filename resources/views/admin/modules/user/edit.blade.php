@extends('admin.master_layout')
@section('title','Tạo User')
@section('content')
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Chỉnh Sửa User</h2>
               <div class="block copyblock"> 
                @php
                     $message = Session::get('message');  
                @endphp
                @if (isset($message))
                    <div style="color:lightgreen">{{$message}}</div>               
                @endif
                 <form action="{{route('admin.user.update',['id'=>$data->id])}}" method="POST">
                     @csrf
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="{{$data->name}}" name="name" placeholder="Enter Name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" value="{{$data->password}}" name="password" placeholder="Enter Password.." class="medium">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" value="{{$data->phone}}" name="phone" placeholder="Enter Phone.." class="medium">
                            </td>
                            <td><input type="date" value="{{$data->birthday}}" name="birthday" class="medium"></td>
                        </tr>
                        <tr>
                            <td><input type="text" value="{{$data->username}}" name="username" placeholder="Enter Username.." class="medium">                            
                            </td>
                            <td>
                                <select class="medium"  name="gender">
                                    <option value="">Chọn giới tính</option>

                                    <option value="0" {{$data->gender == 0 ? 'selected' : ''}}>Nam</option>
                                    <option  value="1" {{$data->gender == 1 ? 'selected' : ''}}>Nữ</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" value="{{$data->email}}" name="email" placeholder="Enter Email.." class="medium">
                            </td>
                          
                        </tr>
                        <tr>
                            <td><textarea name="address" placeholder="Enter Address" class="medium" cols="30" rows="10">
                                {{$data->address}}    
                            </textarea></td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@endsection
