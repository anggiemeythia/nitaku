<?php
session_start();
session_destroy();
redirect(site_url('/login'));
?>
