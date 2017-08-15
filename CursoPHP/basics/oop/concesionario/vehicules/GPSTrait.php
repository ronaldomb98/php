<?php

namespace Vehicule;
/**
 * Este no es precisamente para Herencia ya que
 * este por ejemplo puede ser adicionado a una
 * clase Avion y a una clase Explorador
 *
 * Trait GPSTrait
 * @package Vehicule
 */
trait GPSTrait
{
    public function GetCurrentPosition()
    {
        return "lat, long";
    }
}