<?php


namespace Kiranaryal\PathaoCourierNepal\Requests;


class PathaoStoreRequest extends BasePathaoRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string'
            ],
            'contact_name' => [
                'required',
                'string'
            ],
            'contact_number' => [
                'required',
                'string',
'regex:/^(?:\+977[- ]?|977[- ]?|0)?9[78]\d{8}$/'
            ],
            'address' => [
                'required',
                'string'
            ],
            'city_id' => [
                'required',
                'numeric'
            ],
            'zone_id' => [
                'required',
                'numeric'
            ],
            'area_id' => [
                'required',
                'numeric'
            ],
        ];
    }
}
