<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div class="container">
    <div class="row calc-row align-items-center">
        <div class="col col-md-4 offset-md-4">
            <div class="form-group">
                <div class="card" id="calc">
                    <div class="card-body">
                        <input class="form-control input-window" id="inputWindow" value="" placeholder = "0">
                        <div class="row no-gutters mt-2 mb-2">
                            <div class="col-6">
                                <button class="btn btn-danger form-control" id="btn_clr">Cls</button>
                            </div>
                            <div class="col-3">
                                 <button class="btn btn-secondary form-control" id="btn_pi">π</button>
                            </div>
                            <div class="col-3">
                                 <button class="btn btn-secondary form-control" id="btn_.">.</button>
                            </div>
                        </div>
                        <? $numbers = [0 => ["1", "2", "3","+"], 1 =>["4", "5", "6","-"], 2 => ["7", "8", "9", "*"], 3 => ["=", "0", "√" , "/"]]; ?>
                        <? foreach ($numbers as $columnsItem): ?>
                            <div class="row mb-2">
                                <? foreach ($columnsItem as $value): ?>
                                    <div class="col">
                                        <button class="btn btn-primary form-control" id="<?= 'btn_'.$value?>"><?= $value ?></button>
                                    </div>
                                <? endforeach; ?>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <div class="card">
                    <textarea class="form-control" id="history"> </textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>