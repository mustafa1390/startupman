<?php

namespace App\Http\Resources\Api\Section;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SectionUserResource extends JsonResource
{
    protected $landing_page;

    public function __construct($resource, $landing_page = null)
    {
        parent::__construct($resource);
        $this->landing_page = $landing_page;
    }
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'name' => $this->name ,
            'selected' => law_selected_section($this->id,'Section',$this->landing_page ),
            // 'landing_page' => $this->landing_page,

        ];
    }

        public static function collection($resource, $landing_page = null)
    {
        $collection = parent::collection($resource);
        $collection->each(function ($item) use ($landing_page) {
            $item->landing_page = $landing_page;
            
        });
        return $collection;
    }

}
