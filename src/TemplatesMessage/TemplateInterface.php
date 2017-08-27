<?php

namespace CraftingBot\TemplatesMessage;

use CraftingBot\Element\ElementInterface;
use CraftingBot\Message\Message;

interface TemplateInterface extends Message
{
    public function add(ElementInterface $element);
}