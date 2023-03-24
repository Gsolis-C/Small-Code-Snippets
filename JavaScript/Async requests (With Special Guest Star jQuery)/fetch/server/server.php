<?php
    /*Function that Creates a 3x3 Table of Random Numbers*/
    function create_table(){
        /*Decode the incoming JSON and store its contents */
        $data= json_decode(file_get_contents('php://input'), true);
        $content="<table>";
        /*Populate the table */
        for($i=0;$i<=3;$i++){
            $content.="<tr>";
            for($j=0;$j<=3;$j++){
                $content.="<td>";\
                /*Use the Data from the page to generate the numbers */
                $content.= rand($data["lowNumber"],$data["highNumber"]);
                $content.="</td>";
            }
            $content.="</tr>";
        }
        $content.="</table>";
        return $content;
    }
    echo(create_table());
?>