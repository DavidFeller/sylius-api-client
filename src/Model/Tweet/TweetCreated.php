<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace FAPI\Sylius\Model\Tweet;

use FAPI\Sylius\Model\CreatableFromArray;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
final class TweetCreated implements CreatableFromArray
{
    /**
     * @var string
     */
    private $message;

    /**
     * @param string $message
     */
    private function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * @param array $data
     *
     * @return TweetCreated
     */
    public static function createFromArray(array $data): TweetCreated
    {
        $message = '';

        if (isset($data['message'])) {
            $message = $data['message'];
        }

        return new self($message);
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
