<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/template.css" />
</head>

<body>
    <div class="container">
        <?php foreach ($data as $value) { ?>
            <div class="card">
                <div class="header-block">
                    <h2><?php echo $value['text_data']['header'] ?></h2>
                    <p><?php echo  $value['dtmpl_data']['fields']['description']['field_value']; ?></p>
                    <a class="card-link" href="<?php echo  URL . $value['dtmpl_data']['url']['description']['field_value'];?>">Ссылка</a>
                </div>
                <img class="img-fluid" src="<?php echo $value['dtmpl_data']['fields']['image']['field_value']; ?>">
            </div>
        <?php } ?>

    </div>
</body>