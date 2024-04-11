<?php

namespace App\Http\Controllers;


    use App\Models\Consultation;
    use App\Models\User;
use App\Models\Service; 
use App\Models\MedicalHistory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Services\EventService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateEventRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ServiceController;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('home');
            }
            else if ($usertype=='admin')
            {
                return view ('admin.adminhome');
            }
        }
        
    }

    public function calendar (){
        return view ('admin.partials.calendar');
    }



    public function patients()
    {
        return view('admin.partials.patient-list');
    }



    public function createPatient(Request $request)
    {
        $validationRules = [
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'required'
        ];

        // Conditionally add the password validation rule
        if ($request->is('create-patient')) {
            // If the request is sent via create-patient route, password is set with a default value
            $validationRules['password'] = 'nullable'; // Ensure password is nullable in case it's not provided
        } else {
            // For other routes, password is required
            $validationRules['password'] = 'required';
        }

        $validatedData = $request->validate($validationRules);

        // Set a default password if creating user via create-patient route
        if ($request->is('create-patient')) {
            $validatedData['password'] = Hash::make('default_password'); // Set a default password
        }

        // Create the user with the validated data
        $user = User::create($validatedData);

        
    }



    public function fetchUsers(Request $request)
    {
        $columns = ['id', 'name', 'phone', 'email']; // Define columns available for searching

        $totalData = User::count(); // Get total number of records

        $searchValue = $request->input('search.value'); // Get search value entered by user
        $limit = $request->input('length'); // Number of records per page
        $start = $request->input('start'); // Start index of the records
        $orderColumn = $columns[$request->input('order.0.column')]; // Get column index to order by
        $orderDir = $request->input('order.0.dir'); // Get order direction

        // Query to fetch filtered data based on search value
        $users = User::select('id', 'name', 'phone', 'email')
                    ->where(function ($query) use ($searchValue, $columns) {
                        foreach ($columns as $column) {
                            $query->orWhere($column, 'like', '%' . $searchValue . '%');
                        }
                    })
                    ->orderBy($orderColumn, $orderDir)
                    ->offset($start)
                    ->limit($limit)
                    ->get();

        $totalFiltered = User::where(function ($query) use ($searchValue, $columns) {
                            foreach ($columns as $column) {
                                $query->orWhere($column, 'like', '%' . $searchValue . '%');
                            }
                        })
                        ->count(); // Get total number of filtered records

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $totalData,
            'recordsFiltered' => $totalFiltered,
            'data' => $users
        ]);
    }

        public function getUser($id)
    {
        $user = User::find($id); // Fetch user by ID

        if (!$user) {
            // Handle if user is not found
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json(['user' => $user]); // Return user details
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Perform deletion logic
        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Validate and update user details based on the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'required'
            // Add more validation rules as needed
        ]);

        $user->update($validatedData); // Update user details

        return response()->json(['message' => 'User updated successfully']);
    }




    public function showUserDetails(Request $request, $userId)
    {
        // Fetch user details based on $userId
        $user = User::find($userId); 

        // Fetch medical history count for the user
        $medicalHistoryCount = MedicalHistory::where('user_id', $userId)->count();

        // Pass the user data and medical history count to the view
        return view('admin.partials.patient-details', [
            'user' => $user,
            'medicalHistoryCount' => $medicalHistoryCount,
        ]);
    }

      public function storeMedicalHistory(Request $request, $userId)
    {
        // Validate and store the medical history data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Add more validation rules as needed
        ]);

        // Save the medical history for the given user
        $medicalHistory = new MedicalHistory();
        $medicalHistory->user_id = $userId;
        $medicalHistory->title = $validatedData['title'];
        $medicalHistory->description = $validatedData['description'];
        // Add more fields as needed
        $medicalHistory->save();

        return response()->json(['message' => 'Medical history added successfully']);
    }


        public function fetchMedicalHistory($userId)
    {
        // Fetch medical history for the given user ID
        $medicalHistory = MedicalHistory::where('user_id', $userId)->get();

        return response()->json(['medicalHistory' => $medicalHistory]);
    }



    public function fetchSpecificMedicalHistory($userId, $historyId)
    {
        $medicalHistory = MedicalHistory::where('user_id', $userId)
            ->where('id', $historyId)
            ->first();

        if (!$medicalHistory) {
            return response()->json(['error' => 'Medical history not found'], 404);
        }

        return response()->json(['medicalHistory' => $medicalHistory]);
    }

    public function updateMedicalHistory(Request $request, $historyId)
    {
        $medicalHistory = MedicalHistory::find($historyId);

        if (!$medicalHistory) {
            return response()->json(['error' => 'Medical history not found'], 404);
        }

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Add more validation rules as needed
        ]);

        $medicalHistory->title = $validatedData['title'];
        $medicalHistory->description = $validatedData['description'];
        // Update more fields as needed
        $medicalHistory->save();

        return response()->json(['message' => 'Medical history updated successfully']);
    }

    public function deleteMedicalHistory($historyId)
    {
        $medicalHistory = MedicalHistory::find($historyId);

        if (!$medicalHistory) {
            return response()->json(['error' => 'Medical history not found'], 404);
        }

        $medicalHistory->delete();

        return response()->json(['message' => 'Medical history deleted successfully']);
    }    


    public function Servicedetails () {
        return view ('admin.partials.service');
    }


    public function getUsers(Request $request)
    {
        $data = User::where('name', 'like', '%'.$request->searchItem.'%')
            ->select('id', 'name', 'phone')
            ->get();

        return response()->json($data);
    }

    public function getServices(Request $request)
    {
        $services = Service::where('name', 'like', '%' . $request->searchItem . '%')
            ->select('id', 'name')
            ->get();

        return response()->json($services);
    }


    //     public function termsofuse () {
    //     return view('terms');
    // }

    // public function privacypolicy (){
    //     return view('privacy');
    // }

    // public function podiatryassess() {
    //     return view('BilanPodologie');
    // }

    // public function pedicuretreatment () {
    //     return view ('pedicurie');
    // }

    // public function semelleortho () {
    //     return view ("semelle");
    // }

    // public function aboutaglae() {
    //     return view("about");
    // }






}





    //   // Retrieve users from the Users_table using the User model
    //     $users = User::select('id', 'name', 'phone')->get();

    //     // Format data as needed for Select2 dropdown (JSON format)
    //     $formattedUsers = $users->map(function ($user) {
    //         return [
    //             'id' => $user->id,
    //             'name' => $user->name,
    //             'phone' => $user->phone,
    //         ];
    //     });

    //     return response()->json($formattedUsers);























