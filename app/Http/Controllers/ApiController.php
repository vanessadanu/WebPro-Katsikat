<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPortfolioRequest;
use App\Http\Requests\DeletePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Http\Requests\AddServiceRequest;
use App\Http\Requests\DeleteServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //get credentials from request
        $credentials = $request->only('email', 'password');

        //if auth failed
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Email or Password is incorrect'
            ], 401);
        }

        //if auth success
        return response()->json([
            'success' => true,
            'user'    => auth()->guard('api')->user(),
            'token'   => $token
        ], 200);
    }

    public function logout(Request $request)
    {
        //remove token
        $removeToken = JWTAuth::invalidate(JWTAuth::getToken());

        if ($removeToken) {
            //return response JSON
            return response()->json([
                'success' => true,
                'message' => 'Logout success!',
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Portfolio::all();

        return response($data);
    }

    public function serviceIndex()
    {
        $services = Service::all();

        return response($services);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddPortfolioRequest $request)
    {
        $imagePath = $request->file('image_file_url')->store('uploads', ['disk' => 'public']);

        $newPortfolio = new Portfolio();
        $newPortfolio->title = $request->title;
        $newPortfolio->service_id = $request->service;
        $newPortfolio->description = $request->description;
        $newPortfolio->image_file_url = '/storage/' . $imagePath;
        $newPortfolio->save();

        return response('Add portfolio success');
    }

    public function serviceStore(AddServiceRequest $request)
    {
        $newService = new Service();
        $newService->name = $request->name;
        $newService->description = $request->description;
        $newService->price = $request->price;
        $newService->save();

        return response('Add service success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->title = $request->title;
        $portfolio->service_id = $request->service;
        $portfolio->description = $request->description;
        $portfolio->save();

        return response('Update portfolio success');
    }

    public function serviceUpdate(UpdateServiceRequest $request, string $id)
    {
        $service = Service::findOrFail($id);
        $service->name = $request->title;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();

        return response('Update service success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeletePortfolioRequest $request, string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return response('Delete portfolio success');
    }

    public function serviceDestroy(DeleteServiceRequest $request, string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return response('Delete service success');
    }
}
