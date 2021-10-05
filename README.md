# getdatalocation                              `get data location(jdl)`
`about project:`
you can getting Informational location from Longitude &latitude using this small library.
`what you can getting?`

 

 1. continent
 2. continent Code
 3. country Name
 4. country Code
 5. principal Subdivision
 6. principal Subdivision Code
 7. city
 8. locality
 9. postcode
 10. country International Organization for Standardization name
 
 
`how start using?`
 1. add to project 
 
``````php
require "gdl.php";
``````
2. add class to project
```````php
$jdl=new jdl(//latitude,//longitude);
//latitude
echo $jdl->latitude;
//longitude
echo $jdl->longitude;
//continent
echo $jdl->continent;
//continent Code
echo $jdl->continentCode;
//country Name
echo $jdl->countryName;
//country Code
echo $jdl->countryCode;
//principal Subdivision
echo $jdl->principalSubdivision
//principal Subdivision Code
echo $jdl->principalSubdivisionCode;
//city
echo $jdl->city;
//locality 
echo $jdl->locality
//postcode
echo $jdl->postcode
// country International Organization for Standardization name
echo $jdl->isoname
```````
***I hope you enjoy it***

***CRATE BY ERFAN MOSHAFI***
