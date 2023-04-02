
    <?php
    // Class Bentuk2D
    class Bentuk2D {
      // properties
      protected $jenis;
    
      // constructor
      public function __construct($jenis) {
        $this->jenis = $jenis;
      }
    
      // method
      public function getJenis() {
        return $this->jenis;
      }
    
      public function luas() {
        // implementasi luas dalam masing-masing class turunan
      }
    
      public function keliling() {
        // implementasi keliling dalam masing-masing class turunan
      }
    }
    
    // Class Lingkaran
    class Lingkaran extends Bentuk2D {
      // properties
      private $r;
    
      // constructor
      public function __construct($r) {
        parent::__construct('Lingkaran');
        $this->r = $r;
      }
    
      // method
      public function getR() {
        return $this->r;
      }
    
      public function luas() {
        return pi() * $this->r * $this->r;
      }
    
      public function keliling() {
        return 2 * pi() * $this->r;
      }
    }
    
    $lingkaran1 = new Lingkaran(7); // membuat objek Lingkaran dengan jari-jari 7
echo $lingkaran1->getJenis(); // output: Lingkaran
echo $lingkaran1->luas(); // output: 153.9380400259
echo $lingkaran1->keliling(); // output: 43.982297150257
?>
