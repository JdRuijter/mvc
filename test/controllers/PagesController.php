<?php
/**
 * Pages Controller
 */
class PagesController
{

    /**
     * Action "home"
     * URL: /index.php?controller=pages&action=home
     */
    public function home()
    {
        // show views
        loadView('assets/header');
        loadView('pages/home');
        loadView('assets/footer');
    }

    /**
     * Action "about"
     * URL: /index.php?controller=pages&action=about
     */
    public function about()
    {
        // show views
        loadView('assets/header');
        loadView('pages/about');
        loadView('assets/footer');
    }

}
