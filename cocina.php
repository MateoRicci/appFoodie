<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocina</title>
    <link rel="stylesheet" href="./cocina.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <header>
        <h2>Pedidos</h2>
        <figure class="logo">
            <img src="./img/logo-blanco.png" alt="Logo Foodie">
        </figure>
    </header>
    <main>
        <div class="conexion">
            <h3>
                CONECTAR FOODIE
            </h3>
            <div>    
                <a class="button6">ENLAZAR</a>
            </div>
        </div>
        <div class="mesa">
            <h3>MESA 1</h3>
            <div>
                <a class="button6">ENVIAR</a>
                <a class="button6">TRAER</a>
                <a class="button6" id="mesa1">VER PEDIDO</a>
            </div>
        </div>
        <!-- <div class="mesa" id="2">
            <h3>MESA 2</h3>
            <div>
                <a class="button6">ENVIAR</a>
                <a class="button6">TRAER</a>
                <a class="button6">VER PEDIDO</a>
            </div>
        </div>
        <div class="mesa" id="3">
            <h3>MESA 3</h3>
            <div>
                <a class="button6">ENVIAR</a>
                <a class="button6">TRAER</a>
                <a class="button6">VER PEDIDO</a>
            </div>
        </div> -->
    </main>
    <script>
        $(document).ready(function () {
            var myItems;
            var pedido = "";
            $('#mesa1').click(function (e) { 
                e.preventDefault();
                getJSON();
            }); 

            function getJSON() {
                $.getJSON('pedido.json', function(data) {
                    myItems = data;
                    for(var name in myItems) {
                        if(myItems[name] > 0)
                            pedido += name + ' x' + myItems[name] + '\n'
                        
                    }
                    swal({
                        text: pedido
                    })
                    pedido = '';
                });
            }          
        });
    </script>
</body>
</html>