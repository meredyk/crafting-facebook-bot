<?php

namespace CraftingBot;


use PHPUnit\Framework\TestCase;

class GetStartedButtonTest extends TestCase
{
    public function testAddGetStartedButton()
    {
        $data = (new GetStartedButton())->add('iniciar');
        $callSendApi = new CallSendApi('EAATq8fBqXFQBADUcwyDZALhCi6tPZAkZA9NY2ZAzIVcWZCAbpVQEMjXaJowNFfwRXBSBsv1MzIFddo7BTg9L5AuSby4ZAXR3zhuhpiKI7E9YWYVMdNaX4ZBET5mnQmiWBiiZAGiL9qFxqlpxLvD54YRDkxiYAiIUcJBmwqZBy9TRPBgZDZD');

        $result = $callSendApi->make($data, CallSendApi::URL_PROFILE);

        $this->assertTrue(is_string($result));
    }
}