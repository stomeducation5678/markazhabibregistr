<?php


$name = $_POST['user_name'];
$first = $_POST['user_first'];
$age = $_POST['user_age'];
$course= $_POST['user_course'];
$number = $_POST['user_number'];
$token = "5020354024:AAEzq96GMfgE3H1bmuhIkH-1xuXV9FSe8n0";
$chat_id = "-547277727";
$arr = array(
    'Ismi : ' => $name,
    'Familiyasi : ' => $first,
    'Yoshi :' => $age,
    'Tanlagan kursi :'=>$course,
    'Nomeri : '=>$number,
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    header('Location: rahmat.html');
} else {
    echo "Hato,tekshirib koring iltimos";
}
?>











