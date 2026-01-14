<?php declare(strict_types=1);
/** Copyright © Discorgento. All rights reserved. */

namespace Discorgento\Core\Helper\Context;

use Magento\Framework\App\Helper\Context as NativeContext;
use Magento\Framework\App\State;

final class Data
{
    /** @var NativeContext */
    public $nativeContext;

    /** @var State */
    public $state;

    // phpcs:ignore
    public function __construct(
        NativeContext $nativeContext,
        State $state
    ) {
        $this->nativeContext = $nativeContext;
        $this->state = $state;
    }
}
