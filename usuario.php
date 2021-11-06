<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
    <link rel="stylesheet" href="usuario.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <figure class="logo">
            <img src="./img/logo-blanco.png" alt="logo Foodie">
        </figure>
    </header>
    <main>
        <h3>Infusiones</h3>
        <div class="opciones">    
            <input type="number" id="cafe" min="0" max="10" placeholder="0">
            <label for="cafe" class="name">Cafe</label>
            <label for="cafe" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="cafe-con-leche" min="0" max="10" placeholder="0">
            <label for="cafe-con-leche" class="name">Cafe con leche</label>
            <label for="cafe-con-leche" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="te" min="0" max="10" placeholder="0">
            <label for="te" class="name">Té</label>
            <label for="te" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="mate-cocido" min="0" max="10" placeholder="0">
            <label for="mate-cocido" class="name">Mate cocido</label>
            <label for="mate-cocido" class="price"> $999</label>
        </div>
        <h3>Bebidas sin alcohol</h3>
        <div class="opciones">    
            <input type="number" id="agua" min="0" max="10" placeholder="0">
            <label for="agua" class="name">Agua</label>
            <label for="agua" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="jugo-naranja" min="0" max="10" placeholder="0">
            <label for="jugo-naranja" class="name">Jugo de naranja</label>
            <label for="jugo-naranja" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="coca-cola" min="0" max="10" placeholder="0">
            <label for="coca-cola" class="name">Coca cola</label>
            <label for="coca-cola" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="sprite" min="0" max="10" placeholder="0">
            <label for="sprite" class="name">Sprite</label>
            <label for="sprite" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="fanta" min="0" max="10" placeholder="0">
            <label for="fanta" class="name">Fanta</label>
            <label for="fanta" class="price"> $999</label>
        </div>
        <h3>Bebidas con alcohol</h3>
        <div class="opciones">    
            <input type="number" id="vino-malbec" min="0" max="10" placeholder="0">
            <label for="vino-malbec" class="name">Vino malbec</label>
            <label for="vino-malbec" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="cerveza-corona" min="0" max="10" placeholder="0">
            <label for="cerveza-corona" class="name">Cerveza Corona</label>
            <label for="cerveza-corona" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="champagne" min="0" max="10" placeholder="0">
            <label for="champagne" class="name">Champagne</label>
            <label for="champagne" class="price"> $999</label>
        </div>
        <h3>Comida rapida</h3>
        <div class="opciones">    
            <input type="number" id="hamburguesa" min="0" max="10" placeholder="0">
            <label for="hamburguesa" class="name">Hamburguesa</label>
            <label for="hamburguesa" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="lomito" min="0" max="10" placeholder="0">
            <label for="lomito" class="name">Lomito</label>
            <label for="lomito" class="price"> $999</label>
        </div>
        <div class="opciones">    
            <input type="number" id="pancho" min="0" max="10" placeholder="0">
            <label for="pancho" class="name">Pancho</label>
            <label for="pancho" class="price"> $999</label>
        </div>
        <div class="boton">
            <a class="button6" id="enviar" >ENVIAR</a>
        </div>
    </main>
    <script>
        $(document).ready(function () {
            var pedidos = {
                Cafe: '',
                CafeConLeche: '',
                Te: '',
                MateCocido: '',
                Agua: '',
                JugoDeNaranja: '',
                CocaCola: '',
                Sprite: '',
                Fanta: '',
                VinoMalbec: '',
                CervezaCorona: '',
                Champagne: '',
                Hamburguesa: '',
                Lomito: '',
                Pancho: ''
            }

            $('#enviar').click(function () { 
                pedidos.Cafe = document.getElementById("cafe").value;         
                pedidos.CafeConLeche = document.getElementById("cafe-con-leche").value;
                pedidos.Te = document.getElementById("te").value;
                pedidos.MateCocido = document.getElementById("mate-cocido").value;
                pedidos.Agua = document.getElementById("agua").value;
                pedidos.JugoDeNaranja = document.getElementById("jugo-naranja").value;
                pedidos.CocaCola = document.getElementById("coca-cola").value;
                pedidos.Sprite = document.getElementById("sprite").value;
                pedidos.Fanta = document.getElementById("fanta").value;
                pedidos.VinoMalbec = document.getElementById("vino-malbec").value;
                pedidos.CervezaCorona = document.getElementById("cerveza-corona").value;
                pedidos.Champagne = document.getElementById("champagne").value;
                pedidos.Hamburguesa = document.getElementById("hamburguesa").value;
                pedidos.Lomito = document.getElementById("lomito").value;
                pedidos.Pancho = document.getElementById("pancho").value;

                jsToPhp();
                
            });
            
            function jsToPhp(){
                $.ajax({
                    type: "POST",
                    url: "usuario.php",
                    data: {data: JSON.stringify(pedidos)},
                    dataType: "json",
                    success: function (response) {
                    }
                });

            swal({
            title: "Su pedido fue tomado con exito!",
            icon: "success"
            });
        }
        });
    </script>
    <?php
        $myFile = "pedido.json";
        $fh = fopen($myFile, 'w') or die("can't open file");
        $stringData = $_POST["data"];
        fwrite($fh, $stringData);
        fclose($fh);
    ?>
</body>
</html>