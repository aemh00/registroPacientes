<?php

namespace App\Controllers;

class PacientesController extends BaseController {
  public function ingresar() {
    // ...

    if ($this->form_validation->run() === FALSE) {
      // Si la validación falla, redireccionar al formulario con los errores
      $this->load->view('formulario');
    } else {
      // Si la validación es exitosa, guardar los datos en un archivo local en formato JSON
      $datos_paciente = array(
        // ...
      );

      $json_data = json_encode($datos_paciente);
      $file_path = FCPATH . 'data/pacientes.json'; // Ruta del archivo JSON}
      
      if (file_put_contents($file_path, $json_data)) {
        // Redireccionar a una página de éxito o mostrar un mensaje de éxito
        echo '¡Paciente ingresado exitosamente!';
      } else {
        // Mostrar un mensaje de error si no se pudo guardar el archivo
        echo 'Error al guardar los datos del paciente.';
      }
    }
  }
}
