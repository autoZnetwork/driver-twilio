<?php
return array (
  'botman/driver-config' => 
  array (
    0 => 
    array (
      'value' => 'stubs/twilio.php',
      'package' => 'botman/driver-twilio',
      'packageDir' => './',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
  ),
  'botman/driver' => 
  array (
    0 => 
    array (
      'value' => 'BotMan\\Drivers\\Twilio\\TwilioVoiceDriver',
      'package' => 'botman/driver-twilio',
      'packageDir' => './',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
    1 => 
    array (
      'value' => 'BotMan\\Drivers\\Twilio\\TwilioMessageDriver',
      'package' => 'botman/driver-twilio',
      'packageDir' => './',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
  ),
);
