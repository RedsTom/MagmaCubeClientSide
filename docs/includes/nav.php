<!-- NAV PANEL -->

<?php

$hour = intval(date("H")) + 1;
if (intval($hour) >= 16 || intval($hour) <= 8) {
    echo "<style>body{background-color: darkslategrey;}</style>";
} else {
    echo "<style>body{background-color: antiquewhite;}</style>";
}

?>
<nav>

    <div class="logo">
        <h4><a href="index.php">MagmaCube</a></h4>
    </div>

    <ul class="nav-links">
        <li>
            <a href="index.php">Management</a>
        </li>
        <li>
            <a href="settings.php">Settings</a>
        </li>
        <li>
            <a href="account.php">Account</a>
        </li>
    </ul>


</nav>

<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {

        display: flex;
        justify-content: space-around;
        align-items: center;
        min-width: 100%;
        height: 100px;
        background-color: #83300c;
        font-family: 'Poppins', sans-serif;
        position: fixed;

    }

    .logo h4 a {

        color: #faa97d;
        text-transform: uppercase;
        letter-spacing: 5px;
        text-decoration: none;
        /*background-color: rgb(44, 62, 80);*/

    }

    .nav-links {
        display: flex;
        justify-content: space-around;
        width: 30%;
    }

    .nav-links li {
        list-style: none;
        margin: 10px;
    }

    .nav-links li a {

        padding: 15px;
        border-radius: 5px;
        background: #ffa300;
        transition: 300ms;
    }

    .nav-links li a:hover {

        background: #cc8200;
        transition: 300ms;
        cursor: pointer;
        border: black;
        border-bottom: gray;

    }

    .nav-links a {
        color: white;
        text-decoration: none;
        letter-spacing: 3px;
        font-weight: bold;
        font-size: 14px;
        text-transform: uppercase;
    }


</style>