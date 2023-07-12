<?php

namespace App\Controllers;

class Pacientes extends BaseController {
  public function ingresar() {
    // Validación del formulario
    $this->load->library('form_validation');
    $this->form_validation->set_rules('rut', 'RUT', 'required|callback_validar_rut');
    $this->form_validation->set_rules('email', 'Correo electrónico', 'required|valid_email');
    
    if ($this->form_validation->run() === FALSE) {
      // Si la validación falla, redireccionar al formulario con los errores
      $this->load->view('formulario');
    } else {
      // Si la validación es exitosa, guardar los datos en la base de datos
      $datos_paciente = array(
        'rut' => $this->input->post('rut'),
        'nombres' => $this->input->post('nombres'),
        'apellido_paterno' => $this->input->post('apellido_paterno'),
        'apellido_materno' => $this->input->post('apellido_materno'),
        'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
        'sexo' => $this->input->post('sexo'),
        'nombre_social' => $this->input->post('nombre_social'),
        'direccion' => $this->input->post('direccion'),
        'telefono' => $this->input->post('telefono'),
        'email' => $this->input->post('email'),
        'estado_civil' => $this->input->post('estado_civil'),
        'pais' => $this->input->post('pais'),
        'region' => $this->input->post('region'),
        'comuna' => $this->input->post('comuna'),
        'tipo_residencia' => $this->input->post('tipo_residencia')
        // Aquí puede ir la lógica para manejar la fotografía para almacenarla en la base de datos o en el servidor.
      );

      // Guardar los datos en la base de datos (ejemplo)
      $this->load->model('pacientes_model');
      $this->pacientes_model->guardar_paciente($datos_paciente);

      // Redireccionar a una página de éxito o mostrar un mensaje de éxito
      echo '¡Paciente ingresado exitosamente!';
    }
  }

  public function validar_rut($rut) {
    // Validar el formato y el dígito verificador del RUT

    // Ejemplo de validación de RUT en formato XX.XXX.XXX-X
    if (!preg_match('/^\d{1,2}\.\d{3}\.\d{3}[-][\dkK]$/', $rut)) {
      $this->form_validation->set_message('validar_rut', 'El campo {field} no es válido.');
      return FALSE;
    }

    return TRUE;
  }
}
