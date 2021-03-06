<?php
/**
 * Abstract Role Assignment
 *
 * Base class for a role assignment entity.
 *
 * @package NinjaAuthorization\Entity
 * @filesource
 */

namespace NinjaAuthorization\Entity;

use Doctrine\ORM\Mapping as ORM;
use NinjaServiceLayer\Entity\AbstractWithIdAndDatesEntity;

/**
 * Abstract Role Assignment
 *
 * Base class for a role assignment entity.
 *
 * @package NinjaAuthorization\Entity
 */
abstract class AbstractRoleAssignment extends AbstractWithIdAndDatesEntity
{

  /**
   * User
   *
   * The user for this role assignment.
   *
   * @var UserInterface The user for this role assignment.
   * @ORM\ManyToOne(targetEntity="NinjaAuthorization\Entity\UserInterface", inversedBy="roleAssignments")
   */
  protected $user;

  /**
   * Role
   *
   * The role for this role assignment.
   *
   * @var AbstractRole The role for this role assignment.
   * @ORM\ManyToOne(targetEntity="NinjaAuthorization\Entity\Role", inversedBy="roleAssignments")
   */
  protected $role;

  /**
   * Get User
   *
   * Gets the user for this role assignment.
   *
   * @return UserInterface The user for this role assignment.
   */
  public function getUser()
  {
    return $this->user;
  }

  /**
   * Set User
   *
   * Sets the user for this role assignment.
   *
   * @param UserInterface $user The user for this role assignment.
   * @return self Returns itself to allow for method chaining.
   */
  public function setUser(UserInterface $user)
  {
    $user->addRoleAssignment($this);
    $this->user = $user;
    return $this;
  }

  /**
   * Get Role
   *
   * Gets the role for this role assignment.
   *
   * @return AbstractRole The role for this role assignment.
   */
  public function getRole()
  {
    return $this->role;
  }

  /**
   * Set Role
   *
   * Sets the role for this role assignment.
   *
   * @param AbstractRole $role The role for this role assignment.
   * @return self Returns itself to allow for method chaining.
   */
  public function setRole(AbstractRole $role)
  {
    $role->addRoleAssignment($this);
    $this->role = $role;
    return $this;
  }
}
