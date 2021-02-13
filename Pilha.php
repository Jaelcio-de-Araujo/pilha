<?php

require_once 'Carregar.php';

class Pilha implements Carregar
{
    private $carregada;
    private $carga;


    private function setCarregada($ca)
    {
        $this -> carregada = $ca;
    }
    private function getCarregada()
    {
        return $this -> carregada;
    }

    private function setCarga($c)
    {
        $this -> carga = $c;
    }
    private function getCarga()
    {
        return $this -> carga;
    }

    public function criar()
    {

        echo "
        <style>
                .pilha3{
                width: 194px;
                height: 296px;
                margin: 0 auto;
                
                }
        </style>
        <div class='pilha3'></div>";
    }

    public function carregar()
    {
        if (isset($_POST['ativar'])) 
        {
              $a = 1;
                while ($a <= 294) 
                {
                    $a +=1;
                }
                
                echo "
                <style>
                    .pilha3{
                    border-bottom: #00FA9A solid ".$a."px;
                }
                </style>
                ";
            }

            else 
            {
                echo "
                    <br/>
                    <h2>Para carregar click em carregar :)
                
                ";
            }
        }        
}