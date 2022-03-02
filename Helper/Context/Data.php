<?php declare(strict_types=1);
/** Copyright © Discorgento. All rights reserved. */

namespace Discorgento\Core\Helper\Context;

use Magento\Framework\App\Helper\Context as NativeContext;
use Magento\Framework\App\State;

/**
 * This custom context allow extending the original helper
 * without the need to repeat every original dependency on it,
 * just like Magento native abstract helper ヽ(´ー｀)ノ
 * @see \Magento\Framework\App\Helper\AbstractHelper
 */
final class Data
{
    /** @var NativeContext */
    public $nativeContext;

    /** @var State */
    public $state;

    public function __construct(
        NativeContext $nativeContext,
        State $state
    ) {
        $this->nativeContext = $nativeContext;
        $this->state = $state;
    }
}
