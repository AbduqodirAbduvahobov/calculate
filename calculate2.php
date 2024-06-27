<?php
class Calculate {
    private $arrivedAt;
    private $leavedAt;

    public function __construct($arrivedAt, $leavedAt) {
        $this->arrivedAt = $arrivedAt;
        $this->leavedAt = $leavedAt;
    }

    public function calculateDifference() {
        $arrivedAtTime = strtotime($this->arrivedAt);
        $leavedAtTime = strtotime($this->leavedAt);

        if ($leavedAtTime < $arrivedAtTime) {
            return "Chiqish vaqti kelgan vaqtdan oldinroq bo'lishi mumkin emas.";
        }

        $difference = $leavedAtTime - $arrivedAtTime;
        $hours = floor($difference / 3600);
        $minutes = floor(($difference / 60) % 60);

        return "$hours soat va $minutes minut";
    }
}
