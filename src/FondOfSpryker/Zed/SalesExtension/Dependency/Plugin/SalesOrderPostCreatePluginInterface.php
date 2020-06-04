<?php

namespace FondOfSpryker\Zed\SalesExtension\Dependency\Plugin;

use Generated\Shared\Transfer\OrderTransfer;
use Generated\Shared\Transfer\SaveOrderTransfer;

interface SalesOrderPostCreatePluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\OrderTransfer $orderTransfer
     * @param \Generated\Shared\Transfer\SaveOrderTransfer $saveOrderTransfer
     *
     * @return void
     */
    public function execute(OrderTransfer $orderTransfer, SaveOrderTransfer $saveOrderTransfer): void;
}
