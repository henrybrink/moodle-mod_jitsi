<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Jitsi external functions and service definitions.
 *
 * @package    mod_jitsi
 * @category   external
 * @copyright  2021 Arnes
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$functions = array(
    'mod_jitsi_view_jitsi' => array(
        'classname'     => 'mod_jitsi_external',
        'methodname'    => 'view_jitsi',
        'description'   => 'Trigger the course module viewed event.',
        'type'          => 'write',
        'capabilities'  => 'mod/jitsi:view',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE, 'local_mobile'),
    ),
);
