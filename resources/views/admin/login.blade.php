<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/stylelogin.css')}}" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="{{ route('admin.progressLogin') }}" method="post">
            @csrf
			<h1>Admin Login</h1>
			<div>
				<input type="text" name="email" placeholder="Username" required="" name="username"/>
                @error('email')
                <span style="color:red">{{$message}}</span>
              @enderror
            </div>
			<div>
				<input type="password" name="password" placeholder="Password" required="" name="password"/>
                @error('email')
                <span style="color:red">{{$message}}</span>
              @enderror
            </div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
        <?php
        $message = Session::get('message');
        if($message)
         {
           echo"<div style='color:red;'>$message</div>";
           Session::put('message',null);
         }
      ?>
	</section><!-- content -->
</div><!-- container -->
</body>
</html>