<?php

namespace App\Http\Resources;
header('Content-Type: text/html; charset=utf-8');
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=> $this->name,
            'email'=>$this->email,
            'age' => $this->age,
            'experience' => $this->experience,
            'avg_salary' => $this->avg_salary,
            'photo' => $this->photo,
        ];
        
    }
   
}
