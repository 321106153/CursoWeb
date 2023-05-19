<?php

$link;
switch ($_POST["Artista"]){
    case "System of a Down": 
        $link= "./concierto/soad.jpeg";
        break;
    case "Avenged Sevenfold":
        $link="./concierto/a7x.jpeg";
        break;
    case "Ghost":
        $link= "./concierto/ghost.jpeg";
        break;
    case "Korn":
        $link="./concierto/korn.jpeg";
        break;
}

$recinto;
switch ($_POST["Lugar"]){
    case "Auditorio BlackBerry": 
        $recinto= "./concierto/blackberry.jpeg";
        break;
    case "Plaza Condesa":
        $recinto="./concierto/plazacondesa.png";
        break;
    case "Circo Volador":
        $recinto= "./concierto/volador.jpeg";
        break;
    case "Arena":
        $recinto="./concierto/arena.jpeg";
        break;
}

$sector;
switch ($_POST["Zona"]){
    case "Pista": 
        $sector= "./concierto/general.jpeg";
        break;
    case "Palco":
        $sector="./concierto/palcos2.jpg";
        break;
    case "Gradas":
        $sector= "./concierto/gradas.jpeg";
        break;
    case "Platea":
        $sector="./concierto/palcos2.jpg";
        break;
}

echo $_POST["Nombre"]. "<br>";
echo $_POST["Apellido"]. "<br>";

$boletos;
for ($_POST["Boletos"]=1; $boletos <=15; $boletos+=1){

// {echo "
    echo"
<table border='10' align='center' style='border-collapse: collapse;' cellpadding='30px'>
<thead>
    <tr>
        ".$_POST['Artista']."
    </tr>
</thead>
<tbody>
    <tr>
        <td style='font-size: 25px;' div align='center'> <strong> ".$_POST['Artista']." </strong>
        <br> <img src=".$link." widht='150' height='150'> </td>
        <td style='font-size: 20px;' div align='center'> <strong> ".$_POST['Fecha']." </strong></td>
        <br>
        <td style='font-size: 20px;' div align='center'><strong> ".$_POST['Lugar']." </strong>
        <br> <img src=".$recinto." widht='150' height='150'></td>
        <td style='font-size: 20px;' div align='center'><strong> ".$_POST['Zona']." </strong>
        <br>
        <img src=".$sector." widht='150' height='150'></td>
        
    </tr>
</tbody>
</table></div>
";};

?>