<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['production'] = array(
    'uri' => 'www.example.com',
    'db-url' => 'mysql://user:pass@example.com:[PORT]/[DATABASE]',
    'db-allows-remote' => TRUE,
    'remote-host' => 'example.com',
    'remote-user' => 'user',
    'ssh-options' => '-p 22 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['local'] = array(
    'uri' => 'http://www.example.local',
    'root' => '/home/vagrant/sites/example/code',
    'path-aliases' => array(
      '%files' => 'sites/default/files',
      '%drush-script' => 'drush',
    )
  );
  