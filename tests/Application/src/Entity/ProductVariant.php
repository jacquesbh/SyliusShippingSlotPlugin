<?php

/*
 * This file is part of Monsieur Biz' Shipping Slot plugin for Sylius.
 *
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use MonsieurBiz\SyliusShippingSlotPlugin\Entity\ProductVariantInterface as MonsieurBizProductVariantInterface;
use MonsieurBiz\SyliusShippingSlotPlugin\Entity\ProductVariantTrait;
use Sylius\Component\Core\Model\ProductVariant as SyliusProductVariant;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product_variant")
 */
class ProductVariant extends SyliusProductVariant implements MonsieurBizProductVariantInterface
{
    use ProductVariantTrait;
}
