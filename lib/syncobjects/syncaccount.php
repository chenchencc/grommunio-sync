<?php
/***********************************************
* File      :   syncaccount.php
* Project   :   Grammm-Sync
* Descr     :   WBXML account entities that can be
*               parsed directly (as a stream) from WBXML.
*               It is automatically decoded
*               according to $mapping,
*               and the Sync WBXML mappings
*
* Created   :   18.05.2017
*
* Copyright 2017 Zarafa Deutschland GmbH
* Copyright 2020 Grammm GmbH
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License, version 3,
* as published by the Free Software Foundation.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* Consult LICENSE file for details
************************************************/

class SyncAccount extends SyncObject {
    public $accountid;
    public $accountname;
    public $userdisplayname;
    public $senddisabled;
    public $emailaddresses;

    public function __construct() {
        $mapping = array (
            SYNC_SETTINGS_ACCOUNTID                 => array (  self::STREAMER_VAR      => "accountid"),
            SYNC_SETTINGS_ACCOUNTNAME               => array (  self::STREAMER_VAR      => "accountname"),
            SYNC_SETTINGS_USERDISPLAYNAME           => array (  self::STREAMER_VAR      => "userdisplayname"),
            SYNC_SETTINGS_SENDDISABLED              => array (  self::STREAMER_VAR      => "senddisabled"),
            SYNC_SETTINGS_EMAILADDRESSES            => array (  self::STREAMER_VAR      => "emailaddresses",
                                                                self::STREAMER_TYPE     => "SyncEmailAddresses")
        );

        parent::__construct($mapping);
    }
}