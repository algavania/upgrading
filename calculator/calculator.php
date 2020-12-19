<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Calculator</title>
</head>

<body style="height: 100vh;" class="d-flex justify-content-center align-items-center flex-column">
    <div class="card align-self-center" style="width: 30%; background-color: #002c73;">
        <div class="card-body ma-2">
            <div class="form-input">
                <input type="text" class="form-control input-lg" id="calculation" value="0" disabled>
            </div>
            <div class="row row-cols-5 mt-4 align-items-center">
                <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <div class="col btn btn-light"><?php echo $i ?></div>
                <?php endfor; ?>
                <div class="col btn btn-light">+</div>

                <?php for ($i = 4; $i <= 6; $i++) : ?>
                    <div class="col btn btn-light"><?php echo $i ?></div>
                <?php endfor; ?>
                <div class="col btn btn-light">-</div>

                <?php for ($i = 7; $i <= 9; $i++) : ?>
                    <div class="col btn btn-light"><?php echo $i ?></div>
                <?php endfor; ?>
                <div class="col btn btn-light">*</div>

                <div class="col btn btn-light">0</div>
                <div class="col btn btn-light">.</div>
                <div class="col btn btn-light not" id="delete"><=</div>
                <div class="col btn btn-light">/</div>
                <div class="col btn btn-light">(</div>
                <div class="col btn btn-light">)</div>
                <div class="col btn btn-light not" id="clear">AC</div>
                <div class="col btn btn-light not" id="equals">=</div>


            </div>

        </div>
    </div>
    <script src="scripts.js"></script>
</body>

</html>