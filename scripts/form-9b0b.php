<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'OBD CHARM - New Query',
    'email_message' => 'Someone just filled a query on OBD CHARM&#39;S Website. Get in touch!',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'lavizaniazi2001@gmail.com',
    'to' => 'hashim@neduet.edu.pk'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>