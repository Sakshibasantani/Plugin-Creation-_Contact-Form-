<?php
add_shortcode( "front_contact_form", 'contactform_front_view' );

function contactform_front_view()
{
    global $wpdb;
    $sql=$wpdb->get_results('SELECT * FROM wp_form');

    if ($sql) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Id</th>';
        echo '<th>Name</th>';
        echo '<th>Email</th>';
        echo '<th>Phonenumber</th>';
    
    echo '</tr>';

    foreach ($sql as $result) {
        echo '<tr>';
        echo '<td>' . $result->id . '</td>';
        echo '<td>' . $result->name. '</td>';
        echo '<td>' . $result->email. '</td>';
        echo '<td>' . $result->phonenumber . '</td>';
       
       
       
        echo '</tr>';
    }
    echo '</table>';

    }
   
    
    else {
        echo 'No data found.';
    }
  
}
?>