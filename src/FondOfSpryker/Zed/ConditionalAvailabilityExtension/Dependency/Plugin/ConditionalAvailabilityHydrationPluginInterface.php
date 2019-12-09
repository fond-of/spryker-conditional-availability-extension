<?php

namespace FondOfSpryker\Zed\ConditionalAvailabilityExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ConditionalAvailabilityResponseTransfer;

interface ConditionalAvailabilityHydrationPluginInterface
{
    /**
     * Specification:
     * - Hydrates a conditional availability fields
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ConditionalAvailabilityResponseTransfer $conditionalAvailabilityResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ConditionalAvailabilityResponseTransfer
     */
    public function hydrate(
        ConditionalAvailabilityResponseTransfer $conditionalAvailabilityResponseTransfer
    ): ConditionalAvailabilityResponseTransfer;
}
