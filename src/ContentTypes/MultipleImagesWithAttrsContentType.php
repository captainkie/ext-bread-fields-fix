<?php

namespace ExtendedBreadFormFieldsFix\ContentTypes;

use TCG\Voyager\Http\Controllers\ContentTypes\BaseType;
use TCG\Voyager\Http\Controllers\ContentTypes\MultipleImage;

class MultipleImagesWithAttrsContentType extends BaseType
{
    /**
     * @return string
     */
    public function handle()
    {
        $files = []; 
        if ($this->request->file($this->row->field)){
            $pathes = (new MultipleImage($this->request, $this->slug, $this->row, $this->options))->handle();
            foreach (json_decode($pathes) as $i => $path) {
                $files[$i]['original_name'] = $path;
                $files[$i]['download_link'] = $path;
                $files[$i]['alt'] = '';
                $files[$i]['title'] = '';
            }
    
        }
        return json_encode($files);

    }
}
