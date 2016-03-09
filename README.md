# srm_portal
portal development project

redirect code:
<?php
ob_start();
if (FORMPOST) {
    if (POSTED_DATA_VALID) {
        header("Location: index.html");
        ob_end_flush();
        exit;
    }
}
/** YOUR LOGINBOX OUTPUT, ERROR MESSAGES ... **/
ob_end_flush();
?>
