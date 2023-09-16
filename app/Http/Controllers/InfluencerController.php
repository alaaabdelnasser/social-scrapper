<?php

namespace App\Http\Controllers;

use App\Http\Resources\InfluencerCollection;
use App\Models\Influencer;
use MarcinOrlowski\ResponseBuilder\Exceptions\ArrayWithMixedKeysException;
use MarcinOrlowski\ResponseBuilder\Exceptions\ConfigurationNotFoundException;
use MarcinOrlowski\ResponseBuilder\Exceptions\IncompatibleTypeException;
use MarcinOrlowski\ResponseBuilder\Exceptions\InvalidTypeException;
use MarcinOrlowski\ResponseBuilder\Exceptions\MissingConfigurationKeyException;
use MarcinOrlowski\ResponseBuilder\Exceptions\NotIntegerException;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;

class InfluencerController extends Controller
{
    /**
     * @throws InvalidTypeException
     * @throws NotIntegerException
     * @throws ConfigurationNotFoundException
     * @throws IncompatibleTypeException
     * @throws ArrayWithMixedKeysException
     * @throws MissingConfigurationKeyException
     */
    public function GetAllInfluencers()
    {
        return ResponseBuilder::success(InfluencerCollection::collection(Influencer::paginate(15))
            ->response()->getData(true));
    }

    public function GetInfluencersById($id)
    {

        return ResponseBuilder::success((new InfluencerCollection(Influencer::find($id))));
    }
}
