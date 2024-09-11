
<div style="text-align:center;"class="container">
    <h1 style="color:orange; font-weight:700; text-aling:center;">NEW CARS</h1>
    <div style="display:grid; grid-template-columns: auto auto auto auto;" class="grid-container">
        <?php 
        while ($row = $result->fetch_assoc()): {
        $brand = $row["brand"];
        $model = $row["model"];
        $year = $row["year"];
        $price = $row['price'];
        $image_path = $row['image_url'];
        }
        ?>
        <div style="padding:10px;" class="grid-item">
            <img style="max-width:250px" src="<?php echo $image_path; ?>" alt="Car Image" class="car-image">
            <div class="car-info">Brand: <?php echo $brand; ?></div>
            <div class="car-info">Model: <?php echo $model; ?></div>
            <div class="car-info">Year: <?php echo $year; ?></div>
            <div class="car-info">Price: <?php echo $price; ?> Euros</div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

