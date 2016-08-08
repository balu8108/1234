
<div id="container">
        <div id="mid_right">
        	<div id="loginForm">
        	  <span class="loginForm" style="font-family:Gabriola;margin-left: 23%;font-size:50px;">Login</span>
        	  <form action="functions.php" method="POST">
            <span class="loginForm" style="font-family: Gabriola;margin-right: 2%;margin-left: 3%">Email:</span>
        		<input type="text" name="loginEmail" placeholder="Email" id="loginEmail" class="loginForm">
            <span style="color:red;font-family:Gabriola;font-size:30px;" id="incorrectEmail" ></span><br>


            <span class="loginForm" style="font-family: Gabriola">Password:</span>
        		<input type="text" name="loginPassword" placeholder="Password" id="loginPassword" class="loginForm" >
            <span style="color:red;font-family:Gabriola;font-size;20px;display:none" id="incorrectPass">Incorrect Password</span><br>
        		<input type="submit" name="loginSubmit" id="loginSubmit" value="Login" class="loginForm">
        	    </form>
        	</div>
        </div>
