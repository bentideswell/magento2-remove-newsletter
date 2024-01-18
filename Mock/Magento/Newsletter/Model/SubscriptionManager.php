<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Newsletter\Model;

class SubscriptionManager implements SubscriptionManagerInterface
{

    /**
     * @inheritdoc
     */
    public function subscribe(string $email, int $storeId): Subscriber
    {
        return $this->subscriberFactory->create();
    }

    /**
     * @inheritdoc
     */
    public function unsubscribe(string $email, int $storeId, string $confirmCode): Subscriber
    {
        return $this->subscriberFactory->create();
    }

    /**
     * @inheritdoc
     */
    public function subscribeCustomer(int $customerId, int $storeId): Subscriber
    {
        return $this->updateCustomerSubscription($customerId, $storeId, true);
    }

    /**
     * @inheritdoc
     */
    public function unsubscribeCustomer(int $customerId, int $storeId): Subscriber
    {
        return $this->updateCustomerSubscription($customerId, $storeId, false);
    }

    /**
     * Update customer newsletter subscription
     *
     * @param int $customerId
     * @param int $storeId
     * @param bool $status
     * @return Subscriber
     */
    private function updateCustomerSubscription(int $customerId, int $storeId, bool $status): Subscriber
    {
        return $this->subscriberFactory->create();
    }
}