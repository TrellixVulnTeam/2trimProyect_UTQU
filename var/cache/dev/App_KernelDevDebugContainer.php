<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerISz4IEj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerISz4IEj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerISz4IEj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerISz4IEj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerISz4IEj\App_KernelDevDebugContainer([
    'container.build_hash' => 'ISz4IEj',
    'container.build_id' => '1322460b',
    'container.build_time' => 1644963833,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerISz4IEj');
