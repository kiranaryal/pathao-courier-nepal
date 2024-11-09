<?php


namespace Kiranaryal\PathaoCourierNepal\Requests;


class PathaoOrderPriceCalculationRequest extends BasePathaoRequest
{
    public function rules()
    {
        return [
            'delivery_type' => [
                'required',
                'numeric'
            ],
            'item_type' => [
                'required',
                'numeric'
            ],
            'item_weight' => [
                'required',
                'numeric'
            ],
            'recipient_city' => [
                'required',
                'numeric'
            ],
            'recipient_zone' => [
                'required',
                'numeric'
            ],
            'store_id' => [
                'required',
                'numeric',
            ],
        ];
    }
}
