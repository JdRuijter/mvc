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
        loadView('theme/header');
        loadView('pages/home', [
            'name' => 'Tom',
            'age' => 20,
        ]);
        loadView('theme/footer');
    }

    /**
     * Action "about"
     * URL: /index.php?controller=pages&action=about
     */
    public function about()
    {
        // show views
        loadView('theme/header');
        loadView('pages/about');
        loadView('theme/footer');
    }

}
