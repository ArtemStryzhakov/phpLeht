<?php
// vanuse leidmine funktsioon
function getVanus(){
    echo '<form method="post" action="">';
    echo 'Palun sinu sünnipäev';
    echo '<input type="date" name="age">';
    echo '<input type="submit" name="arvuta" value="Arvuta vanus">';
    echo '</form>';
    if (isset($_POST['arvuta'])){
        $synd = $_POST['age'];
        $diff = date_diff(date_create($synd), date_create('16.11.21'));
        echo '<br>';
        echo $diff -> format('%y'). ' aastat vana';
    }
}

function getKoolivaheajani(){
    $today = date('d.m.Y');
    $talv = date('20.12.2021');
    $diff = date_diff(date_create($today), date_create($talv));
    echo '<br>';
    echo 'Talve koolivaheajani on '.$diff->format('%a') .' päeva';
}

function getHooaeg(){
    // vastavalt tänase kuupäeva näitab hooaja pilti

    // piltide massiv
    $pildid = array(
        "autumn" => "images/autumn.jpg",
        "winter" => "images/winter.jpg",
        "spring" => "images/spring.jpg",
        "suvi" => "images/summer.jpg");
    $paev = date("z");
    // sygis
    $sygis_algus = date("z", strtotime("September 1"));
    $sygis_lopp = date("z", strtotime("November 30"));

    // talv
    $talv_algus = date("z", strtotime("December 1"));
    $talv_lopp = date("z", strtotime("February 30"));

    // kevad
    $kevad_algus = date("z", strtotime("March 1"));
    $kevad_lopp = date("z", strtotime("May 30"));

    if ($paev >= $sygis_algus && $paev <= $sygis_lopp) :
        $hooaeg = "autumn";
    elseif ($paev >= $talv_algus && $paev <= $talv_lopp) :
        $hooaeg = "winter";
    elseif ($paev >= $kevad_algus && $paev <= $kevad_lopp) :
        $hooaeg = "spring";
    else : $hooaeg = "summer";
    endif;
    $hooajepilt = $pildid[$hooaeg];
    echo $hooajepilt;
}
?>