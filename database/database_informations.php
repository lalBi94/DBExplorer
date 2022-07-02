<?php require("db_connect.php"); ?>
<?php require("nav_footer.php");?>

<style>
    .th-table, thead {
        background-color: #0A1B2F;
        color: #fff;
    }

    tbody {
        background-color: white;
    }

    .db-table {
        margin: 0 auto;
        margin-top: 2%;
        margin-bottom: 2.5%;
        border: 2px solid #0A1B2F;
        background-color: #0A1B2F;
        letter-spacing: 1px;
        font-family: sans-serif;
        font-size: 1.35rem;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        padding: 0.2%;
        text-align: center;
    }

    .td-table {
        border: 1px solid rgb(190, 190, 190);
        padding: 5px 10px;
    }

    .ok {
        color: green;
    }

    .notok {
        color: red;
    }
</style>

<table class="db-table">
    <thead>
        <tr class="tr-table">
            <th class="th-table" colspan="2">Database Informations</th>
        </tr>
    </thead>
    <tbody>
        <tr class="tr-table">
            <td class="td-table">Database</td>
            <td class="ok" class="td-table" ><?=$useDB?></td>
        </tr>
        <tr>
            <td class="td-table">Logged on</td>
            <td class="ok" class="td-table"><?=$user?></td>
        </tr>
        <tr class="tr-table">
            <td class="td-table">Status</td>
            <td class="<?php if($connect){print "ok";}else{print "notok";}?>"><?php if($connect){print "connect";}else{print "error";} ?></td>
        </tr>
    </tbody>
</table>