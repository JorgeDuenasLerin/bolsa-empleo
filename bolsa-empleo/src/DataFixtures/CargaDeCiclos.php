<?php

namespace App\DataFixtures;

use App\Entity\Ciclo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CargaDeCiclos extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $ciclo = new Ciclo();
        $ciclo->setTítulo("Desarrollo de Aplicaciones Web");
        $ciclo->setDescripción("Desarrollar, implantar, y mantener aplicaciones web, con independencia del modelo empleado y utilizando tecnologías específicas, garantizando el acceso a los datos de forma segura y cumpliendo los criterios de accesibilidad, usabilidad y calidad exigidas en los estándares establecidos");
        $manager->persist($ciclo);

        $manager->flush();
    }
}
