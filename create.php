<?php
$filename = "hehe". rand(10,100) .".html";
$file = fopen($filename,"w");

$fullResult = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bg">
        <center>
            <div class="isi">
            <h1>Jadwal Pelajaran</h1>
            <div class="header">
                <table>
                    <td>
                        SENIN
                    </td>
                </table>
                <table>
                    <td>
                        SELASA
                    </td>
                </table>
                <table>
                    <td>
                        RABU
                    </td>
                </table>
                <table>
                    <td>
                        KAMIS
                    </td>
                </table>
                <table>
                    <td>
                        JUMAT
                    </td>
                </table>
                <table>
                    <td>
                        SABTU
                    </td>
                </table>
            </div>
            <div class="table">
                <table>';
foreach($_GET['senin'] as $senin) {
          $fullResult .= '<tr><td>'. $senin .'</td></tr>';
}
$fullResult .= '</table><table>';
foreach($_GET['selasa'] as $selasa) {
          $fullResult .= '<tr><td>'. $selasa .'</td></tr>';
}
$fullResult .= '</table><table>';
foreach($_GET['rabu'] as $rabu) {
          $fullResult .= '<tr><td>'. $rabu .'</td></tr>';
}
$fullResult .= '</table><table>';
foreach($_GET['kamis'] as $kamis) {
          $fullResult .= '<tr><td>'. $kamis .'</td></tr>';
}
$fullResult .= '</table><table>';
foreach($_GET['jumat'] as $jumat) {
          $fullResult .= '<tr><td>'. $jumat .'</td></tr>';
}
$fullResult .= '</table><table>';
foreach($_GET['sabtu'] as $sabtu) {
          $fullResult .= '<tr><td>'. $sabtu .'</td></tr>';
}
$fullResult .= '</table>
</div>
</div>
</center>
</div>
</body>
</html>';
echo fwrite($file,$fullResult);
fclose($file);
echo "\n";
echo "Berhasil tercreate " . "<a href='"."http://" . $_SERVER['SERVER_NAME'] . '/' . $filename."'>link</a>";

?>