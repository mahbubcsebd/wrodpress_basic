<?php
/*
* the template display the header
 */
?>


<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="logo"><img src="<?php echo get_theme_mod('mhb_logo'); ?>" alt=""></a>
                </div>
                <div class="col-md-9"></div>
            </div>
        </div>
    </header>




<?php wp_footer() ?>
</body>
</html>