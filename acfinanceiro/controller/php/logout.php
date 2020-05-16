<?php
session_start();
session_destroy();
header('Location: /app/acfinanceiro/view/login/');
exit();