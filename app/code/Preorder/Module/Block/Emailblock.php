<?php

/**
 * Preorder Module Email Block
 */

namespace Preorder\Module\Block;
 
use Magento\Framework\View\Element\Template;
 
class Emailblock extends Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
    public function getEmailtemplates($templateId)
    {
        return $templateId;
    }
}
