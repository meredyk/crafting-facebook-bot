<?php
/**
 * Created by PhpStorm.
 * User: meredyk
 * Date: 27/08/17
 * Time: 22:57
 */

namespace CraftingBot\TemplatesMessage;


use CraftingBot\Element\Button;
use CraftingBot\Element\Product;
use PHPUnit\Framework\TestCase;

class ListTemplateTest extends TestCase
{
    public function teste()
    {
        $button = new Button('web_url', null, 'https://www.google.com.br/');
        $product = new Product('Produto 1','https://storage.googleapis.com/gweb-uniblog-publish-prod/static/blog/images/google-200x200.7714256da16f.png','Algo sobre o Google', $button);

        $button = new Button('web_url', null, 'https://www.google.com.br/');
        $product2 = new Product('Produto 2','https://storage.googleapis.com/gweb-uniblog-publish-prod/static/blog/images/google-200x200.7714256da16f.png','Algo sobre o Google', $button);

        $template = new ListTemplate(1234);
        $template->add($product);
        $template->add($product2);

        $actual = $template->message('qwa');
        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'list',
                        'buttons' => [
                            [
                                'title' => 'Produto 1',
                                'image_url' => 'https://storage.googleapis.com/gweb-uniblog-publish-prod/static/blog/images/google-200x200.7714256da16f.png',
                                'subtitle' => 'Algo sobre o Google',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'https://www.google.com.br/'
                                ]
                            ],
                            [
                                'title' => 'Produto 2',
                                'image_url' => 'https://storage.googleapis.com/gweb-uniblog-publish-prod/static/blog/images/google-200x200.7714256da16f.png',
                                'subtitle' => 'Algo sobre o Google',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'https://www.google.com.br/'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected, $actual);
    }


}