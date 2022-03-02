<?php declare(strict_types=1);
/** Copyright © Discorgento. All rights reserved. */

namespace Discorgento\Core\Helper;

use Discorgento\Core\Helper\Context\Data as Context;
use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /** @var Context */
    protected $context;

    public function __construct(
        Context $context
    ) {
        parent::__construct($context->nativeContext);
        $this->context = $context;
    }

    /**
     * Check if the application is in production mode
     * @return bool
     */
    public function isProductionMode()
    {
        return $this->context->state->getMode() === $this->context->state::MODE_PRODUCTION;
    }

    /**
     * Check if the application is in development mode
     * @return bool
     */
    public function isDeveloperMode()
    {
        return !$this->isProductionMode();
    }
}
