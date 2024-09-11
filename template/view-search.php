 <div class="grid container" id="search_car">
            <h1>Search cars</h1>
            <form action="index.php?module=search" method="post">
            
                <input class="grid-item" type="text" name="brand" placeholder="Brand"><br><br>
                
                <input class="grid-item" type="text" name="model" placeholder="Model"><br><br>

                <input class="grid-item" type="number" name="year" placeholder="Year"><br><br>
                
                <input class="grid-item" type="text" name="color" placeholder="Color"><br><br>

                <input class="grid-item" type="number" name="price" step="0.01" placeholder="Price"><br><br>

                <input class="grid-item btn btn-warning" type="submit" value="Pretraga oglas">

            </form>
    </div>

    <div class="container">
        <div style="padding:30px; display:grid; grid-template-columns: auto auto auto auto;" class="grid-container">
            
            <?php while($row = $result->fetch_assoc()):?>
                <div style="padding:10px;" class="grid-item">
                    <img style="max-width:250px" src="<?php echo $row['image_url']; ?>" alt="Car Image" class="car-image">
                    <div class="car-info">Brand: <?php echo $row['brand']; ?></div>
                    <div class="car-info">Model: <?php echo $row['model']; ?></div>
                    <div class="car-info">Year: <?php echo $row['year']; ?></div>
                    <div class="car-info">Price: <?php echo $row['price']; ?> Euros</div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
