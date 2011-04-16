<?php

require_once __DIR__ . '/../src/Http/Exception/AbstractException.php';
require_once __DIR__ . '/../src/Http/Exception/Factory.php';

// Client Errors
$dir = __DIR__ . '/../src/Http/Exception/Client/';
require_once $dir . 'AbstractException.php';
require_once $dir . 'BadRequest.php';
require_once $dir . 'Conflict.php';
require_once $dir . 'ExpectationFailed.php';
require_once $dir . 'FailedDependency.php';
require_once $dir . 'Forbidden.php';
require_once $dir . 'Gone.php';
require_once $dir . 'ImATeapot.php';
require_once $dir . 'LengthRequired.php';
require_once $dir . 'Locked.php';
require_once $dir . 'MethodNotAllowed.php';
require_once $dir . 'NotAcceptable.php';
require_once $dir . 'NotFound.php';
require_once $dir . 'PaymentRequired.php';
require_once $dir . 'PreconditionFailed.php';
require_once $dir . 'ProxyAuthenticationRequired.php';
require_once $dir . 'RequestEntityTooLarge.php';
require_once $dir . 'RequestedRangeNotSatisfiable.php';
require_once $dir . 'RequestTimeout.php';
require_once $dir . 'RequestUriTooLong.php';
require_once $dir . 'ThereAreTooManyConnectionsFromYourInternetAddress.php';
require_once $dir . 'Unauthorized.php';
require_once $dir . 'UnorderedCollection.php';
require_once $dir . 'UnprocessableEntity.php';
require_once $dir . 'UnsupportedMediaType.php';
require_once $dir . 'UpgradeRequired.php';

// Server Errors
$dir = __DIR__ . '/../src/Http/Exception/Server/';
require_once $dir . 'AbstractException.php';
require_once $dir . 'BadGateway.php';
require_once $dir . 'BandwidthLimitExceeded.php';
require_once $dir . 'GatewayTimeout.php';
require_once $dir . 'HttpVersionNotSupported.php';
require_once $dir . 'InsufficientStorage.php';
require_once $dir . 'InternalServerError.php';
require_once $dir . 'NotExtended.php';
require_once $dir . 'NotImplemented.php';
require_once $dir . 'ServiceUnavailable.php';
require_once $dir . 'VariantAlsoNegotiates.php';
