<?php
/**
 *
 */
namespace Magento\Newsletter\Model;

class Subscriber
{
    public const STATUS_SUBSCRIBED = 1;
    public const STATUS_NOT_ACTIVE = 2;
    public const STATUS_UNSUBSCRIBED = 3;
    public const STATUS_UNCONFIRMED = 4;

    public const XML_PATH_CONFIRM_EMAIL_TEMPLATE = 'newsletter/subscription/confirm_email_template';
    public const XML_PATH_CONFIRM_EMAIL_IDENTITY = 'newsletter/subscription/confirm_email_identity';
    public const XML_PATH_SUCCESS_EMAIL_TEMPLATE = 'newsletter/subscription/success_email_template';
    public const XML_PATH_SUCCESS_EMAIL_IDENTITY = 'newsletter/subscription/success_email_identity';
    public const XML_PATH_UNSUBSCRIBE_EMAIL_TEMPLATE = 'newsletter/subscription/un_email_template';
    public const XML_PATH_UNSUBSCRIBE_EMAIL_IDENTITY = 'newsletter/subscription/un_email_identity';
    public const XML_PATH_CONFIRMATION_FLAG = 'newsletter/subscription/confirm';
    public const XML_PATH_ALLOW_GUEST_SUBSCRIBE_FLAG = 'newsletter/subscription/allow_guest_subscribe';


    /**
     *
     */
    public function getId()
    {
        return null;
    }

    /**
     *
     */
    public function isSubscribed()
    {
        return false;
    }

    /**
     *
     */
    public function loadBySubscriberEmail(string $email, int $websiteId): Subscriber
    {
        return $this;
    }

    /**
     *
     */
    public function loadByCustomer(int $customerId, int $websiteId): Subscriber
    {
        return $this;
    }
}