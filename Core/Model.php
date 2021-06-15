<?php

namespace app\core;

abstract class Model
{
    public function loadData($data)
    {
        /* We go through the received data and compare them if they coincide with the 
        properties of the existing model. If it is true, we set the properties with 
        their respective value; */

        foreach ($data as $key => $value) {
            if (\property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function validate()
    {
        return true;
    }

    public abstract function rules(): array;
}
