<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SSEController extends Controller
{
    //
    public function sseForDashboard()
    {

        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');


       
            $eventData = [
                'testData' => 123,
            ];

            echo "data:" . json_encode($eventData) . "\n\n";
            ob_flush();
            flush();
        } 
}
