<?php
/**
* Arush Analytics block
*
* @codepool   Local
* @category   Arush
* @package    Arush_Analytics
* @module     Analytics
*/
class Arush_Analytics_Block_Chartbeat extends Mage_Core_Block_Template
{
    public function getChartbeatOn()
      {        
          return (boolean)Mage::getStoreConfig('analytics/chartbeat/analytics_chartbeat_on');
      }
    
    public function getChartbeatHeadCode()
      {        
          return (string)Mage::getStoreConfig('analytics/track/analytics_chartbeat_head_code');
      }
    
    public function getChartbeatFootCode()
      {        
          return (string)Mage::getStoreConfig('analytics/track/analytics_chartbeat_foot_code');
      }
    
    
}
