<?php
// This file is part of Moodle Course Rollover Plugin
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
 * @package     local_message
 * @author      Kristian
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @var stdClass $plugin
 */
require_once(__DIR__ . '/../../config.php');
require_once($CFG->dirroot . '/local/message/classes/form/edit.php');

$PAGE->set_url(new moodle_url('/local/message/edit.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('Edit');

$mform = new edit();
echo $OUTPUT->header();
// echo '<h1>salam</h1>';
$templatecontext = (object)[
    'texttodisplay' => 'list of all current message',
];
echo $OUTPUT->render_from_template('local_message/manage', $templatecontext);
$mform->display();
echo $OUTPUT->footer();
