<div class="laptop" style="background:rgba(236,239,241 ,1);">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 mt-3">
                <h5 class="w-100">Brand</h5>
                <select class="form-control">
                    <option>Default select</option>
                    <option>Acer</option>
                    <option>Asus</option>
                    <option>Dell</option>
                    <option>Lenovo</option>
                    <option>MSI</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 mt-3">
                <h5>Condition</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">New</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Used</label>
                </div>
            </div>
            <div class="col-lg-8 col-md-4 col-sm-12 col-12 mt-3">
            <form class="form-inline my-2 my-lg-0">
                <h5 class="w-100">Search</h5>
                <input class="form-control mr-sm-2" type="search" placeholder="Something here" aria-label="Search">
                <button class="btn btn-warning my-2 my-sm-0 " type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
             </form>
            </div>
        </div>
        <hr>
        <!-- laptop -->
        <div class="row">
            <?php 
                require_once("inc/database.php");
                $laptops = getLaptop();
                foreach($laptops as $laptop):
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-3 mb-3">
                <div class="card h-100">
                    <div>
                        <img src="<?= $laptop["image"] ?>" class="card-img-top" alt="Responsive image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-info border-bottom"><?= $laptop["product_Name"] ?></h5>
                        <p class="card-text mb-0"><?= $laptop["description"] ?></p>
                        <p>Date: <?= $laptop["release_date"] ?></p>
                        <h5 class="text-danger">$<?= $laptop["price"] ?></h5>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
