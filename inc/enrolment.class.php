<?php

/**
   Copyright (C) 2016 Teclib'

   This file is part of Armadito Plugin for GLPI.

   Armadito Plugin for GLPI is free software: you can redistribute it and/or modify
   it under the terms of the GNU Affero General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   Armadito Plugin for GLPI is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
   GNU Affero General Public License for more details.

   You should have received a copy of the GNU Affero General Public License
   along with Armadito Plugin for GLPI. If not, see <http://www.gnu.org/licenses/>.

**/

include_once("toolbox.class.php");

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

/**
 * Class managing Armadito devices' enrolment
 **/
class PluginArmaditoEnrolment {
     protected $agentid;

     function __construct($params) {

         if(isset($params['agentid'])) {
             $this->agentid = PluginArmaditoToolbox::validateInt($params['agentid']);
         }

         PluginArmaditoToolbox::logIfExtradebug(
            'pluginArmadito-enrolment',
            'New PluginArmaditoEnrolment object.'
         );
     }

    /**
    * Get agentId
    *
    * @return agentid
    **/
     function getAgentid(){
        return $this->agentid;
     }

    /**
    * Set agentId
    *
    * @return nothing
    **/
     function setAgentid($agentid_){
         $this->agentid = PluginArmaditoToolbox::validateInt($agentid_);
     }

    /**
    * Run Enrollment new Armadito device
    *
    * @return agentid
    **/
     function enroll(){

         // TODO
         $this->setAgentid(10);

         PluginArmaditoToolbox::logIfExtradebug(
            'pluginArmadito-enrolment',
            'Enroll new Device with id '.$this->agentid.'.'
         );

         $response = '"success": "new device successfully enrolled", "agentid": "'.$this->agentid.'"';

         return $response;
     }
}
?>