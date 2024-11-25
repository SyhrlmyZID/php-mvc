<?php 

class App {
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL() 
    {
        if (isset($_GET['url'])) {
            // Rtim menghapus '/' pada bagian url akhir
            $url = rtrim($_GET['url'], '/');
            // Filter var blokir url custom hack users
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}

?>