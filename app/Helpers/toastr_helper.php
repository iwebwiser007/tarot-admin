<?php

// app/Helpers/helpers.php

if (!function_exists('toastr_notify')) {
    /**
     * Toastr notification helper function
     * 
     * @param string $message
     * @param string $type
     * @return void
     */
    function toastr_notify($message, $type = 'success')
    {
        // Flash message to session for toastr
        session()->flash('toastr', [
            'message' => $message,
            'type' => $type
        ]);
    }
}
