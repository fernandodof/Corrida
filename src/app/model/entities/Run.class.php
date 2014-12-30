<?php

/**
 * Description of Corrida
 *
 * @author Fernando
 */

/**
 * @Entity
 * * */
class Run {

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="bigint")
     * * */
    private $id;

    /**
     * @Column(type="date")
     * * */
    private $date;

    /**
     * @Column(type="float")
     * * */
    private $distance;

    /**
     * @Column(type="time")
     * * */
    private $duration;

    /**
     * @Column(type="text", nullable=true)
     * * */
    private $notes;

    /**
     * @Column(type="float")
     * * */
    private $avgSpeed;

    /**
     * @Column(type="float")
     * * */
    private $pace;

    /**
     * @ManyToOne(targetEntity="Runner", inversedBy="Runs")
     * @JoinColumn(name="runner_id", referencedColumnName="id")
     * */
    private $Runner;

    public function getId() {
        return $this->id;
    }

    public function getDate() {
        return $this->date;
    }

    public function getDistance() {
        return $this->distance;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getNotes() {
        return $this->notes;
    }

    public function getAvgSpeed() {
        return $this->avgSpeed;
    }

    public function getPace() {
        return $this->pace;
    }

    public function getRunner() {
        return $this->Runner;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setDistance($distance) {
        $this->distance = $distance;
    }

    public function setDuration($duration) {
        $this->duration = $duration;
    }

    public function setNotes($notes) {
        $this->notes = $notes;
    }

    public function setAvgSpeed($avgSpeed) {
        $this->avgSpeed = $avgSpeed;
    }

    public function setPace($pace) {
        $this->pace = $pace;
    }

    public function setRunner($Runner) {
        $this->Runner = $Runner;
    }

}
