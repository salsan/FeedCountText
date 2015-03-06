# FeedCountText
This script display Feedburner subscriber Count in plain text

#Required
In your Feedbburner account active FeedCount

Publicize --> FeedCount --> Active

#Example
## URI
Mashable 	http://feedcounttext.appspot.com/FeedContText.php?uri=http://feeds.feedburner.com/~fc/Mashable <br />
ChessLogger	http://feedcounttext.appspot.com/FeedContText.php?uri=http://feeds.feedburner.com/~fc/ChessLogger
## PHP

     $fb_id = "Mashable"; // here your id account 
     $fb_uri = "http://feeds.feedburner.com/~fc/"; 
     $app_uri = "http://feedcounttext.appspot.com/?uri="; 
     $count_uri = $app_uri.$fb_uri.$fb_id;
     $fb_count = fopen($count_uri, "r"); 
     echo fgets($fb_count); <br />
     fclose($fb_count); <br />

#License
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.


#Contact
Salvatore.Santagati@gmail.com
