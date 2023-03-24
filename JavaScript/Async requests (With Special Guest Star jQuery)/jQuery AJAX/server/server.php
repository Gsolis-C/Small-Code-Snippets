<?php
    /*Function that Creates a 3x3 Table of Random Numbers*/
    function create_table(){
        $content="<table>";
        for($i=0;$i<=3;$i++){
            $content.="<tr>";
            for($j=0;$j<=3;$j++){
                $content.="<td>";
                $content.= rand(($_POST['lowNumber']),$_POST['highNumber']);
                $content.="</td>";
            }
            $content.="</tr>";
        }
        $content.="</table>";
        $content.="<br><br>";
        $content.=var_dump($_POST);
        return $content;
    }
    echo(create_table());
?>