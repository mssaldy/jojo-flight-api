<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

/**
     * @OA\Info(
     *   title="jojo-flight-api",
     *   version="1.0",
     *   @OA\Contact(
     *     email="saldysyahputra1@gmail.com.com",
     *     name="https://github.com/mssaldy"
     *   )
     * )
     */

/**
 * @OA\Get(
 *     path="/",
 *     @OA\Response(response="200", description="Homepage API")
 * )
 */

/**
 * @OA\POST(
 *     path="/register",
     *     @OA\Parameter(
     *         name="email",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="username",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="password",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Register user")
 * )
 */

 /**
 * @OA\POST(
 *     path="/login",
     *     @OA\Parameter(
     *         name="username",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="password",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Login user")
 * )
 */

 /**
 * @OA\GET(
 *     path="/airlines",
     *     @OA\Parameter(
     *         name="api_token",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Get All Airlines Data")
 * )
 */

 /**
 * @OA\GET(
 *     path="/airlines/{id}",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="api_token",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Get Airlines by Idr")
 * )
 */

 /**
 * @OA\POST(
 *     path="/airlines/create",
     *     @OA\Parameter(
     *         name="name_airlines",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="api_token",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Create new Airlines")
 * )
 */

 /**
 * @OA\POST(
 *     path="/airlines/update/{id}",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="name_airlines",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="api_token",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Update Airlines by Id")
 * )
 */

 /**
 * @OA\DELETE(
 *     path="/airlines/delete/{id}",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="api_token",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Delete Airlines by Id")
 * )
 */

 /**
 * @OA\GET(
 *     path="/flights",
     *     @OA\Parameter(
     *         name="api_token",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Get All Flights Data")
 * )
 */

 /**
 * @OA\GET(
 *     path="/flights/filter",
     *     @OA\Parameter(
     *         name="api_token",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="flightNumber",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Get Flights by Filter FlightNumber")
 * )
 */
 
 /**
 * @OA\GET(
 *     path="/flights/{id}",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="api_token",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Get Flights by Id")
 * )
 */

 /**
 * @OA\POST(
 *     path="/flights/create",
     *     @OA\Parameter(
     *         name="user_id",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="airline_id",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="flightNumber",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="departurePort",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="arrivalPort",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="departureTime",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="arrivalTime",
     *         in="query",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="api_token",
     *         in="query",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
 *     @OA\Response(response="200", description="Create new Flights")
 * )
 */

class Annotation extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

}