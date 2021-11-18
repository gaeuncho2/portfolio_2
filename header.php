<?php

session_start();
if ( isset($_SESSION["userid"]) ) {
    $userid = $_SESSION["userid"];
} else {
    $userid = "";
}

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    $username = "";
}
?>

    <header id="header" class="row">
            <div class="logo">
                <h1><a href="index.php">A TWOSOME PLACE</a></h1>
            </div>
            <div class="depth">
                <span class="depTit"> Category</span>
                <span><i class="fas fa-caret-down"></i></span>
                <ul class="depth1">
                    <li><a href="javascript:;">Introduce</a></li>
                    <li><a href="javascript:;">Menu</a>
                        <ul class="depth2">
                            <li><a href="javascript:;">Coffee</a></li>
                            <li><a href="javascript:;">Dessert</a></li>
                            <li><a href="javascript:;">Food</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Membership</a></li>
                    <li><a href="javascript:;">Store</a></li>
                    <li><a href="notice.php">What's New</a>
                        <ul class="depth2">
                            <li><a href="notice.php">Notice</a></li>
                            <li><a href="notice.php">News</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="member">
                <ul class="util">

					<?php
						if ( !$userid ){
					?>

					<li><a href="login.php">Login</a></li>
					<li><a href="join.php">Join</a></li>

					<?php
						} else {
							$logged = $username."(".$userid.") 님 ";
					?>
					<li><a href="logout.php">Log out</a></li>
					<li><a href="join_modify.php">Modify</a></li> 

					<?php
						}

					?>

				</ul>	
            </div>
        </header>