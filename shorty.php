<?
 // what: SMURLS: Self-Made URL Shortener
 // who:  https://github.com/inbi

$urlid = $_REQUEST["id"];
$longurl = "";

if($urlid > 0) {
    // open csv and check if provided req.id has a long url assigned
    $handle = fopen ("./db/shurl.csv", "r");
    while (!feof ($handle)) {
      $buffer = fgets($handle, 4096);
      //echo $buffer;
      $csvfields = explode(",", $buffer);
      if($csvfields[0] == $urlid) {
         //echo "found request-id";
         $longurl = trim($csvfields[1]);
         break;
         }
      }
    fclose ($handle);
    //echo "url-id:".$urlid."<br>longurl:".$longurl;

    // redirect magic
    if (strlen($longurl)>0) {
        header ("Location: ".$longurl);
        exit;
        }
    else {
        echo "<big>I'm sorry, Dave. I'm afraid I can't do that.</big><br><br>I think you know what the problem is just as well as I do.";
        }
   }
else {
	echo "<big>I've just picked up a fault in the AE-35 unit.</big><br><br>We need an Integer > 0 to proceed.";
	}

?>
