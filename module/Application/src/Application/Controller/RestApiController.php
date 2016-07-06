<?php

/**
 * Description of RestApiController
 *
 * @author robertkawalec
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class RestApiController extends AbstractRestfulController {

    public function getList() {   // Action used for GET requests without resource Id
        return new JsonModel(
                array('data' =>
            array(
                array('id' => 1, 'mark' => 'Fiaat', 'Model' => 'Uno'),
                array('id' => 2, 'mark' => 'Foaaaaard', 'Model' => 'Fiesta'),
                array('id' => 3, 'mark' => 'Volkswagena', 'Model' => 'Passat'),
            )
                )
        );
    }

    public function get($id) {   // Action used for GET requests with resource Id
        return new JsonModel(
                array('data' =>
            array(
                array('id' => 1, 'mark' => 'Fiat', 'Model' => 'Uno'),
                array('id' => 2, 'mark' => 'Ford', 'Model' => 'Fiesta'),
                array('id' => 3, 'mark' => 'Volkswagen', 'Model' => 'Passat'),
            )
                )
        );
    }

    public function create($data) {   // Action used for POST requests
        return new JsonModel(array('data' => $data));
    }

    public function update($id, $data) {   // Action used for PUT requests
        return new JsonModel(array('data' => array('id' => 3, 'name' => 'Updated Album', 'band' => 'Updated Band')));
    }

    public function delete($id) {   // Action used for DELETE requests
        return new JsonModel(array('data' => 'album id 3 deleted'));
    }

}
