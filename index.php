<?php

//Redirect to admin
$redirect = "Location: " . get_admin_url();
header($redirect);

//Yep, that's it! (for now)