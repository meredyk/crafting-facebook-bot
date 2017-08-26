<?php
/**
 * Created by PhpStorm.
 * User: meredyk
 * Date: 26/08/17
 * Time: 00:52
 */

namespace CraftingBot;


use CraftingBot\CallSendApi;
use CraftingBot\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSendApiTest extends TestCase
{

    /**
     * @expectedException \GuzzleHttp\Exception\ClientException
     * */
    public function testMakeRequest()
    {
        $message = (new Text(1))->message('Oi');
        (new CallSendApi('asdasd'))->make($message);
    }

}