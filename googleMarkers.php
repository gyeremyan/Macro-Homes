<?php
session_start();
require("database.php");


function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}


// Select all the rows in the markers table
$where = $_SESSION['varWhere'];
$query = "SELECT * FROM combinedhomes $where";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'id="' . parseToXML($row['id']) . '" ';
  echo 'image="' . parseToXML($row['image']) . '" ';
  echo 'address="' . parseToXML($row['address']) . '" ';
  echo 'city="' . parseToXML($row['city']) . '" ';
  echo 'state="' . parseToXML($row['state']) . '" ';
  echo 'zipcode="' . parseToXML($row['zipcode']) . '" ';
  echo 'Latitude="' . $row['Latitude'] . '" ';
  echo 'Longitude="' . $row['Longitude'] . '" ';
  echo 'Type="' . $row['Type'] . '" ';


  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>';

?>
