
 <html>
     <head>
     <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet/v0.7.7/leaflet.css"/>
    <script src="https://d19vzq90twjlae.cloudfront.net/leaflet/v0.7.7/leaflet.js"></script>
    <script src="jquery.js"></script>
     </head>
     <body>
                                                <div id="map" style="height: 250px; background: #eee; border: 2px solid #aaa;"></div>

                                                <script type="text/javascript">

                                                    var options = {
                                                        center: [35.69827, 51.34099],
                                                        zoom: 10
                                                    }

                                                    var map = L.map('map', options);

                                                    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'osm-bright'})
                                                        .addTo(map);
                                                    var myMarker = L.marker([<?php if(!empty($row['lat'])&&!empty($row['lng'])){echo $row['lat'].','.$row['lng'];}else{ echo '35.69827, 51.34099';}
                                                        ?>], {title: "MyPoint", alt: "The Big I", draggable: true})
                                                        .addTo(map)
                                                    .on('dragend', function() {
                                                            var coord = String(myMarker.getLatLng()).split(',');
                                                            console.log(coord);
                                                            var lat = coord[0].split('(');
                                                            console.log(lat);
                                                            var lng = coord[1].split(')');
                                                            console.log(lng);
                                                            $.ajax({
                                                                type:'post',
                                                                url:'getlocation.php',
                                                                data:{
                                                                    lat:lat[1],
                                                                    long:lng[0]
                                                                },
                                                                success:function (response){
                                                                    myMarker.bindPopup(response).openPopup();
                                                                }
                                                            });
                                                        });

                                                </script>

     </body>
 </html>