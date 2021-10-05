<?php
class gdl{
public function __construct($latitude,$longitude){
    $url = 'https://api.bigdatacloud.net/data/reverse-geocode-client?latitude='.$latitude.'&longitude='.$longitude.'&localityLanguage=en';
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    $this->latitude=$data['latitude'];
    $this->longitude=$data['longitude'];
    $this->continent=$data['continent'];
    $this->continentCode=$data['continentCode'];
    $this->countryName=$data['countryName'];
    $this->countryCode=$data['countryCode'];
    $this->principalSubdivision=$data['principalSubdivision'];
    $this->principalSubdivisionCode=$data['principalSubdivisionCode'];
    $this->city=$data['city'];
    $this->locality=$data['locality'];
    $this->postcode=$data['postcode'];
    $this->isoName=$data['localityInfo']['administrative'][0]['isoName'];
}
}
