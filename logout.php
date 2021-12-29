<?php
session_start();
session_destroy();
echo "
<script>alert('Anda Berhasil Logout');location='login.php';</script>;
";
