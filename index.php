<?php include('layouts/header.php'); ?>

<div class="container mt-5">
<h1>Descubra Seu Signo</h1>


<form id="signo-form"  method="POST" action="show_zodiac_sign.php">

    <div class="mb-3">
    <label for="data_nascimento" class="form-label"><strong>Data de Nascimento</strong></label> <br>
    <input type="date" class="form-control" id="data_nascimento"
    name="data_nascimento" required>
    </div>
    <button type="submit" class="btn btn-primary"><strong>Descobrir Signo</strong></button>
</form>


</div>
<?php include('layouts/footer.php'); ?>