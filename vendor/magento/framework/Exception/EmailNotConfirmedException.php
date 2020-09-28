<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Exception;

/**
 * @api
 * @since 100.0.2
 */
class EmailNotConfirmedException extends AuthenticationException
{
    /**
     * @deprecated
     */
    const EMAIL_NOT_CONFIRMED = 'Email not confirmed';
}
