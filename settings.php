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
 * Link to CSV course upload
 *
 * @package    tool_uploadcoursecategory
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @copyright  2011 Piers Harding
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if (has_capability('moodle/site:uploadusers', context_system::instance())) {
    $ADMIN->add('courses', new admin_externalpage(
        'tooluploadcoursecategory',
        get_string('uploadcoursecategories', 'tool_uploadcoursecategory'),
        "$CFG->wwwroot/$CFG->admin/tool/uploadcoursecategory/index.php",
        'moodle/site:uploadusers'));
}
