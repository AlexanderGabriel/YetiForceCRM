<?php

/**
 * Inventory TaxMode Field Class
 * @package YetiForce.Fields
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Vtiger_TaxMode_InventoryField extends Vtiger_Basic_InventoryField
{

	protected $name = 'TaxMode';
	protected $defaultLabel = 'LBL_TAX_MODE';
	protected $defaultValue = '0';
	protected $columnName = 'taxmode';
	protected $dbType = 'smallint(1) DEFAULT 0';
	protected $values = [0 => 'group', 1 => 'individual'];
	protected $blocks = [0];

	/**
	 * Getting value to display
	 * @param int $value
	 * @return string
	 */
	public function getDisplayValue($value)
	{
		if ($value === '') {
			return '';
		}
		return 'LBL_' . strtoupper($this->values[$value]);
	}
}
