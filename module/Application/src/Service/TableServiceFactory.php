<?php

namespace Application\Service;

use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;

class TableServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        /** @var EntityManager $entityManager */
        $entityManager = $container->get('doctrine.entitymanager.orm_default');

        /** @var array $config */
        $config = $container->get('config');
        $servicesToEntityClassesConfig = $config['services_to_entity_classes'];
        $servicesPreSql = $config['services_pre_sql'] ?? [];

        $service = new TableService();
        $service->setEntityManager($entityManager);
        $service->setServicesToEntityClassesConfig($servicesToEntityClassesConfig);
        $service->setServicesPreSql($servicesPreSql);

        return $service;
    }
}