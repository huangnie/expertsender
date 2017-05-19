<?php

namespace Zhmi\ExpertSender\Entity;

use Zhmi\ExpertSender\BaseType;

/**
 * Сущность, содержащая необходимые поля для отправки
 *
 * Class TransactionalType
 * @package Zhme\ExpertSender\Entity
 *
 * @property ReceiverType $receiver
 * @property SnippetType[] $snippets
 * @property AttachmentType[] $attachments
 */
class TransactionalType extends BaseType
{
    protected $params = array(
        'receiver' => array(
            'type' => 'Zhmi\\ExpertSender\\Entity\\ReceiverType',
            'xmlName' => 'Receiver',
        ),
        'snippets' => array(
            'type' => 'Zhmi\\ExpertSender\\Entity\\SnippetType',
            'xmlName' => 'Snippet',
            'unbound' => true,
            'unboundTag' => 'Snippets'
        ),
        'attachments' => array(
            'type' => 'Zhmi\\ExpertSender\\Entity\\AttachmentType',
            'xmlName' => 'Attachment',
            'unbound' => true,
            'unboundTag' => 'Attachments'
        )
    );
}