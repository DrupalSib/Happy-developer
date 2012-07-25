<?php
/**
 * @file
 * happy_developer.context.inc
 */

/**
 * Implementation of hook_context_default_contexts().
 */
function happy_developer_context_default_contexts() {
  $export = array();

  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'happy_developer';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'user' => array(
      'values' => array(
        'administrator' => 'administrator',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'context_ui-devel' => array(
          'module' => 'context_ui',
          'delta' => 'devel',
          'region' => 'content',
          'weight' => '-10',
        ),
        'devel-execute_php' => array(
          'module' => 'devel',
          'delta' => 'execute_php',
          'region' => 'content',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;
  $export['happy_developer'] = $context;

  return $export;
}
