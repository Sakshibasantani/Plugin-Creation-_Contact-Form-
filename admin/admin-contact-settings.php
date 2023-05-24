<?php
add_action( 'admin_menu', 'wp_contactform_create_menu' );
// Set Flex slider's menu.
function wp_contactform_create_menu() {
	// create new top-level menu.
	add_menu_page( 'contactform Settings', 'contactform Settings', 'administrator', __FILE__, 'wp_contactform_settings_page' );
}



function wp_contactform_settings_page()
{
?>

<div>
        <h1>Contactform Setting Page</h1>

        <form method="post" style='border: 2px solid #ccc;width: 300px;padding: 10px;' enctype="multipart/form-data">
            
            <h3>  Name: </h3>
            <input type="text" required name='name' />
            

           
            <h3> Email:</h3>
            <input type="email" required name='email' />
            

           
            <h3>Phonenumber:</h3>
            <input type="text" required name='phonenumber' /> <br> <br>
           

            <input type='submit' class='button-primary' name='submit' value='Submit'/>
        </form>


        <?php 
                        if(isset($_POST['submit']))
                        {
                            array_pop($_POST);

                            global $wpdb;
                            $sql=$wpdb->insert('wp_form',$_POST);
                        } 
         ?>
</div>
<?php } ?>
