<?php
include "../function.php";
$get_data=new get_location_data(trim($_POST['lat']),trim($_POST['long']));
echo 'country:'.$get_data->countryName.'-city:'.$get_data->locality;