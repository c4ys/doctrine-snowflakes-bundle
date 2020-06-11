# Doctrine Snowflake Bundle

This bundle provides a simple Snowflake ID Generator for Doctrine.

## How To Use

Use as custom strategy inside your entity
```php
    /**
     * @var string
     *
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\Column(type="bigint", unique=true, nullable=false)
     * @ORM\CustomIdGenerator(class="KaiGrassnick\DoctrineSnowflakeBundle\Generator\SnowflakeGenerator")
     */
    private string $id;
```