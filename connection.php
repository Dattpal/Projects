<?php
	$dbhost = "localhost";
	$dbroot = "root";
	$dbpass = "";
	$db     = "dacars";

	$conn = new mysqli ($dbhost,$dbroot,$dbpass,$db);

	//chweck connection

	if ($conn->connect_error){
		echo "connection was faild";
	}
	else{
		echo "";
	}


?>


<!--<div class="flex-center position-ref full-height">
            @if(Route::has('login'))
                <div class="top-right links">
                    @if(Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                     @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
     </div>