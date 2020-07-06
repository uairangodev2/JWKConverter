<?php

/*
 * This file is part of the JwkFromOidcToken package.
 *
 * (c) codercat <1067302838@qq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UaiRango\JWKToPEM\Util;

use UaiRango\JWKToPEM\Exception\Base64DecodeException;

class Base64UrlDecoder
{
    /**
     * @param string $str
     * @return string
     * @throws Base64DecodeException
     */
    public function decode($str)
    {
        $decoded = base64_decode(strtr($str, '-_', '+/'), true);
        if (!$decoded) {
            throw new Base64DecodeException();
        }
        return $decoded;
    }
}