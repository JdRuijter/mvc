<?php
/**
 * Locations Controller
 */
class LocationsController{

    /**
     * Action "overview"
     * URL: /index.php?controller=locations&action=overview
     */
    public function overview(){
        $this->showOverview();
    }

    public function delete(){
      //get id
      $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

      // load model
      require_once APP_PATH . '/models/LocationsModel.php';

      //delete van database
      $locationsModel = new LocationsModel();
      $result = $locationsModel->delete($id);

      //$this->showOverview();

      //redirect overview
    redirect(APP_BASE_URL . '/index.php?controller=locations&action=overview');
    }

    public function addForm(){
      loadView('assets/header');
      loadView('locations/form');
      loadView('assets/footer');
    }

    public function add(){

      $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
      //load modal
      require_once APP_PATH . '/models/LocationsModel.php';

      $locationsModel = new LocationsModel();
      $result = $locationsModel->add($location);

      redirect(APP_BASE_URL . '/index.php?controller=locations&action=overview');
    }

    public function updateForm(){
      loadView('assets/header');
      loadView('locations/form-update');
      loadView('assets/footer');
    }

    public function update(){
      //get id
      $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

      //get location
      $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);

      // load model
      require_once APP_PATH . '/models/LocationsModel.php';

      $locationsModel = new LocationsModel();
      $result = $locationsModel->update($id, $location);

      //redirect overview

      redirect(APP_BASE_URL . '/index.php?controller=locations&action=overview');
    }

    private function showOverview(){
      // load model
      require_once APP_PATH . '/models/LocationsModel.php';

      // get all locations
      $locationsModel = new LocationsModel();
      $locations = $locationsModel->getAll();

      // show views
      loadView('assets/header');
      loadView('locations/overview', [
          'locations' => $locations,
      ]);
      loadView('assets/footer');
    }
}
