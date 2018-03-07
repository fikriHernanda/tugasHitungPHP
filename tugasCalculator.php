<?php
$phi = 3.14;
$kLuas = 4;
$kVolume =4/3;
$luasPermukaan  = 0;
$volume = 0;
if (isset($_GET['kirim'])) {
    $radius = $_GET['radius'];     
    function volume($r, $kVolume, $phi)
    {
        $volume = $kVolume *$phi*pow($r,3);
        return $volume;
    }
    function luasPermukaan($r, $kLuas, $phi)
    {
        $luas = $kLuas*$phi*pow($r,2);
        return $luas;
    }
    $volume = volume($radius, $kVolume, $phi);
    $luasPermukaan = luasPermukaan($radius, $kLuas, $phi);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Kalkulator Bola</title>
</head>
<body>
    <h1>Bangun Ruang Bola</h1>
    <form action="" method="get">
        <label for="radius">Radius : </label><br>
        <input type="text" name="radius" id="radius"> <br>
       
        <input type="submit" name="kirim" value="Hitung"> <br> <br>
        <label for="volume">Volume : </label><br>
        <input type="text" name="volume" value="<?php echo $volume;?>" id="volume"> <br>
        <label for="Luas">Luas Permukaan : </label> <br>
        <input type="text" name="luas" value="<?php echo $luasPermukaan ?>" id="luas"> <br>
    </form>
</body>
</html>