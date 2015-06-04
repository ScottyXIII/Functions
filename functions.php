<?php 

	/**
	 * Gets the extension of a file.
	 * 
	 * @param int $length
	 * @return string
	 */
	function GenerateRandomString($length = 10) { 
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	    $randomString = ''; 
	   
	    for ($i = 0; $i < $length; $i++) { 
			$randomString .= $characters[rand(0, strlen($characters) - 1)]; 
	    } 

	    return $randomString; 
	}


	/**
	 * Limits the number of words. Uses Reg Exp. 
	 *
	 * @param string $str
	 * @param int $limit
	 * @param string $endChar
	 * @return string
	 */
	function WordLimiter ( $str, $limit = 100, $endChar = '&#8230;' )
	{
		if (trim($str) == '') {
			return $str;
		}

		preg_match('/^\s*+(?:\S++\s*+){1,' . (int)$limit .'}/', $str, $matches);
		
		if (strlen($str) == strlen($matches[0])) {
			$endChar = '';
		}

		return rtrim($matches[0]) . $endChar;
	}

	/**
	 * Gets the extension of a file.
	 * 
	 * @param string $file
	 * @return string 
	 */
	function GetExt($file)
	{
		$pathParts = pathinfo($file);
		return $pathParts['extension'];
	}

	/**
	 * Gets the current page URL (http or https) 
	 * Adds port number if not 80
	 * 
	 * @return string 
	 */
	function GetUrl() { 
	    $url = 'http'; 
	    
	    if (!empty($_SERVER['HTTPS'])) {
	    	$url .= "s";
	    }

	    $url .= "://"; 
	    
	    if ($_SERVER["SERVER_PORT"] != "80") { 
	        $url .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"]; 
	    } else { 
	        $url .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; 
	    } 

	    return $url; 
	}

?> 
