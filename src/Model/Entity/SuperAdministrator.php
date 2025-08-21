<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SuperAdministrator Entity
 *
 * @property int $id_super_administrator
 * @property int|null $user_id
 * @property string|null $name
 * @property string|null $lastname
 * @property string|null $email
 * @property int|null $status
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class SuperAdministrator extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'name' => true,
        'lastname' => true,
        'email' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
