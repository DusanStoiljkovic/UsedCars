<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="grid container" id="search_car">
            <h1>EDIT AD</h1>
            <form action="index.php?module=edit&car_id=<?=$_GET['car_id']?>&action=edit" method="POST">
            
                <input class="grid-item" type="text" name="brand" value="<?=$brand?>"><br><br>
                
                <input class="grid-item" type="text" name="model" value="<?=$model?>"><br><br>

                <input class="grid-item" type="number" name="year" value="<?=$year?>"><br><br>
                
                <input class="grid-item" type="text" name="color" value="<?=$color?>"><br><br>

                <input class="grid-item" type="text" name="car_condition" value="<?=$car_condition?>"><br><br>

                <input class="grid-item" type="number" name="price" step="0.01" value="<?=$price?>"><br><br>

                <!-- <input class="grid-item" type="file" name="img_upload"><br><br> -->

                <input class="grid-item btn btn-warning" type="submit" value="Izmeni oglas">

            </form>
    </div>

    
</body>
</html>