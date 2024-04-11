<?php

namespace App\Http\Controllers;
use App\Models\User;
use DataTables;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class ConsultationController extends Controller
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
    public function store(Request $request, $userId)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'user_id' => 'required|numeric', // You might want to validate user_id here
            'consultationName' => 'required|string',
            'price' => 'required|numeric',
            'payment_method' => 'required|string',
            // Add more validation rules if needed
        ]);

        // Create a new consultation
        $consultation = new Consultation();
        $consultation->user_id = $validatedData['user_id']; // Assuming user_id comes from the request
        $consultation->consultation_name = $validatedData['consultationName'];
        $consultation->price = $validatedData['price'];
        $consultation->payment_method = $validatedData['payment_method'];
        // Set other fields if needed

        // Save the consultation
        $consultation->save();

        // Return a response indicating success
        return response()->json(['message' => 'Consultation stored successfully'], 200);
    }

    public function getUserConsultations($userId)
    {
        $consultations = Consultation::where('user_id', $userId)->get();

        return response()->json($consultations);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }






      // Method to fetch a single consultation by ID for editing
    public function getConsultationById($id)
    {
        $consultation = Consultation::find($id);

        if (!$consultation) {
            return response()->json(['error' => 'Consultation not found'], 404);
        }

        return response()->json($consultation);
    }

    // Method to update a consultation
    public function updateConsultation(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|numeric', // You might want to validate user_id here
            'consultationName' => 'required|string',
            'price' => 'required|numeric',
            'payment_method' => 'required|string',
            // Add more validation rules if needed
        ]);

        $consultation = Consultation::find($id);

        if (!$consultation) {
            return response()->json(['error' => 'Consultation not found'], 404);
        }

        // Update consultation details
        $consultation->user_id = $validatedData['user_id'];
        $consultation->consultation_name = $validatedData['consultationName'];
        $consultation->price = $validatedData['price'];
        $consultation->payment_method = $validatedData['payment_method'];

        // Save the updated consultation
        $consultation->save();

        return response()->json(['message' => 'Consultation updated successfully'], 200);
    }

    

    /**
     * Remove the specified resource from storage.
     */

    public function deleteConsultation($id)
    {
        $consultation = Consultation::find($id);

        if (!$consultation) {
            return response()->json(['error' => 'Consultation not found'], 404);
        }

        // Delete the consultation
        $consultation->delete();

        return response()->json(['message' => 'Consultation deleted successfully'], 200);
    }





}

