<?php
require_once 'koneksi.php';

class Login {
    private $koneksi;

    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    public function loginUser($email, $password) {
        if (!empty(trim($email)) && !empty(trim($password))) {
            // Query untuk mendapatkan data user berdasarkan email
            $query = "SELECT * FROM user_detail WHERE user_email = :email";
            $stmt = $this->koneksi->prepare($query);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $userVal = $row['user_email'];
                $passVal = $row['user_password'];
                $userName = $row['user_fullname'];

                if ($userVal == $email && $passVal == $password) {
                    // Redirect ke halaman home dengan parameter user_fullname
                    header('Location: home.php?user_fullname=' . urlencode($userName));
                    exit();
                } else {
                    // Password salah
                    return "User atau password salah";
                }
            } else {
                // User tidak ditemukan
                return "User tidak ditemukan";
            }
        } else {
            // Data tidak boleh kosong
            return "Data tidak boleh kosong";
        }
    }
}
?>
