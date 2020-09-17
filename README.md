# SalesExtension Module

The module provides plugin interfaces for extending sales module functionality and complements the original spryker module to add additional interfaces.

## Interfaces available

- SalesOrderAddressHydrationPlugin
```
* Specifications:
* - Expand sales order address with additional data
```

- OrderAddressExpanderPlugin
```
 * Specification:
 *  - Manipulates AddressTransfer on order item level before storing in Persistence
```

## Installation

```
composer require fond-of-spryker/sales-extension
```
