
    <div class="container">
        <div style="padding:30px; display:grid; grid-template-columns: auto auto auto auto;" class="grid-container">
            
            <?php while($row = $result->fetch_assoc()):?>
                <div style="padding:10px;" class="grid-item">
                    <img style="max-width:250px" src="<?php echo $row['image_url']; ?>" alt="Car Image" class="car-image">
                    <div class="car-info">Brand: <?php echo $row['brand']; ?></div>
                    <div class="car-info">Model: <?php echo $row['model']; ?></div>
                    <div class="car-info">Year: <?php echo $row['year']; ?></div>
                    <div class="car-info">Price: <?php echo $row['price']; ?> Euros</div>
                    <a href="?module=edit&car_id=<?= $row['car_id']?>&action=edit">edit</a>
                    <a href="?module=edit&car_id=<?= $row['car_id']?>&action=delete">delete</a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>