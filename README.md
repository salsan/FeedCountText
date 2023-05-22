# FeedCountText (Abandoned)

**This project has been abandoned due to changes made by Google to FeedBurner, which removed the functionality of displaying the subscriber count. Previously, it was possible to activate this feature in the "Publicize --> FeedCount --> Active" menu**.


This script display Feedburner subscriber Count in plain text

## Reason

On April 14, 2021, [Google announced](https://support.google.com/feedburner/answer/10483501) that they would migrate FeedBurner to new infrastructure but remove certain "non-core" features, including email subscriptions, browser-friendly viewing, and password protection.


## Impact on the Project

Due to the changes made by Google to FeedBurner, the FeedCountText project is no longer able to provide an updated count of subscribers. As a result, we have decided to abandon the project.

We apologize for any inconvenience caused and understand that this may affect the usefulness of the project. However, due to the changes made by Google, we can no longer guarantee the proper and reliable operation of the program.

## Required

In your Feedbburner account active FeedCount

Publicize --> FeedCount --> Active

## Example
### URI
    Mashable 	http://feedcounttext.appspot.com/FeedContText.php?uri=http://feeds.feedburner.com/~fc/Mashable <br />

    ChessLogger	http://feedcounttext.appspot.com/FeedContText.php?uri=http://feeds.feedburner.com/~fc/ChessLogger

## PHP

     $fb_id = "Mashable"; // here your id account 
     $fb_uri = "http://feeds.feedburner.com/~fc/"; 
     $app_uri = "http://feedcounttext.appspot.com/?uri="; 
     $count_uri = $app_uri.$fb_uri.$fb_id;
     $fb_count = fopen($count_uri, "r"); 
     echo fgets($fb_count); 
     fclose($fb_count);

# License
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


# Contact
Salvatore Santagati (<mailto:me@salsan.dev>)
