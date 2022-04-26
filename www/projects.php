<?php
include "inc/header.php";
?>    


<?php

// Perform insert
if (isset($_POST['pname'])) {
    $c->query("insert into project (name) values('".$_POST['pname']."');");
}

// perform delete
if (isset($_POST['delete_id'])) {
    $c->query("delete from project where id=".$_POST['delete_id'].";");
}

?>

<table class="central">
  <tr><td>


<table class="wb"> 
<?php 
    $res = $c->query("select id, name from project");
    while ($r = $res->fetch_assoc()) {
        print "<tr>";
        print "<tr><td class=\"wb\">".$r['name']."</td>";

        // Delete button

        print "<td><form method=\"post\" action=\"projects.php\">";
        print "<input type=\"submit\" value=\"Delete\">";

        print "<input type=\"hidden\" name=\"delete_id\" value=\"".$r['id']."\">";
        

        print "</form>";
        print "</tr>";
    }

?>
</table>
<table class="central"><tr><td>
<form  method="post" action="projects.php">
  <label for="name">Project name:</label><br>
  <input type="text" id="pname" name="pname"><br>
  <input type="submit" value="New project">
</form> 
  </td></tr>
</table>
<p>

</tr></td></table>

<?php
include"inc/footer.php";
?>


</body>
</html>