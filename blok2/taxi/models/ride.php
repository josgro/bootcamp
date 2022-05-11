<?php

class Ride {
    public $name;
    public $startTime;
    public $endTime;
    public $rideTime;
    public $rideDistance;
    public $day;

    function __construct($name, $startTime, $endTime, $rideTime, $rideDistance, $day){
        $this->name = $name;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->rideTime = $rideTime;
        $this->rideDistance = $rideDistance;
        $this->day = $day;
    }

    public function fare() {
        if($this->day === 'Monday' && $this->startTime > 700){
            return ($this->rideDistance*0.5) + ($this->rideTime*0.17);
        } elseif($this->day === 'Tuesday' || $this->day === 'Wednesday' || $this->day === 'Thursday') {
            return ($this->rideDistance*0.5) + ($this->rideTime*0.17);
        } elseif($this->day === 'Friday' && $this->startTime < 2200) {
            return ($this->rideDistance*0.5) + ($this->rideTime*0.17);
        } else {
            return (($this->rideDistance*0.5) + ($this->rideTime*0.17)) * 1.15;
        }
    }
}