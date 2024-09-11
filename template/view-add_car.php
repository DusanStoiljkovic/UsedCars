<?php if (!isset($_SESSION['log_status'])): ?> 
    <?= header("location: index.php?module=login"); ?>
<?php else: ?>
    <div class="container" id="add_car">
    <h1>Postavi oglas</h1>
    <form style="border: 1px solid grey;" action="index.php?module=add_car" method="post" enctype="multipart/form-data">
        <div class="col-md-6 kolona">
        
        <input type="text" id="brand" name="brand" placeholder="Brand" required><br><br>

        <input type="text" id="model" name="model" placeholder="Model" required><br><br>
        
        <input type="number" id="year" name="year" placeholder="Year" required><br><br>
        
        </div>

        <div class="col-md-6 kolona">
        <input type="text" id="color" name="color" placeholder="Color"><br><br>
        
        <input type="number" id="price" name="price" step="0.01" placeholder="Price" required><br><br>

        <div class="desnakolona">
            <input type="file" name="img_upload"><br><br>
            <input class="btn btn-warning" type="submit" value="Postavi oglas">
        </div>

        </div>
<?php endif; ?>
    </form>
    </div>
