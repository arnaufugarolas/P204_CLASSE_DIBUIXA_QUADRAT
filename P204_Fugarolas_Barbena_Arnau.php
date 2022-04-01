<?php

class P204_Fugarolas_Barbena_Arnau
{
    private $longitud;
    private $caracter;

    /**
     * @param $longitud integer
     * @param $caracter string
     */
    public function __construct($longitud, $caracter)
    {
        $this->longitud = $longitud;
        $this->caracter = $caracter;
    }

    /**
     * @return integer
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * @param integer $longitud
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;
    }

    /**
     * @return string
     */
    public function getCaracter()
    {
        return $this->caracter;
    }

    /**
     * @param string $caracter
     */
    public function setCaracter($caracter)
    {
        $this->caracter = $caracter;
    }

    public function drawn()
    {
        $longitud = $this->getLongitud();

        for ($i = 0; $i < $longitud; $i++ ) {
            for ($j = 0; $j < $longitud; $j++ ) {
                echo $this->getCaracter().' ';
            }
            echo '<br>';
        }
    }

}

$cubito = new P204_Fugarolas_Barbena_Arnau(0, '');
$cubito->setLongitud(10);
$cubito->setCaracter('⏹');
$cubito->drawn();