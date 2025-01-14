<?php
/**
 * This file is part of osCommerce ecommerce platform.
 * osCommerce the ecommerce
 *
 * @link https://www.oscommerce.com
 * @copyright Copyright (c) 2000-2022 osCommerce LTD
 *
 * Released under the GNU General Public License
 * For the full copyright and license information, please view the LICENSE.TXT file that was distributed with this source code.
 */

namespace frontend\design\boxes\checkout;

use Yii;
use yii\base\Widget;
use frontend\design\IncludeTpl;

class ContactInformation extends Widget
{

    public $file;
    public $params;
    public $settings;
    public $manager;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if(is_object($this->manager)){
            $this->params['manager'] = $this->manager;
        }
        
        return IncludeTpl::widget(['file' => 'boxes/checkout/contact-information.tpl', 'params' => array_merge($this->params, [
            'settings' => $this->settings,
            'id' => $this->id
        ])]);
    }
}