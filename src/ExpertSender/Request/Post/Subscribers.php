<?php

namespace Zhmi\ExpertSender\Request\Post;

use Zhmi\ExpertSender\Request;
use Zhmi\ExpertSender\Entity\SubscriberType as SubscriberEntity;

/**
 * Class Subscribers
 * @package Zhme\ExpertSender\Resource\Post
 */
class Subscribers extends Request
{
    protected $endPoint = '/Api/Subscribers';

    /**
     * @param SubscriberEntity $subscriber Экземпляр класса, описывающий сущность Subscriber
     */
    function __construct(SubscriberEntity $subscriber)
    {
        parent::__construct($subscriber);
    }
}
