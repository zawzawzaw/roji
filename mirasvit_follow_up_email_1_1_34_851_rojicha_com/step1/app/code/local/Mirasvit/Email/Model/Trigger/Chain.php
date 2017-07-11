<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at http://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   Follow Up Email
 * @version   1.1.34
 * @build     851
 * @copyright Copyright (C) 2017 Mirasvit (http://mirasvit.com/)
 */



/**
 * @method string getType()
 * @method string getDelay()
 * @method int    getDays()
 * @method $this  setDays($days)
 * @method $this  setHours($hours)
 * @method $this  setMinutes($minutes)
 * @method string getFrequencyType()
 * @method $this  setFrequencyType($type)
 * @method $this  setScheduleType($type)
 * @method $this  setFrequency($frequency)
 * @method $this  setRange($range)
 * @method string getExcludeDays()
 * @method int    getTemplateId()
 */
class Mirasvit_Email_Model_Trigger_Chain extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('email/trigger_chain');
    }

    public function getTemplate()
    {
        $template = null;
        $info = explode(':', $this->getTemplateId());

        switch ($info[0]) {
            case 'emaildesign':
                $template = Mage::getModel('emaildesign/template')->load($info[1]);
                break;

            case 'email':
                $template = Mage::getModel('emaildesign/email_template')->load($info[1]);
                break;

            case 'newsletter':
                $template = Mage::getModel('newsletter/template')->load($info[1]);
                break;
        }

        return $template;
    }

    /**
     * Get email chain frequency.
     *
     * @param bool $inSeconds
     *
     * @return int
     */
    public function getFrequency($inSeconds = true)
    {
        $frequency = $this->getData('frequency');
        if ($inSeconds) {
            switch ($this->getData('range')) {
                case Mirasvit_Email_Model_System_Source_Chain_Range::RANGE_DAY:
                    $frequency *= 60 * 60 * 24;
                    break;
                case Mirasvit_Email_Model_System_Source_Chain_Range::RANGE_WEEK:
                    $frequency *= 7 * 24 * 60 * 60;
                    break;
                case Mirasvit_Email_Model_System_Source_Chain_Range::RANGE_MONTH:
                    $frequency *= date('t') * 24 * 60 * 60;
                    break;
                case Mirasvit_Email_Model_System_Source_Chain_Range::RANGE_YEAR:
                    $frequency *= (date('L') ? 366 : 365) * 24 * 60 * 60;
                    break;
            }
        }

        return $frequency;
    }

    /**
     * Get email chain hours.
     *
     * @param bool $inSeconds
     *
     * @return int
     */
    public function getHours($inSeconds = true)
    {
        $hours = $this->getData('hours');
        if ($inSeconds) {
            $hours *= 60 * 60;
        }

        return $hours;
    }

    /**
     * Get email chain minutes.
     *
     * @param bool $inSeconds
     *
     * @return int
     */
    public function getMinutes($inSeconds = true)
    {
        $minutes = $this->getData('minutes');
        if ($inSeconds) {
            $minutes *= 60;
        }

        return $minutes;
    }

    /**
     * Initialize delay parameters for chain model.
     */
    public function prepareSerializedData()
    {
        if (!@unserialize($this->getDelay())) {
            return;
        }

        foreach (unserialize($this->getDelay()) as $key => $value) {
            $this->setData($key, $value);
        }
        $this->setDataChanges(false);
    }

    /**
     * Calculate schedule date based on given time and configured delay for email chain.
     *
     * @param  int $time - timestamp from which calculate schedule date
     *
     * @return int
     */
    public function getScheduledAt($time)
    {
        $scheduledAt = $time;
        $excludeDays = $this->getExcludeDays();
        $hours       = $this->getHours();
        $minutes     = $this->getMinutes();
        $type        = $this->getType() ? $this->getType() : Mirasvit_Email_Model_System_Source_Chain_Type::TYPE_AFTER;

        if ($this->getFrequencyType() == Mirasvit_Email_Model_System_Source_Chain_FrequencyType::FREQUENCY_AFTER) {
            $frequency = $this->getFrequency();
        } else {
            $frequency = 0;
        }

        if ($type == Mirasvit_Email_Model_System_Source_Chain_Type::TYPE_AT) {
            $scheduledAt = $time + (($frequency - ($time - strtotime('00:00', $time)))  + $hours + $minutes);
            if ($time >= $scheduledAt) {
                $scheduledAt += 86400;
            }
        } else {
            $scheduledAt = $time + $frequency + $hours + $minutes;
        }

        $scheduledAt = $scheduledAt + $this->addExcludedDays($scheduledAt, $excludeDays) * 86400;

        return $scheduledAt;
    }

    /**
     * Do not send email in selected days. So we add additional days to schedule date.
     *
     * @param int   $time
     * @param array $excludeDaysOfWeek - array of numeric week days
     *
     * @return int
     */
    private function addExcludedDays($time, $excludeDaysOfWeek)
    {
        $result = 0;
        if (is_array($excludeDaysOfWeek) && (count($excludeDaysOfWeek) > 0)) {
            while (in_array(date('w', $time + $result * 86400), $excludeDaysOfWeek)) {
                ++$result;

                if ($result > 7) {
                    break;
                }
            }
        }

        return $result;
    }
}
