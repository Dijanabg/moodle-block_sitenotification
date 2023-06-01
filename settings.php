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

 defined('MOODLE_INTERNAL') || die();
     if( $hassiteconfig ){
        $settings = new admin_settingpage('block_sitenotification',get_string('adminpageheading', 'block_sitenotification' ) );

        $settings->add( new admin_setting_heading('block_sitenotification/generalheading',get_string( 'generalheading', 'block_sitenotification' ), '' ) );

        $settings->add( new admin_setting_configcheckbox('block_sitenotification/enabled',get_string( 'shownotification', 'block_sitenotification' ),'','' ) );

        $settings->add( new admin_setting_configtext('block_sitenotification/notificationmessage',get_string( 'notificationmessage', 'block_sitenotification' ),'','' ) );

        $arrColors    = array(  "primary" =>   'primary',
                                "info"    =>   'info',
                                "warning" =>   'warning',
                                "danger"  =>   'danger',
                                "success" =>   'success',
                                "light"   =>   'light',
                                "dark"    =>   'dark' );
        $currentColor = 'light';

        $settings->add( new admin_setting_configselect('block_sitenotification/notificationalertcolor',get_string( 'notificationcolor', 'block_sitenotification' ),get_string( 'notificationcolor_desc', 'block_sitenotification' ),$currentColor,$arrColors ) );

        $ADMIN->add( 'messaging', $settings );
    }