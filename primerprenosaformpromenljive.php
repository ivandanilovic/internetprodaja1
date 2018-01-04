//---------------------------------------------------------
		$origin=$HTTP_SERVER_VARS["QUERY_STRING"];

		$nas_array = explode("&",$origin);
		
	foreach ($nas_array as $polje)
	{
		 $polje_array = explode("=",$polje);
			$rNazivPolja=$polje_array[0];  
			$rVrednostPolja=$polje_array[1];
			
			if ($rNazivPolja=="ime") {
				$rime=$rVrednostPolja; 
                // pocetak konverzije
   				$new_string=urlencode ($rime);
   				$new_string=ereg_replace("%0D", " ", $rime);
   				$rime=urldecode  ($new_string);
                // == zavrsetak konverzije 
        	};
			if ($remail=="email") {
				$remail=$rVrednostPolja; 
                // pocetak konverzije
				$remail=str_replace("%40","@",$remail);
                // == zavrsetak konverzije 
        	};
			if ($rNazivPolja=="username") {
				$rusername=$rVrednostPolja;
                // pocetak konverzije
   				$new_string=urlencode ($rusername);
   				$new_string=ereg_replace("%0D", " ", $rusername);
   				$rusername=urldecode  ($new_string);
                // == zavrsetak konverzije 
        	};
			if ($rNazivPolja=="prihvatam") {
				$rprihvatam=$rVrednostPolja;
                // pocetak konverzije
   				$new_string=urlencode ($rprihvatam);
   				$new_string=ereg_replace("%0D", " ", $rprihvatam);
   				$rprihvatam=urldecode  ($new_string);
                // == zavrsetak konverzije 
        	};
	};
//---------------------------------------------------------
