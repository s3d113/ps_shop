<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEa0fq19\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEa0fq19/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerEa0fq19.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerEa0fq19\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerEa0fq19\appProdProjectContainer([
    'container.build_hash' => 'Ea0fq19',
    'container.build_id' => 'aaddc5d1',
    'container.build_time' => 1624595695,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEa0fq19');
