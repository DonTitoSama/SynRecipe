<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9fIfKZu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9fIfKZu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9fIfKZu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9fIfKZu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9fIfKZu\App_KernelDevDebugContainer([
    'container.build_hash' => '9fIfKZu',
    'container.build_id' => 'c73bb751',
    'container.build_time' => 1676674633,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9fIfKZu');
