<?php
    $number = stripslashes($_POST['number']);
    self::update_dashboard_widget_options(
            self::wid,                                  //The  widget id
            array(                                      //Associative array of options & default values
                'example_number' => $number,
            )
    );

?>
<p>This is the DiscantCraft dynmap dashboard widget!</p>
<p>Please enter the map URL down here: <tt><?php echo __FILE__ ?></tt></p>
<input type="text" name="number" />
<?php
/**
 * Changed by Xander Smeets at 2-6-2014
 */
 ?>
