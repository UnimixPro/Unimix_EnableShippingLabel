<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Unimix\EnableShippingLabel\Plugin\Magento\Shipping\Model\Carrier;

class AbstractCarrier
{

    public function afterIsShippingLabelsAvailable(
        \Magento\Shipping\Model\Carrier\AbstractCarrier $subject,
        $result
    ) {

        //Your plugin code
        return true;
    }
}

