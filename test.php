<?php
// Include the Pusher PHP library
require 'vendor/autoload.php';

// Pusher configuration
$options = array(
    'cluster' => 'ap1',      // Example: 'us2'
    'useTLS' => true,                 // Recommended to use TLS for security
);

// Initialize Pusher
$pusher = new Pusher\Pusher(
    '3ef10ab69edd1c712eeb',                  // Pusher app key
    'd21e52ac4ffabdc37745',               // Pusher app secret
    '1897337',                   // Pusher app ID
    $options
);

// Data to be sent with the event (this can be anything you want to notify)
$data = "Someone At The Door";

// Send the event to a channel
$result = $pusher->trigger('doorbell', 'bell', $data);

// Check if the notification was sent successfully
if ($result) {
    echo 'Notification sent successfully!';
} else {
    echo 'Failed to send notification.';
}
?>
