<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Cavalier\CustomOrderAttribute\Observer\Checkout;

class SubmitAllAfter implements \Magento\Framework\Event\ObserverInterface
{

 	protected $logger;
	
    public function __construct(
		\Psr\Log\LoggerInterface $logger
    ) {
		$this->logger = $logger;
    }
    /**
     * Execute observer
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(
        \Magento\Framework\Event\Observer $observer
    ) {
        $order = $observer->getEvent()->getData('order');
		$this->updateOrderAttribute($observer->getEvent()->getData('order'));
    }
	
	public function updateOrderAttribute($order)
{
    try {
        if ($order->getId()) {
            $order->setCustomerReference($order->getPayment()->getPoNumber());
            $order->save();
        } else {
            throw new \Exception(__('Order not found.'));
        }
    } catch (\Exception $e) {
        // Handle exception, log error message or display an error message
    }
}
}
