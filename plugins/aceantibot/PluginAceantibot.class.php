<?php
/*---------------------------------------------------------------------------
 * @Plugin Name: aceAntiBot
 * @Plugin Id: aceantibot
 * @Plugin URI:
 * @Description: AntiBot Plugin for LiveStreet/ACE
 * @Version: 1.0.0
 * @Author: Vadim Shemarov (aka aVadim)
 * @Author URI:
 * @LiveStreet Version: 1.0.0
 * @File Name:
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *----------------------------------------------------------------------------
 */

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attempt!');
}

class PluginAceantibot extends Plugin {

    // Объявление делегирований (нужны для того, чтобы назначить свои экшны и шаблоны)
    public $aDelegates = array(
    );

    // Объявление переопределений (модули, мапперы и сущности)
    protected $aInherits=array(
        'action'  =>array('ActionLogin'=>'_ActionLogin'),
    );

    // Активация плагина
    public function Activate() {
        return true;
    }

    // Деактивация плагина
    public function Deactivate(){
    }


    // Инициализация плагина
    public function Init() {
        $this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__)."/css/style.css"); // Добавление своего CSS
        //$this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__)."/js/script.js"); // Добавление своего JS
    }
}

// EOF
