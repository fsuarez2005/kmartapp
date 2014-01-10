<?php

require_once('test_json_data.php');

$j = json_decode( $test_json_data );

echo '<table>';
foreach ($j->SearchResults->Products as $product) {

  echo '<tr>'.
    '<td>'.$product->Description->Name.'</td>'.
    '<td>'.$product->Id->KsnValue.'</td>'.
    '</tr>';   

  

}

echo '</table>';

?>