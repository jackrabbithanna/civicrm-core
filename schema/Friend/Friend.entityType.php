<?php

return [
  'name' => 'Friend',
  'table' => 'civicrm_tell_friend',
  'class' => 'CRM_Friend_DAO_Friend',
  'getInfo' => fn() => [
    'title' => ts('Friend'),
    'title_plural' => ts('Friends'),
    'description' => ts('FIXME'),
    'add' => '2.0',
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => ts('Friend ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => ts('Friend ID'),
      'add' => '2.0',
      'primary_key' => TRUE,
      'auto_increment' => TRUE,
    ],
    'entity_table' => [
      'title' => ts('Entity Table'),
      'sql_type' => 'varchar(64)',
      'input_type' => 'Text',
      'required' => TRUE,
      'description' => ts('Name of table where item being referenced is stored.'),
      'add' => '2.0',
      'input_attrs' => [
        'maxlength' => 64,
      ],
    ],
    'entity_id' => [
      'title' => ts('Entity ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'EntityRef',
      'required' => TRUE,
      'description' => ts('Foreign key to the referenced item.'),
      'add' => '2.0',
      'entity_reference' => [
        'dynamic_entity' => 'entity_table',
        'key' => 'id',
      ],
    ],
    'title' => [
      'title' => ts('Title'),
      'sql_type' => 'varchar(255)',
      'input_type' => 'Text',
      'localizable' => TRUE,
      'add' => '2.0',
      'input_attrs' => [
        'maxlength' => 255,
      ],
    ],
    'intro' => [
      'title' => ts('Intro'),
      'sql_type' => 'text',
      'input_type' => 'Text',
      'localizable' => TRUE,
      'description' => ts('Introductory message to contributor or participant displayed on the Tell a Friend form.'),
      'add' => '2.0',
    ],
    'suggested_message' => [
      'title' => ts('Suggested Message'),
      'sql_type' => 'text',
      'input_type' => 'Text',
      'localizable' => TRUE,
      'description' => ts('Suggested message to friends, provided as default on the Tell A Friend form.'),
      'add' => '2.0',
    ],
    'general_link' => [
      'title' => ts('General Link'),
      'sql_type' => 'varchar(255)',
      'input_type' => 'Text',
      'description' => ts('URL for general info about the organization - included in the email sent to friends.'),
      'add' => '2.0',
      'usage' => [
        'import',
        'export',
        'duplicate_matching',
      ],
      'input_attrs' => [
        'maxlength' => 255,
      ],
    ],
    'thankyou_title' => [
      'title' => ts('Thank You Title'),
      'sql_type' => 'varchar(255)',
      'input_type' => 'Text',
      'localizable' => TRUE,
      'description' => ts('Text for Tell a Friend thank you page header and HTML title.'),
      'add' => '2.0',
      'input_attrs' => [
        'maxlength' => 255,
      ],
    ],
    'thankyou_text' => [
      'title' => ts('Thank You Text'),
      'sql_type' => 'text',
      'input_type' => 'Text',
      'localizable' => TRUE,
      'description' => ts('Thank you message displayed on success page.'),
      'add' => '2.0',
    ],
    'is_active' => [
      'title' => ts('Enabled?'),
      'sql_type' => 'boolean',
      'input_type' => 'CheckBox',
      'required' => TRUE,
      'add' => '2.0',
      'default' => TRUE,
      'input_attrs' => [
        'label' => ts('Enabled'),
      ],
    ],
  ],
];
