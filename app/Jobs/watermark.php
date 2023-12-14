<?php

namespace App\Jobs;

use Spatie\Image\Image as SpatieImage;
use App\Models\Image; 
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class watermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $product_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($product_image_id)
    {
        $this->product_image_id = $product_image_id;
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $i = Image::find($this->product_image_id);
        if (!$i){
            return;
        }

        $srcPath = base_path("public" . $i->getUrl(400,300));
        $image = file_get_contents($srcPath);
        


        $image = SpatieImage::load($srcPath)
                      ->watermark(base_path('resources/img/ricardo.jpg'))
                      ->watermarkPosition(Manipulations::POSITION_CENTER)
                      ->watermarkPadding(10, 10, Manipulations::UNIT_PERCENT) // 10% padding around the watermark
                      ->watermarkOpacity(50);

                $image->save($srcPath);
                      

    }
}
