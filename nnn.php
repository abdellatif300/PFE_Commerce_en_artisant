<?php require('./actionnn.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- This script got from frontendfreecode.com -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<style>
body {
    background: #f5f5f5;
    margin: 20px;
}
.rounded {
    border-radius: 1rem;
}
.nav-pills .nav-link {
    color: #555;
}
.nav-pills .nav-link.active {
    color: white;
}
input[type="radio"] {
    margin-right: 5px;
}
.bold {
    font-weight: bold;
}
</style>

</head>
<body>
<form  method="POST" action="actionnn.php">
<div class="row">
    
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                    <!-- Credit card form tabs -->
                    <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                        <li class="nav-item">
                            <a data-toggle="pill" href="#credit-card" class="nav-link active"> <i class="fas fa-credit-card mr-2"></i> Carte de crédit </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="pill" href="#paypal" class="nav-link"> <i class="fab fa-paypal mr-2"></i> Paypal </a>
                        </li>
                       
                    </ul>
                </div>
                <!-- End -->
                <!-- Credit card form content -->
                <div class="tab-content">
                    <!-- credit card info-->
                    <div id="credit-card" class="tab-pane fade show active pt-3">
                        <form role="form">
                            <div class="form-group">
                                <label for="username">
                                    <h6>Propriétaire de la carte</h6>
                                </label>
                                <input type="text" name="username" placeholder="Propriétaire de la carte" required class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="cardNumber">
                                    <h6>numéro de carte</h6>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="numbre" placeholder="numéro de carte" class="form-control" required />
                                    <div class="input-group-append">
                                        <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label>
                                            <span class="hidden-xs" name="dat">
                                                <h6>Date d'expiration</h6>
                                            </span>
                                        </label>
                                        <div class="input-group"><input type="number" placeholder="MM" name="" class="form-control" required /> <input type="number" placeholder="YY" name="" class="form-control" required /></div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-4">
                                        <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                        </label>
                                        <input type="text" required class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><button type="button" class="subscribe btn btn-block btn-block shadow-sm" name="valid">Confirmer le paiement</button></div>
                        </form>
                    </div>
                    <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Sélectionnez votre type de compte paypal</h6>
                        <div class="form-group">
                            <label class="radio-inline"> <input type="radio" name="optradio" checked /> Domestique </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5" />Internationale </label>
                        </div>
                        <p>
                            <button type="button" class="btn btn-primary"><i class="fab fa-paypal mr-2"></i> Connectez-vous à mon Paypal</button>
                        </p>
                        <p class="text-muted">
                        Remarque : Après avoir cliqué sur le bouton, vous serez dirigé vers une passerelle sécurisée pour le paiement. Après avoir terminé le processus de paiement, vous serez redirigé vers le site Web pour afficher les détails de votre commande.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </form>
<script>
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>