<?php
$servername = "sql10.freemysqlhosting.net";
$username = "sql10170014";
$password = "A22NPaMMLl";
$dbname = "sql10170014";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,nome_id,nome FROM cargo WHERE id = ".$cargo;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $cargoName = $row['nome_id'];
?>
        <h2><?=utf8_encode($row['nome'])?></h2>
        <div class="line"></div>
        <div class="row">
    <?php }
}

$sql = "SELECT id,cargo,nome,texto FROM equipe WHERE cargo = ".$cargo;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path = get_template_directory_uri()."/img/equipe/".$row["id"].".jpg";
        ?>
        <div image="<?=$path?>" id="<?=$row['id']?>" cargo='<?=$cargoName?>' name="<?=utf8_encode($row['nome'])?>" value="<?=utf8_encode($row['texto'])?>" class="small-4
        medium-3 columns end pessoa">
                <div class="row">
                    <div style="background-image: url(<?=$path?>);" class="small-12 small-centered columns imagem">

                    </div>
                    <div class="small-12 columns">
                        <p><?=utf8_encode($row['nome'])?></p>
                    </div>
                </div>
            </div>

    <?php }

    ?>    </div>
            <div id="<?=$cargoName?>" class="texto row">
            <div id="<?=$cargoName?>Content" class="qscontent">
                <div id="<?=$cargoName?>Foto" class="foto small-3 small-offset-1 columns">
                </div>
                <div id="<?=$cargoName?>Texto" class="small-7 small-offset-1 columns">
                </div>
            </div>
        </div><?php
}
$conn->close();
?>
