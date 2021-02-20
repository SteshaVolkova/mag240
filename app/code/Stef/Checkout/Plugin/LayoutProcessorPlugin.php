<?php

namespace Company\Checkout\Plugin;

use Magento\Checkout\Block\Checkout\LayoutProcessor;

class LayoutProcessorPlugin
{
    /**
     * @param LayoutProcessor $subject
     * @param $jsLayout
     * @return mixed
     */
    public function afterProcess(
        LayoutProcessor $subject,
        $jsLayout
    ) {
        //Remove telephone tooltip
        unset($jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
            ['children']['shippingAddress']['children']['shipping-address-fieldset']['children']['telephone']['config']['tooltip']);

        return $jsLayout;
    }
}
