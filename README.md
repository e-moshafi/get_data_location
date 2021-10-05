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
$jdl=new gdl(//latitude,//longitude);
//latitude
echo $gdl->latitude;
//longitude
echo $gdl->longitude;
//continent
echo $gdl->continent;
//continent Code
echo $gdl->continentCode;
//country Name
echo $gdl->countryName;
//country Code
echo $gdl->countryCode;
//principal Subdivision
echo $gdl->principalSubdivision
//principal Subdivision Code
echo $gdl->principalSubdivisionCode;
//city
echo $gdl->city;
//locality 
echo $gdl->locality
//postcode
echo $gdl->postcode
// country International Organization for Standardization name
echo $gdl->isoname
```````
***I hope you enjoy it***

***CRATE BY ERFAN MOSHAFI***
