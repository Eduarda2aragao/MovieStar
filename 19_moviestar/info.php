<?php
if (extension_loaded('gd') && function_exists('gd_info')) {
    echo "GD instalado";
} else {
    echo "GD não instalado";
}

echo phpinfo();
