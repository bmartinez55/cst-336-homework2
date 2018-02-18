<?php
    function Go(){
        $songs=array("https://www.youtube.com/embed/sdpJ_cQlMnk?autoplay=1","https://www.youtube.com/embed/CSD2J8yaMmM?autoplay=1","https://www.youtube.com/embed/IPw9gbbQ1xA?autoplay=1");
        $album=array("MikeJones","Stankonia","FridayAlbum");
        
        $randIndex = rand(0,2);
        
        $song = $songs[$randIndex];
        $cover = $album[$randIndex];
        
        foreach($songs as $s){
            if(count($songs)<0 or count($cover)<0){
                return false;
            }
        }
        display($song, $cover);
    }
    
    function display($song, $cover){
        echo "<img src='$cover.png' width='400' height='400'/>";
        echo "<iframe width='560' height='400' src='$song' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
    }
    
    function displayAlbums(){
        $randomAlbums=array("1stRound","2001","2002","Aquemini","ATLiens");
        foreach($randomAlbums as $ran){
            echo "<img src='$ran.png' width='200' height='200'/>". "    ";
        }
    }
?>