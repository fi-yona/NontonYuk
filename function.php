<?php
	define("DEVELOPMENT", true);

	function useHeader(){
		?>
		<h1>NontonYuk!</h1>
		<?php
	}

	function useFooter(){
		?>
		<p>10119013 - Fiona Avila Putri &#169; 2021</p>
		<?php
	}

	function getProvinsi(){
        $url = 'https://dev.farizdotid.com/api/daerahindonesia/provinsi';
        $getProvinsi = file_get_contents($url);
        return $getProvinsi;
    }    

    function getKabupaten($provinsi){                        
        $url = 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='.$provinsi;
        $getKabupaten = file_get_contents($url);                                    
        return $getKabupaten;
    }
	
?>