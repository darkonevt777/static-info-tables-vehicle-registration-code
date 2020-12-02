<?php
namespace SJBR\StaticInfoTables\Domain\Model;
/**
 * winzer-service
 *
 *  (c) 2020 Martin Lazar-Rudolf <martin@lazar-rudolf.de>
 *  (c) 2013 Stanislas Rolland <typo3(arobas)sjbr.ca>
 *
 * Copyright 2020 - Beyond Media GmbH
 * @author: Martin Lazar-Rudolf <martin@lazar-rudolf.de>
 * Created: 19.11.20 14:47
 */

/**
 * The Country model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Country extends AbstractEntity
{
    /**
     * The vehicle registration code
     * @var string
     */
    protected $vehicleRegistrationCode;
    
    /**
     * Gets the vehicle registration code
     *
     * @return string
     */
    public function getVehicleRegistrationCode()
    {
        return $this->vehicleRegistrationCode;
    }
    
    /**
     * Sets the vehicle registration code
     *
     * @param string $vehicleRegistrationCode
     *
     * @return void
     */
    public function setVehicleRegistrationCode(string $vehicleRegistrationCode)
    {
        $this->vehicleRegistrationCode = $vehicleRegistrationCode;
    }
    
    
}