<?php

/*
 * LiabilityValidation.php
 * Copyright (c) 2021 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace FireflyIII\Validation\Account;


use FireflyIII\Models\Account;
use FireflyIII\Models\AccountType;
use Log;

/**
 * Trait LiabilityValidation
 */
trait LiabilityValidation
{

    /**
     * @param array $array
     *
     * @return bool
     */
    protected function validateLCDestination(array $array): bool
    {
        Log::debug('Now in validateLCDestination', $array);
        $result     = null;
        $accountId  = array_key_exists('id', $array) ? $array['id'] : null;
        $validTypes = config('firefly.valid_liabilities');

        if (null === $accountId) {
            $this->sourceError = (string) trans('validation.lc_destination_need_data');
            $result            = false;
        }

        Log::debug('Destination ID is not null.');
        $search = $this->accountRepository->find($accountId);

        // the source resulted in an account, but it's not of a valid type.
        if (null !== $search && !in_array($search->accountType->type, $validTypes, true)) {
            $message = sprintf('User submitted only an ID (#%d), which is a "%s", so this is not a valid destination.', $accountId, $search->accountType->type);
            Log::debug($message);
            $this->sourceError = $message;
            $result            = false;
        }
        // the source resulted in an account, AND it's of a valid type.
        if (null !== $search && in_array($search->accountType->type, $validTypes, true)) {
            Log::debug(sprintf('Found account of correct type: #%d, "%s"', $search->id, $search->name));
            $this->source = $search;
            $result       = true;
        }

        return $result ?? false;
    }

    /**
     * Source of an liability credit must be a liability.
     *
     * @param array $array
     *
     * @return bool
     */
    protected function validateLCSource(array $array): bool
    {
        $accountName = array_key_exists('name', $array) ? $array['name'] : null;
        $result      = true;
        Log::debug('Now in validateLCDestination', $array);
        if ('' === $accountName || null === $accountName) {
            $result = false;
        }
        if (true === $result) {
            // set the source to be a (dummy) revenue account.
            $account              = new Account;
            $accountType          = AccountType::whereType(AccountType::LIABILITY_CREDIT)->first();
            $account->accountType = $accountType;
            $this->source         = $account;
        }

        return $result;
    }

}
