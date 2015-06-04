<?php
	try {
		// get url from post method in 'translate' variable
		if(isset($_POST['translate'])){
			$url = $_POST['translate'];

			// get xml content from URL
		    $fileContents = @file_get_contents($url);

		    // Error handeling for URL correction
		    if($fileContents === FALSE) {
		    	echo 404;	// of XML at URL is not available
		    } else {
		    	// of XML at URL is available
		    	$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents); // sanitise xml
			    $fileContents = trim(str_replace('"', "'", $fileContents)); // sanitise xml
			    $simpleXml = simplexml_load_string($fileContents); // load xml as string
			    $json = json_encode($simpleXml); // convert xml to json
			    echo $json; // return json

			    //CODE TO SAVE XML INTO a JSON FILE
			    $json_parts = pathinfo($url);
				$json_file = $json_parts['filename'] . '.json'; // since PHP 5.2.0
				$myfile = fopen($json_file, "w") or die("Unable to open file!");
				fwrite($myfile, $json);
				fclose($myfile);
		    }
		} else {
			echo "Err!"; // in case someone try to access the script will get this.
		}
	} catch (Exception $e) {
    	echo "Err!"; // Suppressing all error.
	}
?>
