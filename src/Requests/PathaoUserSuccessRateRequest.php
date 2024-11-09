<?php


namespace Kiranaryal\PathaoCourierNepal\Requests;


class PathaoUserSuccessRateRequest extends BasePathaoRequest
{
    public function rules()
    {
        return [
            'phone' => [
                'required',
                'string',
'regex:/^(?:\+977[- ]?|977[- ]?|0)?9[78]\d{8}$/'
            ],
        ];
    }
}
