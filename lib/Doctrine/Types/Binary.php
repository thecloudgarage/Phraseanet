<?php

/*
 * This file is part of Phraseanet
 *
 * (c) 2005-2016 Alchemy
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @license     http://opensource.org/licenses/gpl-3.0 GPLv3
 * @link        www.phraseanet.com
 */

namespace Types;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class Binary extends Type
{
    const BINARY = 'binary';

    public function getName()
    {
        return static::BINARY;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        if (! isset($fieldDeclaration['length'])) {
            $fieldDeclaration['length'] = 255;
        }

        $length = $fieldDeclaration['length'];

        if ($length > 4000) {
            return $platform->getDoctrineTypeMapping('longblob');
        }

        $fixed = isset($fieldDeclaration['fixed']) ? $fieldDeclaration['fixed'] : false;

        return ($fixed ? 'BINARY(' : 'VARBINARY(') . $length . ')';
    }
}