<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UploadBook implements ShouldQueue{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $Book;
    protected $link;

    public function __construct($Book,$link){
        $this->Book = $Book;
        $this->link = $link;
    }

    public function handle(): void{
        $this->Book->link = 'Yosildi';
        $this->Book->save();
    }
}
