<!-- NAV PANEL -->

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

<!-- LEFT PANEL -->

<div class="panel">

    <h3>Servers</h3>

    <?php

    //TODO REQUETES DEPUIS LE COTE LOGIQUE
    ?>

    <div class="create">
        <a href="#">add a server</a>
    </div>

</div>

<style>

    div.panel {

        background: #d35400;
        height: 100%;
        margin-right: auto;
        padding: 10px;
        width: 250px;
        margin-top: 100px;
        position: fixed;
    }

    div.panel h3 {

        margin-top: 10px;
        color: #ffa801;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 5px;

    }

    div.panel div.create {
        position: fixed;
        bottom: 0;
        width: 100%;
        margin-bottom: 0.5%;
        margin-left: auto;
        margin-right: auto;
    }

    div.panel div.create a {

        background-color: greenyellow;
        letter-spacing: 5px;
        text-transform: uppercase;
        text-decoration: none;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 0;

    }

</style>

<br/><br/><br/><br/>
<br/><br/>