<?php

namespace CraftingBot\Message;

class File implements Message
{

    /**
     * @var string
     */
    private $recipientId;

    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function message(string $messageText): array{

        return $expected = [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'file',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]
        ];

    }
}