<?php
use Magento\Framework\App\Bootstrap;

require __DIR__ . '/../../../bootstrap.php';
// exit;

// require __DIR__ . '/app/bootstrap.php';

// Initialize Magento
$bootstrap = Bootstrap::create(BP, $_SERVER);
$obj = $bootstrap->getObjectManager();

// Optional: emulate area code if you need frontend/adminhtml context
// $state = $obj->get(\Magento\Framework\App\State::class);
try {
    // $state->setAreaCode('adminhtml'); // or 'frontend' depending on what you need
} catch (\Magento\Framework\Exception\LocalizedException $e) {
    // Area code is already set, ignore
}

// Now you can use Magento classes
/** @var \Arthur\Factories\Model\Factory\GeneralFactory $generalFactory */
// $productRepository = $obj->get(\Magento\Catalog\Api\ProductRepositoryInterface::class);
$generalFactory = $obj->get(\Arthur\Factories\Model\Factory\GeneralFactory::class);


$csvLogger = $generalFactory->get('csv');
$csvLogger->info('This info is being logged into a csv file');

$jsonLogger = $generalFactory->get('json');
$jsonLogger->info('This info is being logged into a json file');
