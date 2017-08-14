<?php 

namespace Vehicule;
require_once 'GPSTrait.php';
abstract class VehiculeBase
{
    use GPSTrait;

    protected $owner;
    private $model;

    public function __construct($model, $owner)
    {
        $this->model = $model;
        $this->owner = $owner;
        echo 'GPS pos: '. $this->GetCurrentPosition();
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    public abstract function startEngine();


}

 ?>