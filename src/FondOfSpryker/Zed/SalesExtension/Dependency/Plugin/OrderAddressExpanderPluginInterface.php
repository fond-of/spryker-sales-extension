<?php

namespace FondOfSpryker\Zed\SalesExtension\Dependency\Plugin;

use Generated\Shared\Transfer\AddressTransfer;

interface OrderAddressExpanderPluginInterface
{
    /**
     * Specification:
     *  - Manipulates AddressTransfer on order item level before storing in Persistence
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $addressTransfer
     *
     * @return \Generated\Shared\Transfer\AddressTransfer
     */
    public function expand(AddressTransfer $addressTransfer): AddressTransfer;
}
