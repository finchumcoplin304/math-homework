  <?php
function getRandomInt($min, $max) {
    return mt_rand($min, $max);
}
function getRandomNum($length) {
    $numeros = '0123456789';
    $password = '';
    for ($i=0; $i < $length; $i++) { 
        $password .= $numeros[mt_rand(0, strlen($numeros)-1)];
    }
    return $password;
}
function getRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';
    for ($i=0; $i < $length; $i++) { 
        $string .= $characters[mt_rand(0, strlen($characters)-1)];
    }
    return $string;
}
function getRandomDate() {
    $min = (new DateTime('now'))->format('Y-m-d');
    $max = (new DateTime('+365 days'))->format('Y-m-d');
    return date('Y-m-d', mt_rand($min, $max));
}
function getRandomTime() {
    $min = time();
    $max = time() + 86400;
    return date('H:i:s', mt_rand($min, $max));
}
function getRandomDateTime() {
    $date = getRandomDate();
    $time = getRandomTime();
    return $date . ' ' . $time;
}
?>