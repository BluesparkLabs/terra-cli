<?php

namespace Director\Model;

class Environment {
  /**
   * @var string
   * Must be unique within an app.
   */
  public $name;

  /**
   * @var string
   * The app this environment belongs to.
   */
  public $app;

  /**
   * @var string
   * Path to the source code of this environment.
   */
  public $source_path;

  /**
   * @var string
   * The system URL of the environment.
   */
  public $url;

  /**
   * @var string
   * The current branch or tag deployed to the environment
   */
  public $git_ref;

  /**
   * Initiate the project
   */
  public function __construct($name, $project_name, $server, $git_ref = '') {
    $this->name = $name;
    $this->project = $project_name;
    $this->server = $server;
    $this->git_ref = $git_ref;
    $this->url = 'http://' . $name . '.' . $project_name . '.' . $this->server;
  }
}