<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>pojet decouverte SQL Ajax</title>
</head>
<body>
    <form action="">
    <input type="button" value='bouton1' onclick='bouton1()';>
    <input type="button" value='bouton2' onclick='bouton2()';>
    <input type="button" value='bouton3' onclick='bouton3()';>
    <input type="button" value='bouton4' onclick='bouton4()';>
    <input type="button" value='bouton5' onclick='bouton5()';>
    <input type="button" value='bouton6' onclick='bouton6()';>
    <input type="button" value='bouton7' onclick='bouton7()';>
    <input type="button" value='bouton8' onclick='bouton8()';>
    <br><br>
    </form>
    <div id='reponse'>

    </div>

    

    <script>
        function bouton1 (){
            var reponse = new XMLHttpRequest();
            reponse.open("GET", "cible.php");
            reponse.onreadystatechange = function() {
                // condition de connection
                if (this.readyState == 4 && this.status == 200) {
                    // si le travail et que le statut renvoie ok
                    document.getElementById("reponse").innerHTML =
                    this.responseText;
                }
            };
            reponse.send();
        }

        function bouton2 (){
            var reponse = new XMLHttpRequest();
            reponse.open("GET", "cible2.php");
            reponse.onreadystatechange = function() {
                // condition de connection
                if (this.readyState == 4 && this.status == 200) {
                    // si le travail et que le statut renvoie ok
                    document.getElementById("reponse").innerHTML =
                    this.responseText;
                }
            };
            reponse.send();
        }

        function bouton3 (){
            var reponse = new XMLHttpRequest();
            reponse.open("GET", "cible3.php");
            reponse.onreadystatechange = function() {
                // condition de connection
                if (this.readyState == 4 && this.status == 200) {
                    // si le travail et que le statut renvoie ok
                    document.getElementById("reponse").innerHTML =
                    this.responseText;
                }
            };
            reponse.send();
        }

        function bouton4 (){
            var reponse = new XMLHttpRequest();
            reponse.open("GET", "cible4.php");
            reponse.onreadystatechange = function() {
                // condition de connection
                if (this.readyState == 4 && this.status == 200) {
                    // si le travail et que le statut renvoie ok
                    document.getElementById("reponse").innerHTML =
                    this.responseText;
                }
            };
            reponse.send();
        }
        function bouton5 (){
            var reponse = new XMLHttpRequest();
            reponse.open("GET", "cible5.php");
            reponse.onreadystatechange = function() {
                // condition de connection
                if (this.readyState == 4 && this.status == 200) {
                    // si le travail et que le statut renvoie ok
                    document.getElementById("reponse").innerHTML =
                    this.responseText;
                }
            };
            reponse.send();
        }

        function bouton6 (){
            var reponse = new XMLHttpRequest();
            reponse.open("GET", "cible6.php");
            reponse.onreadystatechange = function() {
                // condition de connection
                if (this.readyState == 4 && this.status == 200) {
                    // si le travail et que le statut renvoie ok
                    document.getElementById("reponse").innerHTML =
                    this.responseText;
                }
            };
            reponse.send();
        }
        function bouton7 (){
            var reponse = new XMLHttpRequest();
            reponse.open("GET", "cible7.php");
            reponse.onreadystatechange = function() {
                // condition de connection
                if (this.readyState == 4 && this.status == 200) {
                    // si le travail et que le statut renvoie ok
                    document.getElementById("reponse").innerHTML =
                    this.responseText;
                }
            };
            reponse.send();
        }
        function bouton8 (){
            var reponse = new XMLHttpRequest();
            reponse.open("GET", "cible8.php");
            reponse.onreadystatechange = function() {
                // condition de connection
                if (this.readyState == 4 && this.status == 200) {
                    // si le travail et que le statut renvoie ok
                    document.getElementById("reponse").innerHTML =
                    this.responseText;
                }
            };
            reponse.send();
        }
    </script>
</body>
</html>