<?php
namespace CHASE;
define(__NAMESPACE__. '\\CLASSES_DIR', \CLASSES_DIR . '/ChasePaymentGateway/classes/');
define(__NAMESPACE__. '\\MODELS_DIR', \CLASSES_DIR . '/ChasePaymentGateway/models/');
const WSDL_FILE = 'https://wsvar.paymentech.net/PaymentechGateway/wsdl/PaymentechGateway.wsdl';
const USERNAME    =  '5TARINMARK';
const PASSWORD    =   'PA55WORD';
const BIN         =   '000002';
const MERCHANTID  =   '700000005299';
const VERSION     =   '2.6';
const TERMINALID  =   '001';  