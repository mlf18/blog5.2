<?php 
$dom = new DOMDocument("1.0");
    $node = $dom->createElement("markers");
    $parnode = $dom->appendChild($node);
    header("Content-type: text/xml");
?>

// Iterate through the rows, adding XML nodes for each

@foreach($locations as $row)
   {{$node = $dom->createElement("marker")}} 
    {{$newnode = $parnode->appendChild($node)}}
    {{$newnode->setAttribute("id",$row['id'])}}
    {{$newnode->setAttribute("name",$row['nama'])}}
    {{$newnode->setAttribute("lat", $row['latitude'])}}
    {{$newnode->setAttribute("lng", $row['longitude'])}}
@endforeach
{{ $dom->saveXML() }}