<?php

setcookie("meucookie", "testando cookie", time() + 20);

echo "cookie: " . $_COOKIE["meucookie"];
