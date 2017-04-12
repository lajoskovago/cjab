<?php
/**
 * @see https://github.com/dotkernel/frontend/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/frontend/blob/master/LICENSE.md MIT License
 */

declare(strict_types=1);

namespace Frontend\User;

/**
 * Class Messages
 * @package Frontend\User
 */
class Messages
{
    const ACTIVATION_RESENT = 'Activation e-mail was sent to %s';
    const INVALID_PARAMETERS = 'Invalid parameters provided';
    const GENERATE_CONFIRM_TOKEN_ERROR = 'Could not generate activation token';
    const SIGN_OUT_FIRST = 'Sign out first in order to access the requested link';
}
