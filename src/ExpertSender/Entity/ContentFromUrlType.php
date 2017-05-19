<?php

namespace Zhmi\ExpertSender\Entity;
use Zhmi\ExpertSender\BaseType;

/**
 * Class ContentFromUrlType
 * @package Zhmi\ExpertSender\Entity
 * @property string $url
 * @property string $username
 * @property string $password
 * @property string $ftpAuth
 */
class ContentFromUrlType extends BaseType
{
    protected $params = array(
        'url' => array(
            'type' => 'string',
            'xmlName' => 'Url'
        ),
        'username' => array(
            'type' => 'string',
            'xmlName' => 'Username',
        ),
        'password' => array(
            'type' => 'string',
            'xmlName' => 'Password',
        ),
        'ftpAuth' => array(
            'type' => 'string',
            'xmlName' => 'FtpAuth',
        )
    );
}