<?php
    /*Function that Creates a 3x3 Table of Random Numbers*/
    function create_table(){
        $content="<table>";
        for($i=0;$i<=3;$i++){
            $content.="<tr>";
            for($j=0;$j<=3;$j++){
                $content.="<td>";
                $content.= rand(0,100);
                $content.="</td>";
            }
            $content.="</tr>";
        }
        $content.="</table>";
        return $content;
    }
    echo(create_table());
?>