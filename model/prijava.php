<?php

    class Prijava {
        private $id;
        private $predmet;
        private $katedra;
        private $sala;
        private $datum;

        public function __construct($id = null, $predmet = null, $katedra = null, $sala = null, $datum = null) {
            $this->id = $id;
            $this->predmet = $predmet;
            $this->katedra = $katedra;
            $this->sala = $sala;
            $this->datum = $datum; 
        }

        public function getId() {
            return $this->id;
        }
        public function getPredmet() {
            return $this->predmet;
        }
        public function getKatedra() {
            return $this->katedra;
        }
        public function getSala() {
            return $this->sala;
        }
        public function getDatum() {
            return $this->datum;
        }

        public function setId($id) {
            $this->id = $id;
        }
        public function setPredmet($predmet) {
            $this->predmet = $predmet;
        }
        public function setKatedra($katedra) {
            $this->katedra = $katedra;
        }
        public function setSala($sala) {
            $this->sala = $sala;
        }
        public function setDatum($datum) {
            $this->datum = $datum;
        }

        public static function readAll(mysqli $conn) {
            $query_string = "SELECT * FROM prijave";
            return $conn->query($query_string);
        }

        public static function delete(mysqli $conn, $id) {
            $query_string = "DELETE FROM prijave WHERE id = $id";
            return $conn->query($query_string);
        }

        public static function create(mysqli $conn, Prijava $prijava) {
            $predmet = $prijava->getPredmet();
            $katedra = $prijava->getKatedra();
            $sala = $prijava->getSala();
            $datum = $prijava->getDatum();

            $query_string = "INSERT INTO prijave (predmet, katedra, sala, datum) VALUES 
            ('$predmet', '$katedra', '$sala', '$datum')";

            return $conn->query($query_string);
        }


    }   

?>