<?php

namespace DesignPattern\Composite;

use DesignPattern\Composite\FormElement;

abstract class FieldComposite extends FormElement
{
    protected array $fields = [];

    public function add(FormElement $field): void
    {
        $name = $field->getName();
        $this->fields[$name] = $field;
    }

    public function remove(FormElement $component): void
    {
        $this->fields = array_filter($this->fields, function ($element) use ($component) {
            return $element != $component;
        });
    }

    public function setData($data): void
    {
        foreach ($this->fields as $name => $field) {
            if (isset($data[$name])) {
                $field->setData($data[$name]);
            }
        }
    }

    public function getData(): array
    {
        $data = [];

        foreach ($this->fields as $name => $field) {
            $data[$name] = $field->getData();
        }

        return $data;
    }

    /**
     * @inheritDoc
     */
    public function render(): string
    {
        $output = "";
        foreach ($this->fields as $name => $field) {
            $output .= $field->render();
        }
        return $output;
    }
}