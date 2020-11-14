<?php

namespace App\CompositePattern\Taxonomy;

class Program
{
    public function getTaxonomy()
    {
        $animalia = new Composite('動物界');
        $chordata = new Composite('脊索動物門');
        $mammalia = new Composite('哺乳綱');


        $animalia->add($chordata);
        $chordata->add($mammalia);

        // koala
        $diprotodontia = new Composite('雙門齒目');
        $phascolarctidae = new Composite('無尾熊科');
        $phascolarctos = new Composite('無尾熊屬');
        $phascolarctosCinereus = new Leaf('無尾熊');

        $diprotodontia->add($phascolarctidae);
        $phascolarctidae->add($phascolarctos);
        $phascolarctos->add($phascolarctosCinereus);

        $mammalia->add($diprotodontia);

        // panda
        $carnivora = new Composite('食肉目');
        $ursidae = new Composite('熊科');
        $ailuropoda = new Composite('大貓熊屬');
        $ailuropodaMelanoleuca = new Leaf('大貓熊');

        $carnivora->add($ursidae);
        $ursidae->add($ailuropoda);
        $ailuropoda->add($ailuropodaMelanoleuca);

        $mammalia->add($carnivora);

        $animalia->getClassifiaction(0);
    }
}
