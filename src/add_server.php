<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MagmaCube - Add Server</title>

    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/add_server.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

</head>
<body>

<?php include 'includes/nav.php';
include 'includes/leftpanel.php';
for ($i = 0; $i < 6; $i++) echo "<br/>" ?>
<?php
$hour = intval(date("H")) + 1;
if (intval($hour) >= 16 || intval($hour) <= 8) {
    echo "<style>body{background-color: darkslategrey;}</style>";
} else {
    echo "<style>body{background-color: antiquewhite;}</style>";
}
?>
<div class="page_with_left">

    <h1 style="margin-left: auto; margin-right: auto; width: 15em; margin-top: 25px; text-transform: uppercase; color: orange">
        Registering new server</h1>

    <form>


        <input type="text" name="name" id="name" required><br/>
        <input type="url" name="url" id="url" required><br/>

        <div class="custom-select" style="width:200px;">
            <select name="Version" id="version" required>
                <option>Choose</option>
                <?php

                //TODO Get versions from buildtools

                ?>
            </select></div>
        <br/>
        <div class="custom-select" style="width:200px;">
            <select name="Type de serveur" id="type" required>
                <option>Choose</option>
                <?php

                $types = array("Bungee", "Spigot", "Paper", "Bukkit", "Poulet");
                foreach ($types as $type) {
                    echo "<option>" . $type . "</option>";
                }

                ?>
            </select></div>
        <br/>

        <input type="submit" value="Save">

    </form>


</div>

<script>

    var x, i, j, selElmnt, a, b, c;
    /* Look for any elements with the class "custom-select": */
    x = document.getElementsByClassName("custom-select");
    for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        /* For each element, create a new DIV that will act as the selected item: */
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < selElmnt.length; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function (e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;
                for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function (e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(element) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
            if (element === y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }

    /* If the user clicks anywhere outside the select box,
    then close all select boxes: */
    document.addEventListener("click", closeAllSelect);
</script>

</body>
</html>