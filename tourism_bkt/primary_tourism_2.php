

<?php

	include('../connect.php');

	$querysearch="select tourism.id, tourism.name, ST_X(ST_Centroid(geom)) AS lng, ST_Y(ST_CENTROID(geom)) As lat, 
					tourism_gallery.gallery_tourism from tourism
					LEFT JOIN tourism_gallery ON tourism.id = tourism_gallery.id
					where tourism.id in ('tw001','tw011', 'tw004', 'tw005')')";

	$result=mysqli_query($conn, $querysearch);
	
	  while($baris = mysqli_fetch_array($result))
	    {
	        $id=$baris['id'];
	        $nama=$baris['name'];
	        $lng=$baris['lng'];
			$lat=$baris['lat'];
			    
	        $dataarray[]=array('id'=>$id,'name'=>$nama,'lng'=>$lng,'lat'=>$lat);
			
	    }
	   echo json_encode ($dataarray);

?>