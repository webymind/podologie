<?php

namespace App\Http\Controllers;

use App\Models\Service; 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    // public function store(Request $request)
    // {
    //     // Validate incoming data
    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?/', // Validation for two decimal places
    //     ]);

    //     try {
    //         // Create a new service record using the validated data
    //         $service = Service::create($validatedData);

    //         return response()->json(['message' => 'Service created successfully', 'service' => $service], 201);
    //     } catch (\Exception $e) {
    //         // Handle any exceptions that might occur during the creation process
    //         return response()->json(['message' => 'Error creating service', 'error' => $e->getMessage()], 500);
    //     }
    // }

            public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?/',
        ]);

        try {
            $service = Service::create($validatedData);
            return response()->json(['message' => 'Service created successfully', 'service' => $service], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating service', 'error' => $e->getMessage()], 500);
        }
    }


    public function getData(Request $request)
    {
        try {
            $columns = ['id', 'name', 'price']; // Define columns available for searching

            $totalData = Service::count(); // Get total number of records

            $searchValue = $request->input('search.value'); // Get search value entered by user
            $limit = $request->input('length'); // Number of records per page
            $start = $request->input('start'); // Start index of the records
            $orderColumnIndex = $request->input('order.0.column');
            $orderColumnName = $columns[$orderColumnIndex]; // Get column name to order by
            $orderDir = $request->input('order.0.dir'); // Get order direction

            $query = Service::select('id', 'name', 'price');

            // Apply search filter
            if (!empty($searchValue)) {
                $query->where(function ($q) use ($columns, $searchValue) {
                    foreach ($columns as $column) {
                        $q->orWhere($column, 'like', '%' . $searchValue . '%');
                    }
                });
            }

            // Get total number of filtered records
            $totalFiltered = $query->count();

            // Apply ordering and pagination
            $services = $query->orderBy($orderColumnName, $orderDir)
                ->offset($start)
                ->limit($limit)
                ->get();

            return response()->json([
                'draw' => intval($request->input('draw')),
                'recordsTotal' => $totalData,
                'recordsFiltered' => $totalFiltered,
                'data' => $services
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $service = Service::findOrFail($id);
            return response()->json(['service' => $service]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Service not found'], 404);
        }
    }

        public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.partials.service', compact('service'));
    }



    public function update(Request $request, $id)
    {
        try {
            // Find the service by ID
            $service = Service::findOrFail($id);

            // Validate incoming request data
            $validatedData = $request->validate([
                'name' => 'required',
                'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?/', // Validation for two decimal places
            ]);

            // Update only if there are changes
            if ($service->name !== $validatedData['name'] || $service->price !== $validatedData['price']) {
                $service->update($validatedData);
            } else {
                // No changes, return the existing service data
                return response()->json(['service' => $service], 200);
            }

            return response()->json(['service' => $service], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error updating service'], 500);
        }
    }




    public function destroy($id)
    {
        try {
            $service = Service::findOrFail($id);
            $service->delete();

            return response()->json(['message' => 'Service deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error deleting service'], 500);
        }
    }









}




