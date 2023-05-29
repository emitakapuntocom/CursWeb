<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="prueba.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/2608/2608332.png" type="image/x-icon"> 
    <title>TicketMaster</title>
</head>
<body>
    <header>
        <h1 align="center">TicketMaster Mejorado</h1>
        <span>Ultimamente la plataforma de TicketMaster no ha funcionado nada bien, así que hemos creado esta alternativa para que no esperen tanto tiempo a la hora de comprar los boletos de sus artistas favoritos, ya que sabemos que no alcanzan boletos por culpa de la ineficiencia de TicketMaster</span><br>
        <br>
        <img src="antonio.jpeg" alt="Red hot chili Peppers en el festival Vive Latino 2023 en el Foro Sol" width="275" height="200">   <img src="https://openrevista.com/wp-content/uploads/2023/03/ricardo-arjona-lleno-foro-sol.jpg" alt="Foro Sol" width="300" height="200">   <img src="cuartetometro.jpeg" alt="Cuarteto de nos en el teatro metropólitan el 01-10-2022" width="400" height="200">   <img src="https://teatrometropolitan.mx/wp-content/uploads/2019/08/Teatro-Metropolitan-Inmueble-Recinto.jpg" alt="Escaleras Teatro Metropolitan" width="300" height="200">   <img src="https://olimpiadacomunitaria.cdmx.gob.mx/wp-content/uploads/5e178e4775564643670002.jpg" alt="Palacio de los Deportes" width="200" height="200">
        <!--Foro Sol, Metropolitan, Palacio de lo deportes, Auditorio Nacional-->
        <hr><hr><hr>
    </header>
    
    <h3><strong><i>Reserva de boletos :DD</i></strong></h3>
    
    <hr><br>
        <form action="./vista2.php" method="post">
            <fieldset>
                <legend><h4>Datos del usuario</h4></legend>
                <label for="nombre "><strong>Nombre(s):</strong></label>
                <input type="text" id="nombre" name="nombre" required>

                <br><br>

                <label for="apellido"><strong>Apellidos:</strong></label>
                <input type="text" id="apellido" name="apellido" required>

                <br><br>

                <label for="artista"><strong>¿Qué artista quieres ver?</strong></strong></label>
                <select name="artista" id="artista" required>
                    <option value="">--Seleccionar artista--</option>
                    <option value="Panic! at the disco">Panic! at the disco</option>
                    <option value="Cuarteto de nos">Cuarteto de nos</option>
                    <option value="Red hot chili peppers">Red hot chili peppers</option>
                    <option value="twenty one pilots">twenty one pilots</option>
                </select>

                <br><br>
        
                <label for="fecha"><strong>Elegir fecha:</strong></label>
                <input type="date" id="fecha" name="fecha" required>
        
                <br><br>

                <label for="zona"><strong>Elige la zona:</strong></label>
                <select name="zona" id="zona">
                    <option value="">--Seleccionar zona--</option>
                    <option value="VIP">VIP</option>
                    <option value="A">Preferente A</option>
                    <option value="B">Preferente B</option>
                    <option value="C">Preferente C</option>
                </select>

                <br><br>

                <label for="cantidad"><strong>¿Cuántos boletos llevarás?</strong></label>
                <input type="number" id="cantidad" name="cantidad" placeholder="Máximo 15" min="1" max="15" required>

                <br><br>

                <label><strong>¿Dónde los verás?</strong></label><br>
                <!--No había visto que los lugares son los mismos que en moodle, puse los que dijo mi mamá T.T-->
                <input type="radio" name="lugar" value="Metropolitan" required>Teatro metropolitan<br>
                <input type="radio" name="lugar" value="Foro sol" required>Foro sol<br>
                <input type="radio" name="lugar" value="Palacio de los deportes" required>Palacio de los deportes<br>
                <input type="radio" name="lugar" value="Auditorio Nacional" required>Auditorio Nacional<br>
                </div>

                <br>

                <div id="form">
                    <h4><strong>Extras</strong></h4>
                    <label for="extra1"><i>¿Deseas comprar comida extra?</i></label>
                    <select name="extra1" id="com">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select><br>               
                    <label for="extra2"><i>¿Deseas comprar meet & greet?</i></label>
                    <select name="extra2" id="myg">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select><br>
                    <label for="extra2"><i>Deseas comprar un lugar de estacionamiento?</i></label>
                    <select name="extra2" id="est">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <br><br>

                <button type="submit">Enviar</button>
                <button type="reset">Cancelar</button>

            </fieldset>
        </form>
</body>
</html>