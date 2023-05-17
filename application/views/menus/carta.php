<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCysQc1fy9gizdUrRdWqUEi713ZjW5B4Nw&libraries=places&callback=initMap">
    </script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 py-4">
                <article style=" background: #F7AE1B; border-radius: 22px;  width: 100%; padding: 40px;">
                    <h1 Align="center">MISIÓN</h1>
                    <p>Superar las expectativas de nuestros clientes de forma tal que nuestro nombre sea conocido como una experiencia memorable. <br> </p>
                    <p>Ser opción destacable y diferente. <br></p>
                    <p>Mantener una excelente calidad en nuestros platos.</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 py-4 ">
                <img src="<?php echo base_url() ?>/assets/images/terr.png" alt="" width="100%">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 py-4">
                <article style=" background: #F7AE1B; border-radius: 22px;  width: 100%; padding: 40px;">
                    <h1 Align="center">VISIÓN</h1>
                    <p>Ser reconocidos entre los mejores restaurantes a nivel local y nacional por nuestra oferta gastronómica, ambiente y atención. <br> </p>
                    <p> <br></p>
                    <p></p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 py-4 ">
                <img src="<?php echo base_url() ?>/assets/images/terr1.png" alt="" width="100%">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12" Align="center">
                <h1>¡ENCUENTRANOS!</h1>
            </div>
            <br>
            <div class="col-md-12" Align="center">
                <div id="mapaDireccion" style="width: 100%; height:350px;"></div>
            </div>
            <script type="text/javascript">
                function initMap() {
                    var coordenadaCentral = new google.maps.LatLng(-0.1298373695149817, -78.47812223090486);
                    var mapa1 = new google.maps.Map(
                        document.getElementById('mapaDireccion'), {
                            center: coordenadaCentral,
                            zoom: 15,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                    );
                }
            </script>

        </div>
    </div>
    <br>

</body>

</html>