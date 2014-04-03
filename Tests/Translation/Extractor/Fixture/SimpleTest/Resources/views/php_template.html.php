<?php $view['translation']->trans('php.foo') ?>

<?php /** @Desc("Bar") */ $view['translation']->trans('php.bar') ?>

<?php /** @Note("Baz") */ $view['translation']->trans('php.baz') ?>

<?php /** @Desc("Foo") @Note("Bar") */ $view['translation']->trans('php.foo_bar') ?>