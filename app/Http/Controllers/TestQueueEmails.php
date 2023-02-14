<?php

namespace App\Http\Controllers;

class TestQueueEmails extends Controller {
    /**
     * test email queues
     **/
    public function sendTestEmails() {
        $emailJobs = new TestSendEmail();
        $this->dispatch($emailJobs);
    }
}