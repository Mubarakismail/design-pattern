<?php

require 'Customer.php';
require 'Product.php';
require 'Offer.php';
require 'EventType.php';

class OnlineMarketplace
{
    private array $subscribers;
    private array $products;
    private array $offers;

    public function __construct()
    {
        $this->subscribers = [];
        $this->initSubscriberEvent();
        $this->products = [];
        $this->offers = [];
    }

    public function subscribe(EventType $eventType, Customer $customer): void
    {
        $this->subscribers[$eventType->name][] = $customer;
    }

    public function addNewProduct(Product $product): void
    {
        $this->products[] = $product;
        $this->notifySubscribers(EventType::NEW_PRODUCT, 'New product is add: ' . $product->getName());
    }

    public function addNewOffer(Offer $offer): void
    {
        $this->offers[] = $offer;
        $this->notifySubscribers(EventType::NEW_OFFER, 'New offer is added: ' . $offer->getMessage());
    }

    public function addNewJobOpening(string $jobTitle): void
    {
        $this->notifySubscribers(EventType::JOB_OPENING, 'New opening job is available: ' . $jobTitle);
    }

    private function initSubscriberEvent(): void
    {
        foreach (EventType::cases() as $case) {
            $this->subscribers[$case->name] = [];
        }
    }

    private function notifySubscribers(EventType $eventType, string $string): void
    {
        foreach ($this->subscribers[$eventType->name] as $subscriber) {
            $subscriber->notify($string);
        }
    }
}