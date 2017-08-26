<?php

namespace CraftingBot\Message;

class Text implements Message
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
                'text' => $messageText,
                'metada' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];

    }

}
