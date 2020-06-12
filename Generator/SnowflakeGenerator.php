<?php declare(strict_types=1);
/*******************************************************************************
 * Copyright (c) 2020.
 * Author: Kai Grassnick <info@kai-grassnick.de>
 ******************************************************************************/

namespace KaiGrassnick\DoctrineSnowflakeBundle\Generator;


use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Id\AbstractIdGenerator;

/**
 * Class SnowflakeGenerator
 *
 * @package KaiGrassnick\DoctrineSnowflakeBundle\Generator
 */
class SnowflakeGenerator extends AbstractIdGenerator
{
    /**
     * Generates an identifier for an entity.
     *
     * @param EntityManagerInterface $em
     * @param object|null            $entity
     *
     * @return string
     */
    public function generate(EntityManagerInterface $em, $entity): string
    {
        return (new \KaiGrassnick\SnowflakeBundle\Generator\SnowflakeGenerator())->generateSnowflake();
    }
}
