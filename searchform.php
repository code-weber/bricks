<?php 

$searchtext = esc_html__( 'Search', 'sb-base-theme' );

?>

<form action="<?php echo esc_url_raw(home_url()); ?>" method="get">

    <div class="form-row">

        <div class="col-auto">
            <input class="form-control form-control-sm" type="search" placeholder="<?php echo $searchtext ?>"
                aria-label="<?php echo $searchtext ?>" name="s">
        </div>

        <div class="col-2">
            <button class="btn btn-sm btn-outline-dark" type="submit"><?php echo $searchtext ?></button>
        </div>

    </div>

</form>