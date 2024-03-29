<?php

namespace app\core\form;

use app\core\Model;

class Check
{
    public $model, $label, $attribute;

    public function __construct(Model $model = null, $label, $attribute)
    {
        $this->model = $model;
        $this->label = $label;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf(
            '<div class="form-check">
                <input class="form-check-input %s" type="checkbox" value="%s" id="%s" name="%s" %s>
                <label class="form-check-label" for="%s">
                    %s
                </label>
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                    %s
                </div>
            </div>
            ',
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            $this->attribute,
            $this->attribute,
            $this->attribute,
            (!empty($this->model->terms)) ? 'checked' : '',
            $this->attribute,
            $this->label,
            $this->model->getFirstError($this->attribute) ?? ''
        );
    }
}
