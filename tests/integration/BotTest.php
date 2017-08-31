<?php

namespace CraftingBot;


use CraftingBot\Build\Solid;
use PHPUnit\Framework\TestCase;

class BotTest extends TestCase
{

    private $pageAccessToken = 'EAATq8fBqXFQBADUcwyDZALhCi6tPZAkZA9NY2ZAzIVcWZCAbpVQEMjXaJowNFfwRXBSBsv1MzIFddo7BTg9L5AuSby4ZAXR3zhuhpiKI7E9YWYVMdNaX4ZBET5mnQmiWBiiZAGiL9qFxqlpxLvD54YRDkxiYAiIUcJBmwqZBy9TRPBgZDZD';

    public function testAddMenu()
    {
        $call_to_actions = [
            [
                'id' => 1,
                'type' => 'nested',
                'title' => 'O que eu posso fazer',
                'parent_id' => 0,
                'value' => null,
            ],
            [
                'id' => 2,
                'type' => 'web_url',
                'title' => 'Visite o nosso site',
                'parent_id' => 0,
                'value' => 'https://crafting.com.br',
            ],
            [
                'id' => 3,
                'type' => 'web_url',
                'title' => 'Quer aprender Laravel?',
                'parent_id' => 1,
                'value' => 'https://www.google.com.br',
            ],
            [
                'id' => 4,
                'type' => 'postback',
                'title' => 'Ver opções iniciais?',
                'parent_id' => 1,
                'value' => 'iniciar',
            ],
        ];

        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccessToken);
        $bot->addMenu('default','false', $call_to_actions);

        $this->assertTrue(true);
    }

    public function testRemoveMenu()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccessToken);
        $bot->removeMenu();

        $this->assertTrue(true);
    }

    public function testAddGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccessToken);
        $bot->addGetStartedButton('iniciar');

        $this->assertTrue(true);
    }

    public function testRemoveGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccessToken);
        $bot->removeGetStartedButton();

        $this->assertTrue(true);
    }

}