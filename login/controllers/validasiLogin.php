<?php
    session_start();
    require '../../systems/koneksi.php';

    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string(MD5($_POST['password']));

    $userQuery = mysql_query("SELECT * from user WHERE username = '$username'");
    $user = mysql_fetch_array($userQuery);

    if ($username == $user['username']) {
        if ($user['status'] == 'aktif') {
            if ($password == $user['password']) {
                $_SESSION['login'] = $user['id_level'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['id_user'] = $user['id_user'];
                header('location:../../index.php');
            }else {
                ?><script>alert('Password salah');
                document.location="../index.php"</script><?php
            }
        }else {
            ?><script>alert('Akun non-aktif');
            document.location="../index.php"</script><?php
        }
    }else {
        ?><script>alert('Akun tidak terdaftar');
        document.location="../index.php"</script><?php
    }
?>