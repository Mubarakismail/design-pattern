<?php

namespace DesignPattern\Composite;

use DesignPattern\Composite\FieldComposite;

class Fieldset extends FieldComposite
{
    public function render(): string
    {
        $output = parent::render();
        return "<fieldset><legend>{$this->title}</legend>\n$output</fieldset>\n";
    }
}