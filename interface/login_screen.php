<?php

$ignoreAuth = true;
require_once("./globals.php");
?>
<html>
<body>

<script>
 top.location.href='<?php echo "$rootdir/login/login.php?site="; ?>' + <?php echo js_url($_SESSION['site_id']); ?>;
</script>

<a href='<?php echo "$rootdir/login/login.php?site=" . attr_url($_SESSION['site_id']); ?>'><?php echo xlt('Follow manually'); ?></a>

<p>
<?php echo xlt('OpenEMR requires Javascript to perform user authentication.'); ?>

</body>
</html>
