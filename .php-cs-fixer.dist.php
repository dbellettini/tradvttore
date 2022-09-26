<?php

declare(strict_types=1);
$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->append([__FILE__])
;

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@PHP81Migration' => true,
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'declare_strict_types' => true,
        'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
        'ordered_imports' => true,
        'phpdoc_to_comment' => false,
        'visibility_required' => ['elements' => ['property', 'method', 'const']],
        'escape_implicit_backslashes' => ['single_quoted' => true],
    ])
    ->setFinder($finder)
;

return $config;
