<?php
// Definisikan interface Logger
interface Logger {
    // Method abstrak log yang harus diimplementasikan oleh kelas yang mengimplementasi interface ini
    public function log($message);
}

// Definisikan class FileLogger yang mengimplementasikan interface Logger
class FileLogger implements Logger {
    private $handle;   // Variabel untuk menyimpan handle file
    private $logFile;  // Variabel untuk menyimpan nama file log

    // Constructor untuk membuka file log
    public function __construct($filename, $mode = 'a') {
        $this->logFile = $filename;
        // Membuka file log dalam mode append ('a' berarti menambahkan di akhir file)
        $this->handle = fopen($filename, $mode);
        
        // Jika file tidak dapat dibuka, hentikan program dengan pesan error
        if (!$this->handle) {
            die('Could not open the log file');
        }
    }

    // Implementasi method log yang menuliskan pesan ke file log
    public function log($message) {
        // Menambahkan tanggal dan waktu ke pesan log
        $message = date('F j, Y, g:i a') . ': ' . $message . "\n";
        // Menuliskan pesan ke file log
        fwrite($this->handle, $message);
    }

    // Destructor untuk menutup file saat objek dihancurkan
    public function __destruct() {
        // Jika file masih terbuka, tutup file
        if ($this->handle) {
            fclose($this->handle);
        }
    }
}

// Definisikan class DatabaseLogger yang mengimplementasikan interface Logger
class DatabaseLogger implements Logger {
    // Implementasi method log untuk mencetak pesan log yang mensimulasikan penyimpanan di database
    public function log($message) {
        // Format pesan untuk output ke database (sebagai simulasi)
        echo sprintf("Log %s to the database\n", $message);
    }
}

// Contoh penggunaan 1: Membuat objek FileLogger dan menuliskan pesan ke file log
$logger = new FileLogger('./log.txt', 'w');  // Membuka file log dalam mode write ('w' akan menimpa isi file)
$logger->log('PHP interface is awesome');     // Menuliskan pesan "PHP interface is awesome" ke file log

// Contoh penggunaan 2: Membuat array loggers yang berisi objek FileLogger dan DatabaseLogger
$loggers = [
    new FileLogger('./log.txt'),   // Membuat objek FileLogger yang membuka file log dalam mode append (default)
    new DatabaseLogger()           // Membuat objek DatabaseLogger
];

// Mengiterasi array loggers dan memanggil method log untuk setiap logger
foreach ($loggers as $logger) {
    $logger->log('Log message');  // Menuliskan "Log message" ke file log dan database
}
?>
