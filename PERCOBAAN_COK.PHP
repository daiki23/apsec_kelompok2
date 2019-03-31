<?php include 'koneksi.php';

 $username = addslashes(strip_tags ($_POST['username']));

 $password = addslashes(strip_tags ($_POST['password']));

 $confirm = addslashes(strip_tags ($_POST['confirm'])); 

 $email = addslashes(strip_tags ($_POST['email'])); 

 $level = addslashes(strip_tags ($_POST['level'])); 
 //script ini untuk mengecek apakah form sudah terisi semua 
 if ($username&&$password&&$confirm) { //berfunsgi untuk mengecek form tidak boleh lebih dari 10 
 	if (strlen($username) > 10){

    echo "username tidak boleh lebih dari 10 karakter";
}
else {
    //password harus 6-25 karakter
    if (strlen($password) > 25 || strlen($confirm) < 6){
        echo "Password harus antara 6-25 karakter";
    }
    else {
    //untuk mengecek apakah form password dan form konfirmasi password sudah sama
        if ($password == $confirm){
            $sql_get = mysqli_query ("SELECT * FROM users WHERE username = '$username'");
            $num_row = mysqli_num_rows($sql_get);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
            if ($num_row ==0) {
                $password = $password;
                $confirm = $confirm;

                $query = "INSERT INTO user(username, email, password,level)
				VALUES('$username', '$email', '$password','$level')";
				mysqli_query($db, $query);

            }
            else {
                echo "Username sudah terdaftar";
            }
        }   else {
            echo "Password yang kamu masukan tidak sama!";
            }
        }
    }
} else {
echo "Tolong penuhi form pendaftaran!";
}
?>


