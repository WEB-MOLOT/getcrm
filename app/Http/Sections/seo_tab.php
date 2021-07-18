<?php
/**
 * @var \SleepingOwl\Admin\Display\DisplayTabbed $tabs
 */

$seo = AdminForm::elements([
    AdminFormElement::text('seo.title', 'TITLE')
        ->setHelpText($seoTitleHelp ?? ''),
    AdminFormElement::text('seo.keywords', 'KEYWORDS')
        ->setHelpText($seoKeywordsHelp ?? ''),
    AdminFormElement::textarea('seo.description', 'DESCRIPTION')
        ->setHelpText($seoDescriptionHelp ?? ''),
    AdminFormElement::checkbox('seo.disable_index', 'Отключить индексирование'),
]);
$tabs->appendTab($seo, 'SEO', false);
