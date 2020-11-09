<?php
    $conn = mysqli_connect("localhost","root","","web");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambahmenu($data) {
        //ambil data 
        global $conn;
        $img = htmlspecialchars($data["img"]);
        $nama_menu = htmlspecialchars($data["makanan"]);      
        $harga = htmlspecialchars($data["harga"]);
        $deskripsi = htmlspecialchars ($data["deskripsi"]);

        $query = "INSERT INTO menu_makanan
                    VALUES
                    ('', '$img', '$nama_menu', '$harga', '$deskripsi')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        $query = "SELECT * FROM menu_makanan 
                        WHERE
                    makanan LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' OR
                    deskripsi LIKE '%$keyword%'
                ";
        return query($query);
    }

    function ubah($data) {
        //ambil data 
        global $conn;
        $id = $data["id"];
        $img = $data["img"];
        $nama_menu = htmlspecialchars($data["makanan"]);      
        $harga = htmlspecialchars($data["harga"]);
        $deskripsi = htmlspecialchars ($data["deskripsi"]);

        $query = "UPDATE menu_makanan SET 
                makanan='$nama_menu',
                img='$img',
                harga='$harga',
                deskripsi='$deskripsi'
                WHERE id = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM menu_makanan WHERE id=$id");
        return mysqli_affected_rows($conn);
    }
    
    //login user
    function signupuser($data) {
        global $conn;
        $email = strtolower($data["email"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        //cek email
        $result = mysqli_query($conn, "SELECT email FROM login WHERE email = '$email'");
        if (mysqli_fetch_assoc($result)) {
            echo " 
                <script>
                    alert('email sudah terdaftar');
                </script>"; 
            return false;
        }
        if ( $password !== $password2 ){
            echo "
                <script>
                    alert('password yang anda masukkan salah');
                </script>";
            return false;
        }
            //enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);
        
            //masukkan data signup ke database
            mysqli_query($conn, "INSERT INTO login VALUES('','$email','$password')");
        
            return mysqli_affected_rows($conn);
    }

    //login admin
    function tambahadmin($data) {
        global $conn;
        $email = strtolower($data["email"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        //cek email
        $result = mysqli_query($conn, "SELECT email FROM admin WHERE email = '$email'");
        
        if (mysqli_fetch_assoc($result)) {
            echo " 
                <script>
                    alert('email sudah terdaftar');
                </script>";
            return false;
        }
        if ( $password !== $password2 ){
            echo "
                <script>
                    alert('password yang anda masukkan salah');
                </script>";
            return false;
        }
            //enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);
        
            //masukkan data signup ke database
            mysqli_query($conn, "INSERT INTO admin VALUES('','$email','$password')");
        
            return mysqli_affected_rows($conn);
    }
    // Search
?>