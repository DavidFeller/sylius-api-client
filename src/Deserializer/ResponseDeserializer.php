<?php

/*
 *
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace APIPHP\Boilerplate\Deserializer;

use Psr\Http\Message\ResponseInterface;

/**
 * Deserialize a PSR-7 response to something else.
 */
interface ResponseDeserializer
{
    /**
     * @param ResponseInterface $response
     * @param string            $class
     *
     * @return mixed
     */
    public function deserialize(ResponseInterface $response, string $class);
}
