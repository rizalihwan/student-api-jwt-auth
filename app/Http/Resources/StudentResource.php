<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'full_name' => $this->full_name,
            'nama_kelas' => $this->classroom->name,
            'status' => $this->identification()
        ];
    }

    private function identification()
    {
        $for_result = $this->full_name;
        if($for_result == 'Zhalun' || $for_result == 'Rizal Ihwan Sulaiman')
        {
            return "SI GANTENG INIMAH";
        } else {
            return "JELEK!";
        }
    }
}
