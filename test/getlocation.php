<?php
include "../gdl.php";
$get_data=new gdl(trim($_POST['lat']),trim($_POST['long']));
echo 'country:'.$get_data->countryName.'-city:'.$get_data->locality;