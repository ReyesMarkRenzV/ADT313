<h1>Hands-on Activity<h1>
<?php


$table = array(
    "header"=> array(
    "studentid",
    "firstname" ,
    "middlename" ,
    "lastname" ,
    "section" ,
    "course" ,
    "yearlevel" 
    ),

    "body" => [
        array(
            "firstname" =>"firstname",
            "middlename" => "middlename",
            "lastname" => "lastname",
            "section" => "section",
            "course" => "course",
            "yearlevel" => "yearlevel"
        ),
    
    array(
        "firstname" =>"firstname",
        "middlename" => "middlename",
        "lastname" => "lastname",
        "section" => "section",
        "course" => "course",
        "yearlevel" => "yearlevel"
    ),

    array(
        "firstname" =>"firstname",
        "middlename" => "middlename",
        "lastname" => "lastname",
        "section" => "section",
        "course" => "course",
        "yearlevel" => "yearlevel"
    ),
   
    array(
        "firstname" =>"firstname",
        "middlename" => "middlename",
        "lastname" => "lastname",
        "section" => "section",
        "course" => "course",
        "yearlevel" => "yearlevel"
    ), 

    array(
        "firstname" =>"firstname",
        "middlename" => "middlename",
        "lastname" => "lastname",
        "section" => "section",
        "course" => "course",
        "yearlevel" => "yearlevel"
    ),
    array(
        "firstname" =>"firstname",
        "middlename" => "middlename",
        "lastname" => "lastname",
        "section" => "section",
        "course" => "course",
        "yearlevel" => "yearlevel"
    ),

    array(
        "firstname" =>"firstname",
        "middlename" => "middlename",
        "lastname" => "lastname",
        "section" => "section",
        "course" => "course",
        "yearlevel" => "yearlevel"
    ),

    array(
        "firstname" =>"firstname",
        "middlename" => "middlename",
        "lastname" => "lastname",
        "section" => "section",
        "course" => "course",
        "yearlevel" => "yearlevel"
    ),

    array(
        "firstname" =>"firstname",
        "middlename" => "middlename",
        "lastname" => "lastname",
        "section" => "section",
        "course" => "course",
        "yearlevel" => "yearlevel"
    ),

    array(
        "firstname" =>"firstname",
        "middlename" => "middlename",
        "lastname" => "lastname",
        "section" => "section",
        "course" => "course",
        "yearlevel" => "yearlevel"
    ),

    ]


);
?>

<table border="1">
    <thead>
        <?php
        
        foreach ($table['header'] as $header) {
            echo "<th>$header</th>";
        }
        ?>
    </thead>
    <tbody>
        <?php
        
        foreach ($table['body'] as $row) {
            echo "<tr>";
            foreach ($table['header'] as $header) {
               
                echo "<td>" . (isset($row[$header]) ? $row[$header] : '') . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>