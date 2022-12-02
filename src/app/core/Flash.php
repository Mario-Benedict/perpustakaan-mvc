<?php

class Flash {
    public static function setFlash($message, $action, $type) {
        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type
        ];
    }

    public static function flash() {
        if (isset($_SESSION['flash'])) {
            echo '<div class="fixed top-0 right-0 w-full max-w-[500px] mx-5 mt-5">
                    <div class="bg-'. $_SESSION['flash']['type'] . ' text-white font-bold rounded-lg shadow-lg p-5">
                        <span class="block">' . $_SESSION['flash']['message'] . '. ' . $_SESSION['flash']['action'] . '</span>
                    </div>
                  </div>';

            unset($_SESSION['flash']);
        }
    }
}