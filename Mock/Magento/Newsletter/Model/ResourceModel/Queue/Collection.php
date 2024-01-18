<?php
/**
 *
 */
namespace Magento\Newsletter\Model\ResourceModel\Queue;

class Collection extends \Magento\Framework\Data\Collection
{
    /**
     *
     */
    public function addTemplateInfo(): self
    {
        return $this;
    }

    /**
     *
     */
    public function addCustomerFilter($customerId): self
    {
        return $this;
    }
}