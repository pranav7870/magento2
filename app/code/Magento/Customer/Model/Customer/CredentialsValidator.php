<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Customer\Model\Customer;

use Magento\Framework\Exception\InputException;

class CredentialsValidator
{
    /**
     * Check that password is different from login.
     *
     * @param string $email
     * @param string $password
     * @return void
     * @throws InputException
     */
    public function checkPasswordDifferentFromEmail($email, $password)
    {
        if (strcasecmp($password, $email) == 0) {
            throw new InputException(__('Password cannot be the same as email address.'));
        }
    }
}
