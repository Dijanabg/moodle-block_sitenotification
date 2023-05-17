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
 * Block to site notification.
 *
 * @package   block_sitenotification
 * @copyright Dijana Jovanovic
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_sitenotification extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_sitenotification');
    }
    function has_config() {return true;} //if your plugin have a settings.php file
    //if have big header
    // public function hide_header() {
    //     return true;
    //   }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.
    public function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }
    
        $this->content         =  new stdClass;
        $this->content->text   = 'The content of our Sitenotification block!';
        $this->content->footer = 'Footer here...';
     
        return $this->content;
    }
    public function instance_allow_multiple() {
        return true;
      }
}