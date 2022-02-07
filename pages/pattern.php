<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="action.php" method="post">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Length</label>
                            <div class="col-md-8">
                                <input type="number" name="input_length" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                                <input type="submit" name="pattern_btn" class="btn btn-outline-success btn-block"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div>
                    <?php echo isset($result) ? $result : '' ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php';?>