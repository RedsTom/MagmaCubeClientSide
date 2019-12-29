<!-- LEFT PANEL -->

<div class="panel">

    <h3>Servers</h3>

    <?php

    //TODO REQUETES DEPUIS LE COTE LOGIQUE
    ?>

    <div class="create">
        <a href="add_server.php">add a server</a>
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
        left: 0;
        right: 0;
    }

    div.panel div.create a {

        background-color: darkgreen;
        color: white;
        font-weight: bold;
        letter-spacing: 5px;
        text-transform: uppercase;
        text-decoration: none;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 0;

    }

</style>