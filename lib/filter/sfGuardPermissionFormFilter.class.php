<?php

/**
 * sfGuardPermission filter form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id$
 */
class sfGuardPermissionFormFilter extends BasesfGuardPermissionFormFilter
{
  public function configure()
  {
    unset($this['sf_guard_user_permission_list']);

    $this->widgetSchema['sf_guard_group_permission_list']->setLabel('Groups');
  }
}
