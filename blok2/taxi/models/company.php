 <?php

class Company {

    private $rides;

    function __construct(){
        $this->rides = [];
    }

    public function addRide($ride){
        array_push($this->rides, $ride);
    }

    public function rideData(){
        foreach($this->rides as $ride){
            echo '<br> ';
            echo 'Name: ' . $ride->name . ' ';
            echo 'Day: ' . $ride->day . ' ';
            echo 'Fare: ' . $ride->fare();
        }
    }

    public function income(){
        $income = 0;

        foreach($this->rides as $ride){
            $income += $ride->fare();
        }
        return $income;
    }

    public function totalDist(){
        $totalDist = 0;

        foreach($this->rides as $ride){
            $totalDist += $ride->rideDistance;
        }
        return $totalDist;
    }

    public function averageDist(){
        
        $averageDist = $this->totalDist() / count($this->rides);

        return $averageDist;
    }

    public function longestRide(){
        $longestRide = $this->rides[0];

        foreach($this->rides as $ride){
            if($longestRide->rideDistance < $ride->rideDistance){
                $longestRide = $ride;
            }
        }
        return $longestRide->name;
    }

}

?>
