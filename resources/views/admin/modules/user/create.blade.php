@extends('admin.master_layout')
@section('title','Tạo User')
@section('content')
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New User</h2>
               <div class="block copyblock"> 
                @php
                     $message = Session::get('message');  
                @endphp
                @if (isset($message))
                    <div style="color:lightgreen">{{$message}}</div>               
                @endif
                 <form action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="{{old('name')}}" name="name" placeholder="Enter Name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" value="{{old('password')}}" name="password" placeholder="Enter Password.." class="medium">
                            </td>
                        </tr>
                      
                        <tr>
                            <td>
                                <input type="text" value="{{old('phone')}}" name="phone" placeholder="Enter Phone.." class="medium">
                            </td>
                            <td><input type="date" value="{{'birthday'}}" name="birthday" class="medium"></td>
                        </tr>
    
                        <tr>
                            
                            <td><input type="text" name="username" placeholder="Enter Username.." class="medium">                            
                            </td>
                            <td>
                                <select class="medium"  name="gender">
                                    <option value="">Chọn giới tính</option>
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" value="{{old('email')}}" name="email" placeholder="Enter Email.." class="medium">
                            </td>
                            <td>
                                <input type="file" name="avatar">
                            </td>
                          
                        </tr>
                        <tr>
                            <td><textarea name="address" placeholder="Enter Address" class="medium" cols="30" rows="10"></textarea></td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@endsection
