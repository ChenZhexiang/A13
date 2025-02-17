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
    "MySQL" => ["port" => 3306, "protocol" => "TCP"]
];

$nom = $_POST['nom'];
$email = $_POST['email'];

$correctes = 0;
$incorrectes = 0;

foreach ($serveis as $servei => $dades) {
    $port_resposta = $_POST["port_$servei"] ?? '';
    $protocol_resposta = $_POST["protocol_$servei"] ?? '';

    if ($port_resposta == $dades['port'] && $protocol_resposta == $dades['protocol']) {
        $correctes++;
    } elseif ($port_resposta != '' || $protocol_resposta != '') {
        $incorrectes++;
    }
}

$nota = ($correctes * 1) + ($incorrectes * (-1/3));
$nota = max(0, $nota); // Assegurar que la nota no sigui negativa

echo "<h1>Resultats de l'examen</h1>";
echo "<p>Nom complet: $nom</p>";
echo "<p>Correu electrònic: $email</p>";
echo "<p>Respostes correctes: $correctes</p>";
echo "<p>Respostes incorrectes: $incorrectes</p>";
echo "<p>Nota final: $nota / 10</p>";
?>