<!-- 
    Credit of this template : Bilal (General Zod)
    GitHub link : https://github.com/lalBi94
    Theme : Blue
-->

<?php require("database/db_connect.php"); ?>

<html>
    <head>
        <title>DBExplorer - Home</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <haeder>
            <?php require("database/database_informations.php"); ?>
        </header>

        <main>
            <h2>Which tables do you want to consult ?</h2>

            <form method="get">
                <div style="gap: 2%; margin-top: 2%;">
                    <input type="text" name="table">
                    <input style="width: 140px; height: 60px;" type="submit" value="Ok">
                </div>
            </form>

            <div style="margin-top: 2%;" class="db-explorer">
                <?php 
                    if(isset($_GET['table'])){
                        $table = $_GET['table'];
                        $s = "|";
 
                        $getColumnsName = $db->query("SHOW COLUMNS FROM $table");
                        if(!$getColumnsName){
                            echo "<p style='font-size: 1.5rem; color: red;'>La table : <b>$table</b> n'existe pas !</p>";
                            die;
                        }

                        $namesOfColumns = $getColumnsName->fetchAll(PDO::FETCH_ASSOC);

                        $getInfoFromColumns = $db->query("SELECT * FROM $table");
                        $dataInfoFromColumns = $getInfoFromColumns->fetchAll(PDO::FETCH_ASSOC);
                        $numberColomns = 0;
                        $index = 0;

                        echo "<table class='home-table'>";
                        echo "<tr>";
                        foreach($namesOfColumns as $c => $v){
                            foreach($v as $i => $j){
                                if($i != "Field"){
                                    echo "";
                                } else{
                                    if($c == 0){
                                        echo "<th class='home-th'>&nbsp;$s $j $s</th>";
                                        $numberColomns++;
                                    } else{
                                        echo "<th class='home-th'>&nbsp;$j $s</th>";
                                        $numberColomns++;
                                    }
                                }
                            }
                        }
                        echo "</tr>";

                        foreach($dataInfoFromColumns as $c => $v){
                            echo "<tr>";
                            foreach($v as $i => $j){
                                echo "<td class='home-td'>$j</td>";
                            }
                            echo "</tr>";
                        }

                        echo "</table>";
                    }
                ?>
            </div>
        </main>
    </body>
</html>