<?php

 include 'inc/db.php';
 $c = connect_db();

?>
<html>
<head>
  <link rel="stylesheet" href="css/dark-theme.css">
</head>

<body>

<table class="wb"> 
<?php 
    $res = $c->query("select firstname, lastname from user");
    while ($r = $res->fetch_assoc()) {
        print "<tr><td class=\"wb\">".$r['firstname']."</td><td class=\"wb\">".$r['lastname']."</td></tr>";
    }

?>
</table>
<p>
    ball
</body>
</html>