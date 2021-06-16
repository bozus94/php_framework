<?php

namespace app\core\form;

use app\core\Model;

class Submit
{
    public $label;

    public function __construct($label)
    {
        $this->label = $label;
    }

    public function __toString()
    {
        return sprintf(
            '<div class="col-12">
                    <button type="submit" class="btn btn-primary">%s</button>
                </div>',
            $this->label
        );
    }
}
