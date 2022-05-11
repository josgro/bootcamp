 <?php

class Company {

    private $rides;

    function __construct(){
        $this->rides = [];
    }

    public function addRide($rides){
        array_push($this->rides, $ride);
    }

    public function rideData(){
        foreach($this->rides as $ride){
            echo '<br> ';
            echo 'Name: ' . $ride->name . ' ';
            echo 'Revenue: ' . $ride->fare();
        }
    }


    function income() {


    }
}

?>
