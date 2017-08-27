<?php

namespace CraftingBot\TemplatesMessage;

use CraftingBot\Element\Button;
use PHPUnit\Framework\TestCase;

class ButtonsTemplateTest extends TestCase
{
    public function testDeRetornoComTipoPostback()
    {
        $buttonsTemplate = new ButtonsTemplate(123);
        $buttonsTemplate->add(new Button('postback','Que tal uma resposta do bot','resposta'));
        $actual = $buttonsTemplate->message('Olha um exemplo de template com botões');

        $expected = [
            'recipient' => [
                'id' => 123
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'button',
                        'text' => 'Olha um exemplo de template com botões',
                        'buttons' => [
                            [
                                'type' => 'postback',
                                'title' => 'Que tal uma resposta do bot',
                                'payload' => 'resposta',
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected,$actual);

    }
}