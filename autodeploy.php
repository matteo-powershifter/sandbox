<?php

// Git deploy script
// - webhook on git calls this upon a push to the repo
// - script pulls files from git, then resets webserver components


$out = '';
$out .= shell_exec('git fetch --all');
$out .= shell_exec('git checkout --force "origin/master"');

?>

<!DOCTYPE HTML>
<html>
    <body>
        <p> Git Deployment Script </p>

        <?php echo $out; ?>
    </body>
</html>

