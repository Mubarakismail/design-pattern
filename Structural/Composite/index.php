<?php

use DesignPattern\Composite\Fieldset;
use DesignPattern\Composite\Form;
use DesignPattern\Composite\FormElement;
use DesignPattern\Composite\Input;

require_once __DIR__ . '/../../vendor/autoload.php';


/*
 *
 * Composite is a structural design pattern that lets you compose objects into tree structures and then work with these
 *  structures as if they were individual objects.
 *
 * Composite became a pretty popular solution for the most problems that require building a tree structure. Composite’s
 * great feature is the ability to run methods recursively over the whole tree structure and sum up the results.
 */


function getProductForm(): FormElement
{
    $form = new Form('product', "Add product", "/product/add");

    $form->add(new Input('name', "Name", 'text'));
    $form->add(new Input('description', "Description", 'text'));

    $picture = new Fieldset('photo', "Product photo");
    $picture->add(new Input('caption', "Caption", 'text'));
    $picture->add(new Input('image', "Image", 'file'));
    $form->add($picture);

    return $form;
}

function loadProductData(FormElement $form): void
{
    $data = [
        'name' => 'Apple MacBook',
        'description' => 'A decent laptop.',
        'photo' => [
            'caption' => 'Front photo.',
            'image' => 'photo1.png',
        ],
    ];

    $form->setData($data);
}


function renderProduct(FormElement $form): void
{
    echo $form->render();
}

$form = getProductForm();
loadProductData($form);
renderProduct($form);