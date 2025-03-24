<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Examen de Serveis de Xarxa</title>
</head>
<body>
    <h1>Zhexiang Chen, codi de l'activitat: pj9f5a14 24/03/2025</h1>
    <h1>Examen de Serveis de Xarxa</h1>
    <form action="corrector.php" method="post">
        <label for="nom">Nom complet:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Correu electrònic:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="cicle">Cicle:</label>
        <select id="cicle" name="cicle" required>
            <option value="ASIX">ASIX</option>
            <option value="DAM">DAM</option>
            <option value="DAW">DAW</option>
        </select><br><br>

        <label for="curs">Curs:</label>
        <select id="curs" name="curs" required>
            <option value="1r">1r</option>
            <option value="2n">2n</option>
        </select><br><br>

        <h2>Preguntes:</h2>
        <?php
        $serveis = [
            "DHCP" => ["port" => 67, "protocol" => "UDP"],
            "DNS" => ["port" => 53, "protocol" => "UDP"],
            "HTTP" => ["port" => 80, "protocol" => "TCP"],
            "SSH" => ["port" => 22, "protocol" => "TCP"],
            "FTP" => ["port" => 21, "protocol" => "TCP"],
            "TFTP" => ["port" => 69, "protocol" => "UDP"],
            "SMTP" => ["port" => 25, "protocol" => "TCP"],
            "POP3" => ["port" => 110, "protocol" => "TCP"],
            "TELNET" => ["port" => 23, "protocol" => "TCP"],
            "SAMBA" => ["port" => 445, "protocol" => "TCP"],
            "HTTPS" => ["port" => 443, "protocol" => "TCP"],
            "MySQL" => ["port" => 3306, "protocol" => "TCP"],
            "CUPS" => ["port" => 631, "protocol" => "TCP/UDP"],
            "NFS" => ["port" => 2049, "protocol" => "TCP/UDP"],
            "LDAP" => ["port" => 389, "protocol" => "TCP/UDP"],
            "NTP" => ["port" => 123, "protocol" => "UDP"]
        ];

        foreach ($serveis as $servei => $dades) {
            echo "<h3>$servei</h3>";
            echo "<label>Port típic:</label><br>";
            echo "<select name='port_$servei'>";
            echo "<option value=''>-- Selecciona un port --</option>";
            if ($servei == "FTP" || $servei == "TFTP" || $servei == "SMTP" || $servei == "POP3") {
                echo "<option value='21'>21</option>";
                echo "<option value='69'>69</option>";
                echo "<option value='25'>25</option>";
                echo "<option value='110'>110</option>";
            }
            elseif($servei == "TELNET" || $servei == "SAMBA" || $servei == "HTTPS" || $servei == "MySQL") {
                echo "<option value='23'>23</option>";
                echo "<option value='445'>445</option>";
                echo "<option value='443'>443</option>";
                echo "<option value='3306'>3306</option>";
            }
            elseif ($servei == "CUPS" || $servei == "NFS" || $servei == "LDAP" || $servei == "NTP"){
                echo "<option value='631'>631</option>";
                echo "<option value='2049'>2049</option>";
                echo "<option value='389'>389</option>";
                echo "<option value='123'>123</option>";
            }
            else{
                echo "<option value='67'>67</option>";
                echo "<option value='53'>53</option>";
                echo "<option value='80'>80</option>";
                echo "<option value='22'>22</option>";
            }
            echo "</select><br>";
            echo "<label>Protocol de transport:</label><br>";
            echo "<select name='protocol_$servei'>";
            echo "<option value=''>-- Selecciona un protocol --</option>";
            if ($servei == "CUPS" || $servei == "NFS" || $servei == "LDAP" || $servei == "NTP"){
                echo "<option value='TCP'>TCP</option>";
                echo "<option value='UDP'>UDP</option>";
                echo "<option value='TCP/UDP'>TCP/UDP</option>";
                echo "<option value='HTTP'>HTTP</option>";
                echo "</select><br><br>";
            }
            else{               
                echo "<option value='TCP'>TCP</option>";
                echo "<option value='UDP'>UDP</option>";
                echo "<option value='ICMP'>ICMP</option>";
                echo "<option value='HTTP'>HTTP</option>";
                echo "</select><br><br>";
            }  
        }
        ?>
        <input type="submit" value="Enviar respostes">
    </form>
    <p>"hola"</p>
</body>
</html>
