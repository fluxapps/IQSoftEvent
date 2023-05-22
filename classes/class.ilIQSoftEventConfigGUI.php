<?php

require_once __DIR__ . "/../vendor/autoload.php";

use fluxlabs\Plugins\IQSoftEvent\Config\ConfigCtrl;
use fluxlabs\Plugins\IQSoftEvent\Utils\IQSoftEventTrait;
use fluxlabs\Plugins\IQSoftEvent\Config\Form\ConfigFormGUI;
use srag\DIC\IQSoftEvent\DICTrait;
use fluxlabs\Plugins\IQSoftEvent\Infrastructure\ActiveRecord\FailedTransmissionAR;

/**
 * Class ilIQSoftEventConfigGUI
 *
 * Generated by SrPluginGenerator v2.8.1
 *
 * @author fluxlabs AG <support@fluxlabs.ch>
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilIQSoftEventConfigGUI extends ilPluginConfigGUI
{

    use DICTrait;
    use IQSoftEventTrait;

    const CMD_CONFIGURE = "configure";
    const CMD_SAVE = "save";
    const CMD_RETRY_FAILED_TRANSMISSIONS = "retryFailedTransmissions";
    const PLUGIN_CLASS_NAME = ilIQSoftEventPlugin::class;
    const CMD_MORE_INFO_FOR_FAILED = 'moreInfoForFailed';

    /**
     * ilIQSoftEventConfigGUI constructor
     */
    public function __construct()
    {

    }

    public function txt($lang_var) : string
    {
        return self::plugin()->translate('config_' . $lang_var);
    }

    /**
     * @inheritDoc
     */
    public function performCommand(/*string*/ $cmd) /*: void*/
    {
        $this->setTabs();

        $next_class = self::dic()->ctrl()->getNextClass($this);

        switch (strtolower($next_class)) {
            default:
                $cmd = self::dic()->ctrl()->getCmd();

                switch ($cmd) {
                    case self::CMD_CONFIGURE:
                    case self::CMD_SAVE:
                    case self::CMD_RETRY_FAILED_TRANSMISSIONS:
                    case self::CMD_MORE_INFO_FOR_FAILED:
                        $this->{$cmd}();
                        break;

                    default:
                        break;
                }
                break;
        }
    }


    /**
     *
     */
    protected function configure() /*: void*/
    {
//        self::dic()->ctrl()->redirectByClass(ConfigCtrl::class, ConfigCtrl::CMD_CONFIGURE);
        $failed_transmissions = FailedTransmissionAR::count();
        if ($failed_transmissions > 0) {
            $retry_link = self::dic()->ctrl()->getLinkTarget($this, self::CMD_RETRY_FAILED_TRANSMISSIONS);
            $retry_label = self::plugin()->translate('retry');
            $retry = "<a href=\"{$retry_link}\">{$retry_label}</a>";
            $info_link = self::dic()->ctrl()->getLinkTarget($this, self::CMD_MORE_INFO_FOR_FAILED);
            $info_label = self::plugin()->translate('here');
            $more_infos = "<a href=\"{$info_link}\">{$info_label}</a>";
            ilUtil::sendQuestion(self::plugin()->translate('failed_transmissions_warning', "",
                [$failed_transmissions, $more_infos, $retry]));
        }
        $configFormGUI = new ConfigFormGUI($this, self::iQSoftEvent()->config());
        self::output()->output($configFormGUI);
    }

    protected function save()
    {
        /** @var ConfigFormGUI $configFormGUI */
        $configFormGUI = new ConfigFormGUI($this, self::iQSoftEvent()->config());
        if ($configFormGUI->storeForm()) {
            ilUtil::sendSuccess($this->txt('saved_successfully'), true);
            self::dic()->ctrl()->redirect($this, self::CMD_CONFIGURE);
        }
        self::output()->output($configFormGUI);
    }

    protected function retryFailedTransmissions()
    {
        /** @var ilIQSoftEventPlugin $plugin */
        $plugin = self::getPluginObject();
        $failed_count = 0;
        $success_count = 0;
        /** @var FailedTransmissionAR $record */
        foreach (FailedTransmissionAR::get() as $record) {
            try {
                $srCertificate = new srCertificate($record->getCertificateId());
                $plugin->transmitCertificate($srCertificate);
            } catch (Exception $e) {
                $failed_count++;
                $record->setErrorMsg($e->getMessage());
                $record->setStackTrace($e->getTraceAsString());
                $record->setTimestamp(time());
                $record->update();
                continue;
            }
            $success_count++;
            $record->delete();
        }
        ilUtil::sendInfo(self::plugin()->translate('config_retry_info', "", [$success_count, $failed_count]),
            true);
        self::dic()->ctrl()->redirect($this, self::CMD_CONFIGURE);
    }

    private function moreInfoForFailed()
    {
        print("<pre>" . print_r(FailedTransmissionAR::getArray(), true) . '</pre>');
        exit;
    }

    /**
     *
     */
    protected function setTabs() /*: void*/
    {
    }
}