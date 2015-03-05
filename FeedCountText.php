<?php
/*
Copyright (C) 2015 Salvatore Santagati <salvatore.santagati@gmail.com>
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>
 */


function get_rgb ( $color ) {

	$r = ($color >> 16) & 0xFF;
	$g = ($color >> 8) & 0xFF;
	$b = $color & 0xFF;	

	return ($r . $g . $b);

}



$WhitelistDomain = 'feeds.feedburner.com';

$FeedCountUri = $_GET["uri"];
$FeedUri = parse_url($FeedCountUri);
$FeedHost = $FeedUri['host'];

if ( $FeedHost == $WhitelistDomain ) {

	$FeedCountImage = imagecreatefromgif($FeedCountUri);
	$FeedText	= imagecreatetruecolor( 36, 7 );

	// Copy Feed Count Section 
	imagecopy( 	
		$FeedText,
		$FeedCountImage,
		0,
		0,
		4,
		6,
		36,
		12	
	);		

	// Get Background color
	$bg_color =  imagecolorat($FeedText, 0, 0);
	$bg =  get_rgb ( $bg_color );

	$value = '';
	$result = '';

	for ( $i = 0; $i < 36; $i++ ) {
		for ( $x = 0; $x < 7; $x++ ) { 
	
			$pixel_color = imagecolorat($FeedText, $i, $x);
		
			$rgb = get_rgb ( $pixel_color );

	
			if ( $bg == $rgb )
				$value = "0" . $value;
				else 	$value = "1" . $value;
		}	
	
		switch ($value) {
			// 0
			case "0111110" :
				$num = 0;
				$i += 4;
				$result = $result . $num;
					
				break;
			// 1 or 2
			case "1000010" :
				$pixel_color = imagecolorat($FeedText, $i+1, 0);
	
				$pixel_rgb = get_rgb ( $pixel_color );
		
				if ( $pixel_rgb != $bg )
					$num = 2;
					else 	
					$num = 1;

				$i +=4;
				$result = $result . $num;
	
				break;
		
			// 3
			case "0100010" :
				$num = 3;
				$i +=4;
				$result = $result . $num;

				break;			
			// 4
			case "0011000" :
				$num = 4;
				$i +=4;
				$result = $result . $num;

				break;
		
			// 5 
			case "0100111" :
				$num = 5;
				$i += 4;
				$result = $result . $num;

				break;
		
			// 6
			case "0111100" :
				$num = 6;
				$i += 4;
				$result = $result . $num;
	
				break;
		
			// 7 
			case "0000001" :
				$num = 7;
				$i +=4;
				$result = $result . $num;
	
				break;
			
			// 8
			case "0110110" :
				$num = 8;
				$i +=4;
				$result = $result . $num;

				break;
		
			// 9
			case "0000110" :
				$num = 9;
				$i += 4;
				$result = $result . $num;

				break;
	
			default:
		}
	

		$value = '';
	
	}
	echo $result;
}	
else echo '-1';		
?>
