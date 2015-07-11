<?php
namespace App\MainLanding;

use Core\Page\AbstractWebPage;

/**
 * Класс описания главной страницы.
 * @author Andrey Mostovoy <stalk.4.me@gmail.com>
 */
class MainLandingPage extends AbstractWebPage {
    /**
     * {@inheritdoc}
     */
    public function run() {
        return true;
    }
}
