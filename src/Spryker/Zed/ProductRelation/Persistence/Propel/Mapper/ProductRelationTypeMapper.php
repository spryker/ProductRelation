<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductRelation\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\ProductRelationTypeTransfer;
use Orm\Zed\ProductRelation\Persistence\SpyProductRelationType;

class ProductRelationTypeMapper
{
    /**
     * @param \Orm\Zed\ProductRelation\Persistence\SpyProductRelationType $productRelationTypeEntity
     * @param \Generated\Shared\Transfer\ProductRelationTypeTransfer $productRelationTypeTransfer
     *
     * @return \Generated\Shared\Transfer\ProductRelationTypeTransfer
     */
    public function mapProductRelationTypeEntityToProductRelationTypeTransfer(
        SpyProductRelationType $productRelationTypeEntity,
        ProductRelationTypeTransfer $productRelationTypeTransfer
    ): ProductRelationTypeTransfer {
        return $productRelationTypeTransfer->fromArray($productRelationTypeEntity->toArray(), true);
    }
}