<?php
// Definisi interface Logger
interface Logger {
    public function log($message); // Deklarasi method log
}

// Class FileLogger yang mengimplementasikan Logger
class FileLogger implements Logger {
    private $handle;  // Properti untuk menyimpan handle file
    private $logFile; // Properti untuk menyimpan nama file log

    // Constructor untuk membuka file log dengan mode tertentu
    public function __construct($filename, $mode = 'a') {
        $this->logFile = $filename;  // Menyimpan nama file log
        // Menggunakan $this->handle untuk mengakses properti, bukan $this->$handle
        $this->handle = fopen($filename, $mode) 
            or die('could not open this file'); // Membuka file log
    }

    // Method untuk menulis pesan log ke file
    public function log($message){
        $message = date('F j, Y, g:i a') . ': ' . $message . "\n"; // Menyusun pesan log
        fwrite($this->handle, $message); // Menulis pesan log ke file
    }

    // Destructor untuk menutup file ketika objek dihapus
    public function __destruct(){
        if ($this->handle) {
            fclose($this->handle); // Menutup file jika masih terbuka
        }
    }
}

// Class DatabaseLogger yang juga mengimplementasikan Logger
class DatabaseLogger implements Logger {
    public function log($message) { 
        echo sprintf("Log %s to the database\n", $message); // Simulasi penyimpanan log ke database
    }
}

// Membuat objek FileLogger dan menulis log ke file
$logger = new FileLogger('./log.txt', 'w');
$logger->log('PHP interface is awesome');

// Membuat array loggers yang berisi FileLogger dan DatabaseLogger
$loggers = [
    new FileLogger('./log.txt'),
    new DatabaseLogger()
];

// Menggunakan loop untuk menulis log ke setiap logger
foreach ($loggers as $logger){
    $logger->log('Log message');
}
?>
