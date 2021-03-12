<?php

namespace Larangular\MetableRoutes\Http\Controllers;

use Larangular\Metadata\Traits\Metable;
use Larangular\RoutingController\MakeResponse;
use Larangular\MetableRoutes\Http\Requests\StoreMetadataRequest;
use Larangular\MetableRoutes\Models\RoutingMetadata;

class Gateway {

    use MakeResponse;

    public function model() {
        return RoutingMetadata::class;
    }

    public function index($metable) {
        if (!instance_has_trait($metable, Metable::class)) {
            return [];
        }

        return $this->makeResponse($metable->meta()
                                           ->get());
    }

    public function show($metable, $metadata) {
        return $this->makeResponse($metadata);
    }

    public function store(StoreMetadataRequest $request, $metable) {
        $validated = $request->validated();
        $metable->addUniqueMeta($validated['key'], $validated['value']);
        return $this->makeResponse($metable->meta()
                                           ->where('key', $validated['key'])
                                           ->get());
    }


}
