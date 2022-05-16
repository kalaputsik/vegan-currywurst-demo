<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ExampleStateMachine\Persistence;

use Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItemQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

/**
 * @method \Pyz\Zed\ExampleStateMachine\Persistence\ExampleStateMachinePersistenceFactory getFactory()
 */
class ExampleStateMachineQueryContainer extends AbstractQueryContainer implements ExampleStateMachineQueryContainerInterface
{
    /**
     * @param int[] $stateIds
     *
     * @return \Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItemQuery
     */
    public function queryPyzStateMachineItemsByStateIds(array $stateIds = []): PyzExampleStateMachineItemQuery
    {
          return $this->getFactory()
              ->createPyzExampleStateMachineQuery()
              ->filterByFkStateMachineItemState($stateIds, Criteria::IN);
    }

    /**
     * @return \Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItem[]|\Propel\Runtime\Collection\ObjectCollection
     */
    public function queryPyzAllStateMachineItems()
    {
         return $this->getFactory()
             ->createPyzExampleStateMachineQuery()
             ->find();
    }

    /**
     * @param int $idStateMachineItem
     *
     * @return \Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItemQuery
     */
    public function queryPyzExampleStateMachineItemByIdStateMachineItem($idStateMachineItem): PyzExampleStateMachineItemQuery
    {
        return $this->getFactory()
            ->createPyzExampleStateMachineQuery()
            ->filterByIdExampleStateMachineItem($idStateMachineItem);
    }
}
