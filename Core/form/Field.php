<?php

namespace app\core\form;

use app\core\Model;

class Field
{
    public $model, $label, $attribute, $type;

    public function __construct(Model $model = null, $label, $attribute, $type)
    {
        $this->model = $model;
        $this->label = $label;
        $this->attribute = $attribute;
        $this->type = $type;
    }

    public function __toString()
    {
        return sprintf(
            '<div class="form-group">
                    <label for="%s" class="form-label">%s</label>
                    <input type="%s" class="form-control %s" id="%s" name="%s" value="%s">
                    <div class="invalid-feedback">
                        %s
                    </div>
                </div>',
            $this->attribute,
            $this->label,
            $this->type,
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            $this->attribute,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->getFirstError($this->attribute) ?? ''
        );
    }
}
