<link rel="stylesheet" href="../../css/marg4uux.css">

<?php
    define("_tittle_site_","Marg4uux");
    define("_logo_","../resources/logo2.png");
    define("_tittle_page_","Acceuil");
    include ("../partial/header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
        <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text"></p>
                    <iframe src="https://player.twitch.tv/?channel=marg4uux&parent=www.example.com" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="570"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include ("../../partials/footer.php");
?>